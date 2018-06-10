requeriste Core.php
<?php

    // mapear la url ingresada en el navegador,
    // 1.- Controlador
    // 2.- Método
    // 3.- Parámetro
    // Ejemplo: /articulos/actualizar/4

    Class Core{
        protected $controladorActual = 'Paginas';
        protected $metodoActual = 'index';
        protected $parametros = [];
              
        //constructor : es un metodo especial que se carga automaticamente una vez instanciada la clase
        public function __construct(){

            // print_r($this->getUrl());
            $url = $this->getUrl();
            
            //Busca si el controlador existe
                    //ucwords-> convierte en mayuscula el primer caracter de cada palabra de una cadena
            if(file_exists('../app/controladores/'.ucwords($url[0]).'.php')){
                //si existe se setea(se configura) como controlador por defecto
                $this->controladorActual=ucwords($url[0]);
                // unset indice
                        //unset-> destruye una variable especificada
                unset($url[0]);
                
                
            }else{
                $this->controladorActual= 'Problemas';
            }

            // requerir el controlador
            require_once '../app/controladores/'.$this->controladorActual.'.php';
            $this->controladorActual = new $this->controladorActual;
            
            //chequear la segunda parte de la URL que seria el método
            if(isset($url[1])){
                if(method_exists($this->controladorActual,$url[1])){
                    //chequeamos el metodo
                    $this->metodoActual = $url[1];
                    // unset indice
                        //unset-> destruye una variable especificada
                    unset($url[1]);
                }else{
                    $this->metodoActual = 'error';
                }
            }
            // echo get_class($this->controladorActual);  //nombre del controlador actual
            // echo $this->metodoActual;   //nombre del metodo actual

            //para probar traer método

            //obtener los posibles parámetros
            $this->parametros = $url ? array_values($url) : [];

            //llamar callback con parametros array
            call_user_func_array([$this->controladorActual,$this->metodoActual],$this->parametros);
        }

        public function getUrl(){
            // echo $_GET['url'];

            if(isset($_GET['url'])){
                // echo $_GET['url'];  //$controladorActual/$metodoActual/$parametros
                
                //rtrim-> Retira los espacios en blanco (u otros caracteres) del final de un string
                $url = rtrim($_GET['url'],'/');
                //echo $url;  //   paginas/articulo

                // para que esto sea interpretado, leido como una url
                $url = filter_var($url, FILTER_SANITIZE_URL);
                // echo $url;  //   paginas/articulo

                //explode-> Divide un string en varios string
                $url = explode('/',$url);
                //para imprimir la url
                //print_r ($url); //    Array ( [0] => paginas [1] => articulo )
                return $url;
            }
        }
    }

