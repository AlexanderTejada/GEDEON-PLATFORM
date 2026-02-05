<?php

namespace App\Controllers;

use Config\NoticiasData;

class Noticias extends BaseController
{
    public function index(): string
    {
        // Obtenemos las noticias del archivo de configuración (nuestra "DB" hardcodeada)
        $noticias = NoticiasData::$items;

        return view('noticias', [
            'noticias' => $noticias
        ]);
    }

    public function detalle($slug = null): string
    {
        $noticias = NoticiasData::$items;
        
        // Buscamos la noticia que coincida con el slug
        $noticia = null;
        foreach ($noticias as $item) {
            if ($item['slug'] === $slug) {
                $noticia = $item;
                break;
            }
        }

        if (!$noticia) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("La noticia '$slug' no existe.");
        }

        return view('noticia_detalle', [
            'noticia' => $noticia
        ]);
    }
}
