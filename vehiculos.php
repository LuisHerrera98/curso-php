<?php

        class Coche{

            protected $ruedas;

            var $color;

            protected $motor;

            function Coche(){//METODO CONSTRUCTOR

                $this->ruedas=4;
                $this->color="";
                $this->motor=1600;

            }

            function arrancar(){
                
                echo "estoy arrancando <br>";
            }
            function get_ruedas(){
                return $this->ruedas;
            }
            function get_motor(){
                return $this->motor;
            }

            function girar(){
                echo "estoy girando <br>";
            }

            function frenar(){
                echo "estoy frenando <br>";
            }

            function set_color($color_coche,$nombre_coche){
                $this->color=$color_coche;
                echo "El color de el coche : " . $nombre_coche . " es " . $this->color . "<br>";
            }

        }

//--------------------------------------------------------------------------------------------------------------

        class Camion extends Coche{

            var $ruedas;

            var $color;

            var $motor;

            function Camion(){//METODO CONSTRUCTOR

                $this->ruedas=8;
                $this->color="gris";
                $this->motor=2600;

            }

            function establecer_color($color_camion, $nombre_camion){
                $this->color = $color_camion;
                echo "El color del camion : " . $nombre_camion . " es: " . $this->color . "<br>";
            }

            function arrancar(){

                parent::arrancar();

                echo "Camion arrancado";

            }
        }
    

?>