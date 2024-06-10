<?php

class Reserva {

    private $idReserva; 
    private $idPedido;
    private $idAluno;
    private $dataInicial;
    private $dataFinal;
    private $status;
    //Variável do banco de dados

    //Inicia o banco de dados na classe quando ela é instanciada

    public function __construct() {
        include("bancoDeDados/conectarNoBancoClasse.php");
    }

    public function InserirReserva() {
        $this -> mysqli->query("INSERT INTO reserva VALUES (NULL, '".$this -> idPedido."', '".$this -> idAluno."', '".$this -> dataInicial."', '".$this -> dataFinal."', '".$this -> status."')");
    }

    public function AtualizarReserva($conteudo) {
        $this -> mysqli->query("UPDATE reserva SET situacao = '".$conteudo."' WHERE idReserva = ".$this -> idReserva." ");
    }

    //Seleciona o pedido do banco de dados de acordo com o id recebido

    public function SelecionarReserva() {
        $reservaSelecionado = $this -> mysqli->query("SELECT * FROM reserva WHERE idReserva = ".$this -> idReserva." ");
        while($row = $reservaSelecionado -> fetch_array()){
            $this -> idReserva = $row['idReserva'];
            $this -> idPedido = $row['idPedido'];
            $this -> idAluno = $row['idAluno'];
            $this -> dataInicial = $row['dataInicial'];
            $this -> dataFinal = $row['dataFinal'];
            $this -> status = $row['status'];
        }
    }
    
    public function GetIdReserva() {
        return $this -> idReserva;
    }

    public function GetIdPedido() {
        return $this -> idPedido;
    }

    public function GetIdAluno() {
        return $this -> idAluno;
    }

    public function GetdataInicial() {
        return $this -> dataInicial;
    }

    public function GetdataFinal() {
        return $this -> dataFinal;
    }

    public function Getstatus() {
        return $this -> status;
    }

    public function SetIdReserva($idReserva) {
        $this -> idReserva = $idReserva;
    }

    public function SetIdPedido($idPedido) {
        $this -> idPedido = $idPedido;
    }

    public function SetIdAluno($idAluno) {
        $this -> idAluno = $idAluno;
    }

    public function SetdataInicial($dataInicial) {
        $this -> dataInicial = $dataInicial;
    }

    public function SetdataFinal($dataFinal) {
        $this -> dataFinal = $dataFinal;
    }

    public function Setstatus($status) {
        $this -> status = $status;
    }

}

?>