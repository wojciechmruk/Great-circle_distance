<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase {
    public function test_if_200() {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_if_dev_codetest_exists() {
        $response = $this->get('/');

        $response->assertSee('dev-codetest');
    }
}
