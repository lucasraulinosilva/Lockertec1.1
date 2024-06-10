<?php

class Curso {

    private $idCurso; 
    private $nome;
    //Variável do banco de dados

    //Inicia o banco de dados na classe quando ela é instanciada

    public function __construct() {
        include("bancoDeDados/conectarNoBancoClasse.php");
    }

    public function InserirCurso() {
        $this -> mysqli->query("INSERT INTO curso VALUES (NULL,'".$this -> nome."')");
    }

    public function AtualizarCurso($campo, $conteudo) {
        $this -> mysqli->query("UPDATE curso SET ".$campo." = '".$conteudo."' WHERE idCurso = ".$this -> idCurso." ");
    }

    public function DeletarCurso() {
        $this -> mysqli->query("DELETE FROM curso WHERE idCurso = ".$this -> idCurso."");
    }

    //Seleciona o curso do banco de dados de acordo com o id recebido

    public function SelecionarCurso() {
        $cursoSelecionado = $this -> mysqli->query("SELECT * FROM curso WHERE idCurso = ".$this -> idCurso."");
        while($row = $cursoSelecionado -> fetch_array()){
            $this -> idCurso = $row['idCurso'];
            $this -> nome = $row['nome'];
        }
    }

    public function GetIdCurso() {
        return $this -> idCurso;
    }

    public function Getnome() {
        return $this -> nome;
    }

    public function SetIdCurso($idCurso) {
        $this -> idCurso = $idCurso;
    }

    public function Setnome($nome) {
        $this -> nome = $nome;
    }

}

?>