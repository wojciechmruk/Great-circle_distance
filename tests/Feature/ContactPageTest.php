<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactPageTest extends TestCase {
    public function test_if_200() {
        $response = $this->get('/contacts');

        $response->assertStatus(200);
    }

    public function test_if_search_header_exists() {
        $response = $this->get('/contacts');

        $response->assertSee('Type something to search the table :');
    }
}
