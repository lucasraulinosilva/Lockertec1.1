<?php

class Aluno
{

    private $idAluno;
    private $rm;
    private $nome;
    private $sobrenome;
    private $idTelefone;
    private $idTurma;
    private $email;
    private $emailAlternativo;
    private $senha;


    //Variável do banco de dados

    //Inicia o banco de dados na classe quando ela é instanciada

    public function __construct()
    {
        include ("bancoDeDados/conectarNoBancoClasse.php");
    }

    public function InserirAluno()
    {
        $this->mysqli->query("INSERT INTO aluno VALUES (NULL,'" . $this->rm . "','" . $this->nome . "','" . $this->sobrenome . "', '" . $this->idTelefone . "', '" . $this->idTurma . "', '" . $this->email . "', '" . $this->emailAlternativo . "', '" . $this->senha . "')");
    }

    public function AtualizarAluno($campo, $conteudo)
    {
        $this->mysqli->query("UPDATE aluno SET " . $campo . " = '" . $conteudo . "' WHERE idAluno = " . $this->idAluno . " ");
    }

    public function DeletarAluno()
    {
        $this->mysqli->query("DELETE FROM aluno WHERE idAluno = " . $this->idAluno . "");
    }

    //Seleciona o aluno do banco de dados de acordo com o id recebido

    public function SelecionarAluno()
    {

        // PHP Data Objects(PDO) Sample Code:
        try {
            $conn = new PDO("sqlsrv:server = tcp:dadossimples.database.windows.net,1433; Database = lockertec_banco", "teste", "{your_password_here}");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print ("Error connecting to SQL Server.");
            die(print_r($e));
        }

        // SQL Server Extension Sample Code:
        $connectionInfo = array("UID" => "teste", "pwd" => "{your_password_here}", "Database" => "lockertec_banco", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:dadossimples.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        $alunoSelecionado = sqlsrv_query($conn, "SELECT * FROM aluno WHERE rm = " . $this->rm . "");
        while ($row = sqlsrv_fetch_array($alunoSelecionado, SQLSRV_FETCH_ASSOC)) {
            $this->idAluno = $row['idAluno'];
            $this->rm = $row['rm'];
            $this->nome = $row['nome'];
            $this->sobrenome = $row['sobrenome'];
            $this->idTelefone = $row['idTelefone'];
            $this->idTurma = $row['idTurma'];
            $this->email = $row['email'];
            $this->email = $row['emailAlternativo'];
            $this->senha = $row['senha'];
        }
        $linhas = $alunoSelecionado->num_rows;

        if ($linhas > 0) {
            return 'certo';
        } else {
            return 'errado';
        }
    }

    public function SelecionarAlunoLogin()
    {

        // PHP Data Objects(PDO) Sample Code:
        try {
            $conn = new PDO("sqlsrv:server = tcp:dadossimples.database.windows.net,1433; Database = lockertec_banco", "teste", "{your_password_here}");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print ("Error connecting to SQL Server.");
            die(print_r($e));
        }

        // SQL Server Extension Sample Code:
        $connectionInfo = array("UID" => "teste", "pwd" => "{your_password_here}", "Database" => "lockertec_banco", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:dadossimples.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        $params = array();
        $options = array('Scrollable' => SQLSRV_CURSOR_KEYSET);

        $alunoSelecionado = sqlsrv_query($conn, "SELECT * FROM aluno WHERE rm = " . $this->rm . " AND senha = '" . $this->senha . "'", $params, $options);
        while ($row = sqlsrv_fetch_array($alunoSelecionado, SQLSRV_FETCH_ASSOC)) {
            $this->idAluno = $row['idAluno'];
            $this->rm = $row['rm'];
            $this->nome = $row['nome'];
            $this->sobrenome = $row['sobrenome'];
            $this->idTelefone = $row['idTelefone'];
            $this->idTurma = $row['idTurma'];
            $this->email = $row['email'];
            $this->email = $row['emailAlternativo'];
            $this->senha = $row['senha'];
        }
        $linhas = sqlsrv_num_rows($alunoSelecionado);

        if ($linhas == false) {
            return 'errado';
        } else {
            return 'certo';
        }
    }

    public function GetIdAluno()
    {
        return $this->idAluno;
    }

    public function Getrm()
    {
        return $this->rm;
    }

    public function Getnome()
    {
        return $this->nome;
    }

    public function Getsobrenome()
    {
        return $this->sobrenome;
    }

    public function GetIdTelefone()
    {
        return $this->idTelefone;
    }

    public function GetIdTurma()
    {
        return $this->idTurma;
    }

    public function Getemail()
    {
        return $this->email;
    }

    public function GetemailAlternativo()
    {
        return $this->emailAlternativo;
    }

    public function Getsenha()
    {
        return $this->senha;
    }

    public function SetIdAluno($idAluno)
    {
        $this->idAluno = $idAluno;
    }

    public function Setrm($rm)
    {
        $this->rm = $rm;
    }

    public function Setnome($nome)
    {
        $this->nome = $nome;
    }

    public function Setsobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function SetIdTelefone($idTelefone)
    {
        $this->idTelefone = $idTelefone;
    }

    public function SetIdTurma($idTurma)
    {
        $this->idTurma = $idTurma;
    }

    public function Setemail($email)
    {
        $this->email = $email;
    }

    public function SetemailAlternativo($emailAlternativo)
    {
        $this->emailAlternativo = $emailAlternativo;
    }

    public function Setsenha($senha)
    {
        $this->senha = $senha;
    }

}


?>