<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use DDD\Domain\Organizations\Organization;
use DDD\Domain\Base\Users\User;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->organization = Organization::factory()->create();

    $this->user = User::factory()->create([
        'organization_id' => $this->organization->id
    ]);
});

it('stores a website', function () {
    $this->actingAs($this->user)
        ->post('/api/admin/' . $this->organization->slug . '/websites', [
            'title' => 'Test Website',
            'domain' => 'test.com'
        ])
        ->assertStatus(201);

    $this->assertDatabaseHas('websites', [
        'organization_id' => $this->organization->id,
        'title' => 'Test Website',
        'domain' => 'test.com'
    ]);
});

it('validates the request details', function () {
    $this->actingAs($this->user)
        ->post('/api/admin/' . $this->organization->slug . '/websites')
        ->assertStatus(422)
        ->assertSee('errors')
        ->assertInvalid([
            'domain' => 'required'
        ]);
});