<?php

class Funcionario{

    private $idFuncionario;
    private $email;
    private $emailAlternativo;
    private $senha;
    //Variável do banco de dados

    //Inicia o banco de dados na classe quando ela é instanciada

    public function __construct() {
        include("bancoDeDados/conectarNoBancoClasse.php");
    }

    public function InserirFuncionario() {
        $this -> mysqli -> query("INSERT INTO funcionario VALUES(NULL, '".$this -> email."', '".$this -> emailAlternativo."', '".$this -> senha."') ");
    }

    public function AtualizarFuncionario($campo, $conteudo) {
        $this -> mysqli -> query("UPDATE funcionario SET ".$campo." = ".$conteudo." WHERE idFuncionario = ".$this -> idFuncionario." ");
    }

    public function DeletarFuncionario() {
        $this -> mysqli -> query("DELETE FROM funcionario WHERE idFuncionario = ".$this -> idFuncionario." ");
    }

    //Seleciona o funcionario do banco de dados de acordo com o id recebido

    public function SelecionarFuncionario() {
        $funcionarioSelecionado = $this -> mysqli -> query("SELECT * FROM funcionario WHERE idFuncionario = ".$this -> idFuncionario." ");
        while($row = $funcionarioSelecionado -> fetch_array()) {
            $this -> idFuncionario = $row["idFuncionario"];
            $this -> email = $row["email"];
            $this -> emailAlternativo = $row["emailAlternativo"];
            $this -> senha = $row["senha"];
        }
    }

    public function GetIdFuncionario() {
        return $this -> idFuncionario;
    }

    public function Getemail() {
        return $this -> email;
    }

    public function GetemailAlternativo() {
        return $this -> emailAlternativo;
    }

    public function Getsenha() {
        return $this -> senha;
    }

    public function SetIdFuncionario($idFuncionario) {
        $this -> idFuncionario = $idFuncionario;
    }
 
    public function Setemail($email) {
        $this -> email = $email;
    }

    public function SetemailAlternativo($emailAlternativo) {
        $this -> emailAlternativo = $emailAlternativo;
    }

    public function Setsenha($senha) {
        $this -> senha = $senha;
    }
 
}

?>