<?php

class Pedido {

    private $idPedido; 
    private $idAluno;
    private $idArmario;
    private $idFuncionario;
    private $periodo;
    private $status;
    //Variável do banco de dados

    //Inicia o banco de dados na classe quando ela é instanciada

    public function __construct() {
        include("bancoDeDados/conectarNoBancoClasse.php");
    }

    public function InserirPedido() {
        $this -> mysqli->query("INSERT INTO pedido VALUES (NULL, '".$this -> idAluno."', '".$this -> idArmario."', '".$this -> idFuncionario."', '".$this -> periodo."', '".$this -> status."')");
    }

    public function AtualizarPedido($conteudo) {
        $this -> mysqli->query("UPDATE pedido SET situacao = '".$conteudo."' WHERE idPedido = ".$this -> idPedido." ");
    }

    //Seleciona o pedido do banco de dados de acordo com o id recebido

    public function SelecionarPedido() {
        $pedidoSelecionado = $this -> mysqli->query("SELECT * FROM pedido WHERE idPedido = ".$this -> idPedido."");
        while($row = $pedidoSelecionado -> fetch_array()){
            $this -> idPedido = $row['idPedido'];
            $this -> idAluno = $row['idAluno'];
            $this -> idArmario = $row['idArmario'];
            $this -> idFuncionario = $row['idFuncionario'];
            $this -> periodo = $row['periodo'];
            $this -> status = $row['status'];
        }
    }
    
    public function GetIdPedido() {
        return $this -> idPedido;
    }

    public function GetIdAluno() {
        return $this -> idAluno;
    }

    public function GetIdArmario() {
        return $this -> idArmario;
    }

    public function GetIdFuncionario() {
        return $this -> idFuncionario;
    }

    public function Getperiodo() {
        return $this -> periodo;
    }

    public function Getstatus() {
        return $this -> status;
    }

    public function SetIdPedido($idPedido) {
        $this -> idPedido = $idPedido;
    }

    public function SetIdAluno($idAluno) {
        $this -> idAluno = $idAluno;
    }

    public function SetIdArmario($idArmario) {
        $this -> idArmario = $idArmario;
    }

    public function SetIdFuncionario($idFuncionario) {
        $this -> idFuncionario = $idFuncionario;
    }

    public function Setperiodo($periodo) {
        $this -> periodo = $periodo;
    }

    public function Setstatus($status) {
        $this -> status = $status;
    }

}

?>