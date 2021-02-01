<?php

require_once 'Pessoa.php';

$nome       = $_POST['nome'];
$sobrenome  = $_POST['sobrenome'];
$email      = $_POST['email'];
$telefone   = $_POST['telefone'];
$profissao  = $_POST['profissao'];

$pessoa = new Pessoa($nome, $sobrenome, $email, $telefone, $profissao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Processa Formulário</title>
</head>
<body>
    <ul>
        <li><?=$pessoa->getNome()?></li>
        <li><?=$pessoa->getSobrenome()?></li>
        <li><?=$pessoa->getEmail()?></li>
        <li><?=$pessoa->getTelefone()?></li>
        <li><?=$pessoa->getProfissao()?></li>
    </ul>


</body>
</html>
