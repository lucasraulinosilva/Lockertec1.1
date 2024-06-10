<?php

require('models/armario.php');

class ArmarioController {

    private $armarios;
    private $armario;
    private $armarioClasse;

    public function __construct() {
        $this -> armarioClasse = new Armario;
    }
    
    public function SelecionarArmarioPorId($id) {
        $this -> armarioClasse -> SetIdArmario($id);
        $this -> armarioClasse -> SelecionarArmario();
        $this -> armario = array($this -> armarioClasse -> GetIdArmario(), $this -> armarioClasse -> Getnome(), $this -> armarioClasse -> GetIdTamanho(), $this -> armarioClasse -> Getandar(), $this -> armarioClasse -> Getposicao(), $this -> armarioClasse -> Getcor(), $this -> armarioClasse -> Getimagem());
        $_REQUEST['armario'] = $this -> armario;
    }

    public function SelecionarTodosArmarios() {
        $this -> armarios = $this -> armarioClasse -> SelecionarTodosArmarios();
        $_REQUEST['armarios'] = $this -> armarios;
    }

    public function FiltrarArmarios($andar, $tamanho) {
        $_SESSION['andar'] = $andar;
        $_SESSION['tamanho'] = $tamanho;
    }

}

?>