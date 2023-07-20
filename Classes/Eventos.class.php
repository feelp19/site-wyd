<?php
/**
 * Created by PhpStorm.
 * User: feeli
 * Date: 25/07/2017
 * Time: 01:08
 */
require_once 'Conexao.class.php';
class Eventos extends Conexao
{
    private $id;
    private $nome;
    private $descri;

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

    /**
     * @return mixed
     */
    public function getDescri()
    {
        return $this->descri;
    }

    /**
     * @param mixed $descri
     */
    public function setDescri($descri)
    {
        $this->descri = $descri;
    }



    public function insereEvento(){
        $link = parent::conecta();
        $sql = "INSERT INTO evento (`id`,`nome`,`descri`) VALUES (null,'{$this->nome}','{$this->descri}')";
        $exe = mysqli_query($link,$sql);

        if($exe){
            return true;
        }else{
            return false;
        }
    }

    public function listaNomeEvento(){
        $link = parent::conecta();
        $sql = "SELECT `nome`,`descri` FROM `evento` ORDER BY id DESC LIMIT 1";
        $exe = mysqli_query($link,$sql);

        if(mysqli_num_rows($exe) == 0){
            return "Nenhum Evento Cadastrado";
        }else{
            while($a = mysqli_fetch_assoc($exe)){
                foreach($a as $i => $row){
                    echo $row=$a[$i] ."<br/>";
                    $i++;
                }
            }
        }
    }

}