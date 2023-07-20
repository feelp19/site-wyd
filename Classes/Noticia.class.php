<?php
    require_once 'Conexao.class.php';
    class Noticia extends Conexao{
        private $id;
        private $nome;
        private $descr;

        function getId(){
            return $this->id;
        }

        function setId($id){
            $this->id = $id;
        }

        function getNome(){
            return $this->nome;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function getDescr(){
            return $this->descr;
        }

        function setDescr($descr){
            $this->descr = $descr;
        }

        function Insere(){
            $link = parent::conecta();
            $sql = "INSERT INTO noticias(`id`,`nome`,`descr`) VALUES (null,'{$this->nome}','{$this->descr}')";
            $res = mysqli_query($link,$sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }

        function listaNoticias(){
            $link = parent::conecta();
            $sql = "SELECT `nome`, `descr` FROM `noticias` ORDER BY id DESC LIMIT 5";
            $res = mysqli_query($link,$sql);
             while($a=mysqli_fetch_assoc($res)){ //var $a transforma em array
                   foreach ($a as $i => $rows) {
                        echo  "<h3>".$i["nome"]."</h3>" .$i["descr"];
                        $i++;

                    }
                }
            }
        }
    
?>