<?php

namespace App\Controllers;

class Noticias extends BaseController
{
    public function index(): string
    {
        // TODO: Obtener noticias desde la base de datos
        // $noticias = $this->noticiasModel->findAll();

        return view('noticias');
    }

    public function detalle($slug = null): string
    {
        // TODO: Mostrar detalle de una noticia específica
        // $noticia = $this->noticiasModel->where('slug', $slug)->first();

        return view('noticia_detalle');
    }
}
