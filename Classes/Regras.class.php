<?php
    require_once 'Conexao.class.php';
    class Regras extends Conexao{ // herança da classe pai com função para conectar ao banco
        private $id;
        private $regras;

        function getRegras(){
            return $this->regras;
        }

        function setRegras($regras){
            $this->regras = $regras;
        }

        function insereRegra(){
            $link = parent::conecta();
            $sql = "INSERT INTO regras(`id`,`regra`) VALUES (null,'{$this->regras}')";
            $res = mysqli_query($link,$sql);

            if($res){
                return true;
            }else{
                return false;
            }
        }

        function listaRegra(){
            $link = parent::conecta();
            $sql = "SELECT regra FROM regras";
            $res = mysqli_query($link,$sql);
                while($a=mysqli_fetch_array($res)){ //var $a transforma string em array
                    foreach(array($a) as $i => $rs){ //foreach percorre array $a em $i recebendo em $rs
                       echo  $rs=$a[$i] ."<br/><br/>";
                        $i++; //incremento para regras
                    }
                }
        }

    }



?>