<?php

namespace DDD\Domain\Sites\Jobs;

use DDD\App\Services\UrlService;
use DDD\Domain\Pages\Page;
use DDD\Domain\Sites\Site;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
// Facades
use Illuminate\Foundation\Bus\Dispatchable;
// Services
use Illuminate\Queue\InteractsWithQueue;
// Domains
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class CrawlSiteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $timeout = 0;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 1;

    /**
     * Public variables.
     */
    public $site;

    public $page;

    /**
     * Contructor
     *
     * @return void
     */
    public function __construct(Site $site, Page $page)
    {
        $this->site = $site;
        $this->page = $page;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Get page
        // $response = Http::get('http://localhost:5001/bloomcu-scraping-functions/us-central1/cheerio/page', [
        $response = Http::get('https://us-central1-bloomcu-scraping-functions.cloudfunctions.net/cheerio/page', [
            'url' => $this->page->url,
        ])->json();

        // Fail job
        if ($response['status'] !== 200) {
            $this->page->update([
                'is_crawled' => true,
                'status'     => $response['status'],
            ]);

            return true;
        }

        // Update page
        $this->page->update([
            'is_crawled' => true,
            'status'     => $response['status'],
            'title'      => $response['title'],
            'wordcount'  => $response['wordcount'],
            // 'body'       => $response['body']
        ]);

        // Iterate over each link
        foreach ($response['links'] as $link) {
            // TODO: Right an action that processes the page via a pipeline?
            if (
                // TODO: Get the host and sheme in the crawler function
                UrlService::getHost($link['url']) === $this->site->host && // Host matches site
                UrlService::getScheme($link['url']) === $this->site->scheme && // Scheme matches site
                ! Page::where('url', $link['url'])->exists() // Doesn't already exist
            ) {
                $page = $this->site->pages()->create([
                    'type'       => $link['type'],
                    'url'        => $link['url'],
                    'is_crawled' => false,
                ]);

                // Crawl it
                if ($link['type'] === 'link') {
                    dispatch(new self($this->site, $page));
                }
            }
        }
    }
}