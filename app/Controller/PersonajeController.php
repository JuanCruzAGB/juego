<?php
	namespace Controller;
	
	use Exception;
	use Core\Route;
	use Core\View;

	class PersonajeController{		
		/** Carga la seccion "Listado de Personajes". */
		public function listado(){
			View::render('personaje/listado', 'web');
		}
	}