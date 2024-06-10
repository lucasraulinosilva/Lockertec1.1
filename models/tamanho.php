<?php

class Tamanho {

    private $idTamanho; 
    private $tamanho;
    private $precoSemestral;
    private $precoAnual;
    //Variável do banco de dados

    //Inicia o banco de dados na classe quando ela é instanciada

    function __construct() {
        include("bancoDeDados/conectarNoBancoClasse.php");
    }

    public function InserirTamanho() {
        $this -> mysqli->query("INSERT INTO preco VALUES (NULL, '".$this -> tamanho."', '".$this -> precoSemestral."', '".$this -> precoAnual."')");
    }

    public function AtualizarTamanho($campo, $conteudo) {
        $this -> mysqli->query("UPDATE tamanho SET ".$campo." = '".$conteudo."' WHERE idTamanho = ".$this -> idTamanho." ");
    }

    public function DeletarTamanho() {
        $this -> mysqli->query("DELETE FROM tamanho WHERE idTamanho = ".$this -> idTamanho."");
    }

    //Seleciona o preço do banco de dados de acordo com o id recebido

    public function SelecionarPreco() {
        $TamanhoSelecionado = $this -> mysqli->query("SELECT * FROM tamanho WHERE idTamanho = ".$this -> idTamanho."");
        while($row = $TamanhoSelecionado -> fetch_array()){
            $this -> idTamanho = $row['idTamanho'];
            $this -> tamanho = $row['tamanho'];
            $this -> precoSemestral = $row['precoSemestral'];
            $this -> precoAnual = $row['precoAnual'];
        }
    }

    public function GetIdTamanho() {
        return $this -> idTamanho;
    }

    public function Gettamanho() {
        return $this -> tamanho;
    }

    public function GetprecoSemestral() {
        return $this -> precoSemestral;
    }

    public function GetprecoAnual() {
        return $this -> precoAnual;
    }

    public function SetIdTamanho($idTamanho) {
        $this -> idTamanho = $idTamanho;
    }

    public function Settamanho($tamanho) {
        $this -> tamanho = $tamanho;
    }

    public function SetprecoSemestral($precoSemestral) {
        $this -> precoSemestral = $precoSemestral;
    }

    public function SetprecoAnual($precoAnual) {
        $this -> precoAnual = $precoAnual;
    }
    
}

?>