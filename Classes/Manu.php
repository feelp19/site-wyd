<?php
/**
 * Created by PhpStorm.
 * User: feeli
 * Date: 22/07/2017
 * Time: 01:48
 */
require_once 'Classes/Conexao.class.php';
class Manu extends Conexao
{
    private $id;
    private $data;
    private $nome;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

        function Cadastrar(){
            $link = parent::conecta();
            $sql = "INSERT INTO manu(`id`,`nome`,`data`) VALUES (null,'{$this->nome}','{$this->data}')";
            $exec = mysqli_query($link,$sql);

            if($exec){
                return true;
            }else{
                return false;
            }
        }

        function listaManu()
        {
            $link = parent::conecta();
            $sql = "SELECT `nome`,`data` FROM `manu` ORDER BY id DESC LIMIT 5";
            $exec = mysqli_query($link, $sql);

            if (mysqli_num_rows($exec) == 0) { //verificação de registros by-feeh
                return "Nenhuma Manutenção Cadastrada ainda ";
            } else {
                while ($a = mysqli_fetch_assoc($exec)) { // fetch_assoc obtendo todos os resultados do banco de dados conforme a consulta
                    foreach ($a as $i => $rows) {
                        echo $rows = $a[$i] . "<br/>";
                        $i++;
                    }
                }
            }
        }

}