<?php
    use Core\Route;
    //WebController
    Route::addRoute('GET', '/', 'WebController@index');
    Route::addRoute('GET', '/inicio', 'WebController@index');

    Route::addRoute('GET', '/ayuda', 'WebController@ayuda');
    
    //PersonajeController
    Route::addRoute('GET', '/personajes', 'PersonajeController@listado');