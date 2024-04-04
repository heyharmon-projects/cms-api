<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use DDD\Domain\Websites\Website;
use DDD\Domain\Organizations\Organization;
use DDD\Domain\Base\Users\User;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->organization = Organization::factory()->create();

    $this->user = User::factory()->create([
        'organization_id' => $this->organization->id
    ]);
});

it('indexes websites', function () {
    $websites = $this->organization->websites()->saveMany(
        Website::factory()->count(3)->make()
    );

    $this->actingAs($this->user)
        ->get('/api/admin/' . $this->organization->slug . '/websites')
        ->assertStatus(200)
        ->assertJsonCount(3, 'data')
        ->assertSee($websites[0]->title);
});