<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Para automatizar a padronizar existem controllers que são utilizados como o 'index', 'destroy'. Convenção
     */

    public function index(Request $request) //convenção usar o index na página inicial de uma controller
    {
        // echo $request->url();
        /* Método para fazer uma busca de um parâmetro específico 
        echo $request->query('parametro');
        Método para buscar o array, útil para ver o fluxo da rota
        var_dump ($request->query());*/
        // exit(); 
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD'
        ];

        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}
