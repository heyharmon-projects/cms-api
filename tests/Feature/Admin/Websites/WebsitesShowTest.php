<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use DDD\Domain\Websites\Website;
use DDD\Domain\Organizations\Organization;
use DDD\Domain\Base\Users\User;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->organization = Organization::factory()->create();

    $this->website = Website::factory()->create([
        'organization_id' => $this->organization->id
    ]);

    $this->user = User::factory()->create([
        'organization_id' => $this->organization->id
    ]);
});

it('shows a website', function () {
    $this->actingAs($this->user)
        ->get('/api/admin/' . $this->organization->slug . '/websites/' . $this->website->id)
        ->assertStatus(200)
        ->assertSee($this->website->title);
});