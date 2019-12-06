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
        $this->withoutExceptionHandling();
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios');
	}

	/** @test */
    function loading_user_details_page()
    {
        $this->withoutExceptionHandling();
        $this->get('/usuarios/1')
            ->assertStatus(200)
            ->assertSee('Detalle del usuario: 1');
	}

	/** @test */
    function loading_new_user_page()
    {
        $this->withoutExceptionHandling();
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
    
    /** @test */
    function loading_users_edit_page(){
        $this->withoutExceptionHandling();
        $this->get('/usuarios/1/editar')
            ->assertStatus(200)
            ->assertSee('Editar informacion del usuario: 1');
    }

}
