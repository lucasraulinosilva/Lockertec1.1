<?php

session_start();

$_SESSION['funcionario'] = '';
$_SESSION['aluno'] = '';
$_SESSION['icone'] = '';
$_SESSION['RM'] = '';
$_SESSION['senha'] = '';

header('Location:index.php');

?>