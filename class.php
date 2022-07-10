<?php
    class CRectangulo{ 
        private $alto;
        private $ancho;
        public function __construct($al,$an){
            $this->alto=$al;
            $this->ancho=$an;
        }
        public function CalcularPerimetro($al,$an){
            return ($al*2)+($an*2);
        }
        public function CalcularArea($al,$an){
            return $al*$an;
        }
        public function MostrarDatos($al,$an){
            echo("|-Propiedades del Rectangulo-| <br>");
            echo("Alto: ".$this->alto."<br>");
            echo("Ancho: ".$this->ancho."<br>");
            echo("Perimetro: ".$this->CalcularPerimetro($al,$an)."<br>");
            echo("Area: ".$this->CalcularArea($al,$an)."<br>");
        }
    }
?>