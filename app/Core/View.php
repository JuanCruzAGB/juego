<?php
    namespace Core;

    /**
     * Maneja la presentación de datos.
     * 
     * Class View.
     * @package DaVinci\Core
     */
    class View{
        /**
         * Renderiza la $data con formato JSON.
         * 
         * @param string $sitio El sitio al cual se van a imrimir datos.
         * @param array $data Los datos a imprimir.
         * @param string $vista La vista a imprimir.
        **/
        public static function render($vista, $sitio, $data = []){
            // Revisamos si la renderizacion debe ser para app o para web.
            if($sitio == 'app'){
                // Cambiamos el header para poder imrpimir JSON.
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode($data);
            }else{
                // Creamos las variables para la vista en base a los valores provistos en $data.
                foreach ($data as $nombre => $valor){
                    ${$nombre} = $valor;
                }
                
                // Traemos la vista.
                require App::getViewsPath() . '/' . $vista . '.php';
            }
        }
    }