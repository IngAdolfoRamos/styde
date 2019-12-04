<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function loading_user_index_page()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
	}

	/** @test */
    function loading_user_details_page()
    {
        $this->get('/usuarios/1')
            ->assertStatus(200)
            ->assertSee('Detalle del usuario: 1');
	}

	/** @test */
    function loading_new_user_page()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
	}

}
