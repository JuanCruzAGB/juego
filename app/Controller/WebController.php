<?php
	namespace Controller;
	
	use Exception;
	use Core\Route;
	use Core\View;

	class WebController{		
		/** Carga la seccion principal. */
		public function index(){
			View::render('web/home', 'web');
		}

		/** Carga la seccion ayuda. */
		public function ayuda(){
			View::render('web/ayuda', 'web');
		}
	}