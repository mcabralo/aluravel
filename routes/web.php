<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Criar uma nova rota

// Route::get('/ola', function() {
//     echo "Olá Mundo!";
// });

// Adaptando Rota para entrar no assunto, array

// Route::get('/series', function() {
//     $series = [
//         'Grey\'s Anatomy',
//         'Lost',
//         'Agents of SHIELD'
//     ];

//     $html = "<ul>";
//         foreach ($series as $serie) {
//             $html .="<li>$serie</li>";
//         }
//     $html .= "</ul>";

//     echo $html;
// });

/*Uso de uma controller para separar o código e deixar mais específico
 *Route::get('/series', 'SeriesController@listarSeries');
 */

Route::get('/series', 'SeriesController@index'); //Feita a troca do nome do método para adequar a convenção