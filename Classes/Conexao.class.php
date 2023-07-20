<?php
    class Conexao{
        protected $conexao;
        private $host;
        private $user;
        private $senha;
        private $bd;

        function __construct(){
            $this->host = "localhost";
            $this->user = "root";
            $this->senha = "";
            $this->bd = "rules";

            $this->conexao = mysqli_connect($this->host, $this->user,$this->senha,$this->bd);
        }

        function conecta(){
            if($this->conexao){
                return $this->conexao;
            }else{
                throw new Exception("ERROR_CONEXAO");
            }
        }
    }



?>