<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserFeatureTest extends TestCase
{
    public function test_home_page_returns_status_200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

