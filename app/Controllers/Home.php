<?php

namespace App\Controllers;

use League\Plates\Engine;

class Home {
    private $view;

    public function __construct(){
        $this->view =  Engine::create(__DIR__."/../../views/home", "php");
    }

    public function home(){
        echo $this->view->render("home", [
            "title" => "Página inicial"
        ]);
    }
}