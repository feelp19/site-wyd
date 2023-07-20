<?php
    
    Class CadastroSha{
        private $accdir;
        private $userid;
        private $pass;
        private $init;
        private $userlen;
        private $passlen;
        private $redirect;

        function __construct(){
            $this->accdir = "";
            $this->userid = "";
            $this->pass ="";
            $this->init ="";
            $this->userlen ="";
            $this->passlen ="";
            $this->redirect="index.php";
        }

        function registro(){
            $this->accdir = "PATH_DB_ACCOUNT";
            $this->userid = trim($_POST['id']);
            $this->pass = trim($_POST['senha']);
            $this->init = substr($this->userid,0,1);
            $this->userlen = strlen($this->userid);
            $this->passlen = strlen($this->pass);
             if(!ereg("^[0-9a-zA-Z]{4,12}$",$this->userid)){
                    echo "O seu ID de Usuario deve ter Caracteres de a-z, A-Z, 0-9 e de 4 a 10 digitos.";exit();
            }
            if(!ereg("^[0-9a-zA-Z]{4,12}$",$this->pass)){
                    echo "A sua Senha deve ter Caracteres de a-z, A-Z, 0-9 e de 4 a 10 digitos.";exit();
            }

            if (ereg("^[a-zA-Z]$",$this->init)){
                $initial=strtoupper($this->init);
            }
            else{
                $this->init="etc";
            }
            if(file_exists($this->accdir."\\".$this->init."\\".$this->userid)){
                echo '<script>alert("Id ja Existente ! Tente Novamente.");</script>';
            }else{
                $op = @fopen("C:/xampp/htdocs/cadastro-new/5900xt",r) or die("Falha ao criar Acc");
                $acc = @fread($op,9999);
                $id = substr($acc,0,$this->userlen);
                $senha = substr($acc,16,$this->passlen);
                $acc = str_replace($id,$this->userid,$acc);
                $acc = str_replace($senha,$this->pass,$acc);
                $op2 = @fopen($this->accdir."\\".$this->init."\\".$this->userid,a);
                @fwrite($op2,$acc) or die("pasta não localizada");
                @fclose($op);
                echo '<script>alert("Cadastrado Com Sucesso");</script>';
                exit();
            }
        }

        function Redirect(){
            header("Location:$this->redirect");
        }
    }



?>
