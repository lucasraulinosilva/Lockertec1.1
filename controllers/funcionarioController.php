<?php


require('models/funcionario.php');

class FuncionarioController {

    private $funcionario;
    private $funcionarioClasse;

    public function __construct() {
        $this -> funcionarioClasse = new Funcionario();
    }

    public function AutenticarLogin() {

        $_SESSION['icone'] = 'img/icone2.png';
        $_SESSION['funcionario'] = 'funcionario';
        $_SESSION['email'] = '12345';
        $_SESSION['senha'] = 12345;

        return true;
    }


}

?>