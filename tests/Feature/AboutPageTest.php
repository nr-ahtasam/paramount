<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutPageTest extends TestCase
{
    public function test_about_page_is_available(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertSee('Engineering progress with trust, precision, and global ambition.');
    }
}
