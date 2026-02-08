<?php

namespace App\Controllers;

use Config\NoticiasData;

class Home extends BaseController
{
    public function index(): string
    {
        // Obtenemos las últimas 2 noticias para mostrar en el Home
        $noticias = array_slice(NoticiasData::$items, 0, 2);

        return view('home', [
            'noticias' => $noticias
        ]);
    }
}