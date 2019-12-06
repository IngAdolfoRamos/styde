<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function show_welcome_users_with_nickname()
    {
        $this->withoutExceptionHandling();
        $this->get('/saludo/adolfo/fofin')
            ->assertStatus(200)
            ->assertSee('Bienvenido Adolfo, tu nickname es fofin');
    }
    
    /** @test */
    function show_welcome_users_without_nickname()
    {
        $this->get('/saludo/adolfo')
            ->assertStatus(200)
            ->assertSee('Bienvenido Adolfo');
    }
}
