<?php

class telefone{

    private $idTelefone;
    private $idAluno;
    private $ddd;
    private $tipo;
    private $numero;
    //Variável do banco de dados

    //Inicia o banco de dados na classe quando ela é instanciada

    public function __construct() {
        include("bancoDeDados/conectarNoBancoClasse.php");
    }

    public function InserirTelefone() {
        $this -> mysqli -> query("INSERT INTO telefone VALUES(NULL, '".$this -> idAluno."', '".$this -> ddd."', '".$this -> tipo."','".$this -> numero."') ");
    }

    public function AtualizarTelefone($campo, $conteudo) {
        $this -> mysqli -> query("UPDATE telefone SET ".$campo." = ".$conteudo." WHERE idTelefone = ".$this -> idTelefone." ");
    }

    public function DeletarTelefone() {
        $this -> mysqli -> query("DELETE FROM telefone WHERE idTelefone = ".$this -> idTelefone." ");
    }

    //Seleciona o funcionario do banco de dados de acordo com o id recebido

    public function SelecionarTelefone() {
        $telefoneSelecionado = $this -> mysqli -> query("SELECT * FROM telefone WHERE idTelefone = ".$this -> idTelefone." ");
        while($row = $telefoneSelecionado -> fetch_array()) {
            $this -> idTelefone = $row["idTelefone"];
            $this -> idAluno = $row["idAluno"];
            $this -> ddd = $row["ddd"];
            $this -> tipo = $row["tipo"];
            $this -> numero = $row["numero"];
        }
    }

    public function GetIdTelefone() {
        return $this -> idTelefone;
    }

    public function GetidAluno() {
        return $this -> idAluno;
    }

    public function Getddd() {
        return $this -> ddd;
    }

    public function Gettipo() {
        return $this -> tipo;
    }

    public function Getnumero() {
        return $this -> numero;
    }

    public function SetIdTelefone($idTelefone) {
        $this -> idTelefone = $idTelefone;
    }
 
    public function SetidAluno($idAluno) {
        $this -> idAluno = $idAluno;
    }

    public function Setddd($ddd) {
        $this -> ddd = $ddd;
    }

    public function Settipo($tipo) {
        $this -> tipo = $tipo;
    }

    public function Setnumero($numero) {
        $this -> numero = $numero;
    }
 
}

?>