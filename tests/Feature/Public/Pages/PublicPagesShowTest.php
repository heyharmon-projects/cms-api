<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use DDD\Domain\Websites\Website;
use DDD\Domain\Pages\Page;
use DDD\Domain\Organizations\Organization;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->organization = Organization::factory()->create();

    $this->website = Website::factory()->create([
        'organization_id' => $this->organization->id
    ]);

    $this->page = Page::factory()->create([
        'website_id' => $this->website->id,
    ]);
});

it('shows a page', function () {
    $this->get('/api/public/' . $this->organization->slug . '/websites/' . $this->website->id . '/pages?path=' . $this->page->path)
        ->assertStatus(200)
        ->assertSee($this->page->title);
});