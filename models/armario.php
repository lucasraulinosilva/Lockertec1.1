<?php

class Armario {

    private $idArmario;
    private $nome;
    private $idTamanho;
    private $andar;
    private $posicao;
    private $cor;
    private $imagem;
    //Variável do banco de dados

    //Inicia o banco de dados na classe quando ela é instanciada

    public function __construct() {
        include("bancoDeDados/conectarNoBancoClasse.php");
    }

    public function InserirArmario() {
        $this -> mysqli->query("INSERT INTO armario VALUES (NULL,'".$this -> nome."', '".$this -> idTamanho."', '".$this -> andar."', '".$this -> posicao."', '".$this -> cor."', '".$this -> imagem."')");
    }

    public function AtualizarArmario($campo, $conteudo) {
        $this -> mysqli->query("UPDATE armario SET ".$campo." = '".$conteudo."' WHERE idArmario = ".$this -> idArmario." ");
    }

    public function DeletarArmario() {
        $this -> mysqli->query("DELETE FROM armario WHERE idArmario = ".$this -> idArmario."");
    }

    //Seleciona o armário do banco de dados de acordo com o id recebido

    public function SelecionarArmario() {
        $armarioSelecionado = $this -> mysqli->query("SELECT * FROM armario WHERE idArmario = ".$this -> idArmario."");
        while($row = $armarioSelecionado -> fetch_array()){
            $this -> idArmario = $row['idArmario'];
            $this -> nome = $row['nome'];
            $this -> idTamanho = $row['idTamanho'];
            $this -> andar = $row['andar'];
            $this -> posicao = $row['posicao'];
            $this -> cor = $row['cor'];
            $this -> imagem = $row['imagem'];
        }
    }

    public function SelecionarTodosArmarios() {
        $armarioSelecionado = $this -> mysqli->query("SELECT * FROM armario");

        return $armarioSelecionado;
    }

    public function GetIdArmario() {
        return $this -> idArmario;
    }

    public function Getnome() {
        return $this -> nome;
    }

    public function GetIdTamanho() {
        return $this -> idTamanho;
    }

    public function Getandar() {
        return $this -> andar;
    }

    public function Getposicao() {
        return $this -> posicao;
    }

    public function Getcor() {
        return $this -> cor;
    }

    public function Getimagem() {
        return $this -> imagem;
    }

    public function SetIdArmario($idArmario) {
        $this -> idArmario = $idArmario;
    }

    public function Setnome($nome) {
        $this -> nome = $nome;
    }

    public function SetIdTamanho($idTamanho) {
        $this -> idTamanho = $idTamanho;
    }

    public function Setandar($andar) {
        $this -> andar = $andar;
    }

    public function Setposicao($posicao) {
        $this -> posicao = $posicao;
    }

    public function Setcor($cor) {
        $this -> cor = $cor;
    }

    public function Setimagem($imagem) {
        $this -> imagem = $imagem;
    }


}

?>