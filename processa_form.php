<?php

require_once 'Pessoa.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$profissao = $_POST['profissao'];

$pessoa1 = new Pessoa($nome, $sobrenome, $email, $telefone, $profissao);

$pessoa1->exibeFormulario();
?>
