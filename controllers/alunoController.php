<?php

require('models/aluno.php');

class AlunoController {

    private $aluno;
    private $alunoClasse;

    public function __construct() {
        $this -> alunoClasse = new Aluno();
    }

    public function AutenticarLogin($rm, $senha) {

        $this -> alunoClasse -> Setrm($rm);
        $this -> alunoClasse -> Setsenha($senha);
        if ($this -> alunoClasse -> SelecionarAlunoLogin() == 'errado' ) {
            return 'errado';
        } else {
            $_SESSION['icone'] = 'img/icone2.png';
            $_SESSION['aluno'] = 'aluno';
            $_SESSION['RM'] = $this -> alunoClasse -> Getrm();
            $_SESSION['senha'] = $this -> alunoClasse -> Getsenha();
            return 'certo';
        }

    }

    public function AutenticarConta($rm) {

        $this -> alunoClasse -> Setrm($rm);
        if ($this -> alunoClasse -> SelecionarAluno() == 'errado' ) {
            return 'errado';
        } else {
            return 'certo';
        }

    }

}

?>