<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class postCommentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('POST', '/addcomment', ['user_email' => 'chandula@gmail.com', 
        'boarding_no' => 1, 
        'comment' => 'It is nice place to live']);
        $response->assertStatus(200);
    }
}
