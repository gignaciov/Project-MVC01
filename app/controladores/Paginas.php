requeriste paginas
<?php

    class Paginas extends Controlador{
        
        public function __construct(){

            $this->articuloModelo = $this->modelo('Articulo');

            echo "controlador de paginas cargado";
            print("controlador de paginas cargado");
            
        }
        public function index(){

            $articulos = $this->articuloModelo->obtenerArticulos();

            $datos = [
                'titulo' => 'Bienvenidos al Project-MVC01',
                'articulos'=> $articulos
            ];

            $this->vista('paginas/inicio',$datos);
        }
        public function articulo(){
            $this->vista('paginas/articulo');
        }

        public function actualizar($num_registro){
            echo $num_registro;
        }

        public function editar(){

        }        
    }
