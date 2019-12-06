<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    /* Use __invoke when this method is required to have only one method,
    ** then dont point to any method after controller in routes. */

    public function greeting($name){
        $name = ucfirst($name);
        return "Bienvenido $name";
    }

    public function greetingNickname($name, $nickname = null){     
        $name = ucfirst($name); 
        return "Bienvenido $name, tu nickname es $nickname";
    }
}
