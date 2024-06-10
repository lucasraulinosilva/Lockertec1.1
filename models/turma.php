<?php

class Turma{

    private $idTurma;
    private $nome;
    private $periodo;
    private $idCurso;
    //Variável do banco de dados

    //Inicia o banco de dados na classe quando ela é instanciada

    public function __construct() {
        include("bancoDeDados/conectarNoBancoClasse.php");
    }

    public function InserirTurma() {
        $this -> mysqli -> query("INSERT INTO turma VALUES(NULL, '".$this -> nome."', '".$this -> periodo."', '".$this -> idCurso."') ");
    }

    public function AtualizarTurma($campo, $conteudo) {
        $this -> mysqli -> query("UPDATE turma SET ".$campo." = ".$conteudo." WHERE idTurma = ".$this -> idTurma." ");
    }

    public function DeletarTurma() {
        $this -> mysqli -> query("DELETE FROM turma WHERE idTurma = ".$this -> idTurma." ");
    }

    //Seleciona o funcionario do banco de dados de acordo com o id recebido

    public function SelecionarTurma() {
        $turmaSelecionado = $this -> mysqli -> query("SELECT * FROM turma WHERE idTurma = ".$this -> idTurma." ");
        while($row = $turmaSelecionado -> fetch_array()) {
            $this -> idTurma = $row["idTurma"];
            $this -> nome = $row["nome"];
            $this -> periodo = $row["periodo"];
            $this -> idCurso = $row["idCurso"];
        }
    }

    public function GetIdTurma() {
        return $this -> idTurma;
    }

    public function Getnome() {
        return $this -> nome;
    }

    public function Getperiodo() {
        return $this -> periodo;
    }

    public function GetidCurso() {
        return $this -> idCurso;
    }

    public function SetIdTurma($idTurma) {
        $this -> idTurma = $idTurma;
    }
 
    public function Setnome($nome) {
        $this -> nome = $nome;
    }

    public function Setperiodo($periodo) {
        $this -> periodo = $periodo;
    }

    public function SetidCurso($idCurso) {
        $this -> idCurso = $idCurso;
    }
 
}

?>