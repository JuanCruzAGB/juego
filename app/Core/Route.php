<?php
    namespace Core;

    class Route{
        /** @var array Contiene las rutas de la aplicación. */
        private static $routes = [
            'GET' => [],
            'POST' => [],
            'PUT' => [],
            'DELETE' => [],
        ];

        /** @var string La url. */
        private $url;

        /** @var string La ruta. */
        private $route;

        /** @var string  La acción. */
        private $action;

        /** @var string  El verbo de la petición (GET, POST, PUT, DELETE). */
        private $method;

        /** @var array Los parámetros de la URL, en caso de existir. */
        private static $params = [];

        /** Route constructor. Obtiene los datos de la url, y verifica si la ruta existe. */
        public function __construct(){
            // Obtenemos la url.
            $protocol = $_SERVER['REQUEST_SCHEME'];
            $server = $_SERVER['SERVER_NAME'];
            $url = $_SERVER['REQUEST_URI'];

            // Guardamos la url.
            $this->url = $protocol . "://" . $server . $url;

            // Obtenemos la ruta.
            $indexPath = $protocol . "://" . $server . $_SERVER['PHP_SELF'];
            $indexPath = substr($indexPath, 0, -10);

            // Guardamos la ruta.
            $this->route = str_replace($indexPath, '', $this->url);

            // Obtenemos el metodo.
            $this->method = $_SERVER['REQUEST_METHOD'];

            // Obtenemos la accion.
            $this->action =  $this->parseUrl($this->route);
        }

        /**
         * La acción a ejecutar.
         * 
         * @param string $url.
         * @return bool|string
         * @throws \Exception
         */
        public function parseUrl($url){
            // Verificamos si la url existe
            if(isset(self::$routes[$this->method][$url])) {
                return self::$routes[$this->method][$url];
            }

            // Buscamos si la url coincide con alguna de las rutas con parámetros.
            $route = $this->getParameterizedRoute($url);

            if($route){
                return $route;
            }

            throw new \Exception('La url ' . $url . " no existe.");
        }

        /**
         * Compara la url con las rutas con parametros.
         * 
         * @param string $url.
         * @return bool|string
         */
        public function getParameterizedRoute($url){
            // Explotamos y obtenemos las partes de la url.
            $urlParts = explode('/', $url);

            // Recorremos todas nuestras rutas.
            foreach (self::$routes[$this->method] as $route => $action){
                // Explotamos la ruta.
                $routeParts = explode('/', $route);

                // Comparamos la cantidad de partes de la ruta con la cantidad de la url.
                if(count($urlParts) === count($routeParts)){
                    // Recorremos las partes.
                    if($this->checkParts($urlParts, $routeParts)){
                        return $action;
                    }
                }else{
                    // La ruta no matcheó.
                }
            }

            return false;
        }

        /**
         * Compara cada parte que forma una url y una ruta.
         * 
         * @param array $url.
         * @param array $routeParts.
         * @return bool
         */
        public function checkParts($urlParts, $routeParts){
            // Recorremos las partes de la url.
            foreach ($urlParts as $key => $value){
                $parametros = [];

                // Tres posibilidades:
                // 1. Que las partes sean iguales.
                // 2. Que la parte de la ruta sea un parámetro.
                // 3. Que no coincidan en ningún aspecto.

                // Verificamos 1.
                if($urlParts[$key] !== $routeParts[$key]){
                    // Verificamos 2.
                    $posLlaveApertura = strpos($routeParts[$key], "{");

                    // Si no tiene una llave, entonces retornamos false.
                    if($posLlaveApertura !== 0) {
                        // Si UNA de las partes de la ruta no coincide entonces ya informamos que esta ruta no es.
                        return false;
                    }

                    // Si sí tiene una llave, entonces es un parámetro! :D.
                    // Vamos a obtener el nombre del mismo, y guardar su valor en el array.
                    // Quitamos del nombre del parámetro el primer caracter ("{") y el último ("}").
                    $nombreParam = substr($routeParts[$key], 1, -1);

                    // Guardamos su valor con el nombre.
                    $parametros[$nombreParam] = $urlParts[$key];
                }

                // Guardamos los parámetros en la propiedad de la clase.
                self::$params = $parametros;
            }

            return true;
        }

        /**
         * Registra una ruta en el sitio.
         * 
         * @param string $verb Es el método/verbo de la petición: 'GET', 'POST', 'PUT', 'DELETE'.
         * @param string $url La ruta a registrar.
         * @param string $action El método del controlador que se tiene que ejecutar. Sintaxis: Controller@metodo.
         */
        public static function addRoute($verb, $url, $action){
            $verb = strtoupper($verb);
            self::$routes[$verb][$url] = $action;
        }

        /**
         * Obtiene el parametro deseado.
         * 
         * @return array
         */
        public static function getParams($name){
            return self::$params[$name];
        }

        /**
         * Obtiene la url.
         * 
         * @return string
         */
        public function getUrl(){
            return $this->url;
        }

        /**
         * Obtiene la ruta.
         * 
         * @return string
         */
        public function getRoute(){
            return $this->route;
        }

        /**
         * Obtiene la accion.
         * 
         * @return string
         */
        public function getAction(){
            return $this->action;
        }
    }