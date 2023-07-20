<?php
    class Titulo{
        public $news;
        public $shadow;
        public $title;
        public $termo;

        public function __construct(){
            $this->news =  "New StarWar 7.62";
            $this->shadow = "Shadow-Destiny 7.54";
            $this->title = "Servidores New StarWar";
            $this->termo = "Termos e Condições";
        }

        public function NewStar(){
            echo "$this->news";
        }

        public function ShadowDes(){
            echo "$this->shadow";
        }

        public function Title(){
            echo "$this->title";
        }

        public function Termos(){
            echo "$this->termo";
        }
    }



?>