
<?php

$destinatario = "gustavo_qs16@hotmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$razao = $_REQUEST['razao'];
$cnpj = $_REQUEST['cnpj'];
$assunto = $_REQUEST['assunto'];
$opiniao = $_REQUEST['opiniao'];


$cep = $_REQUEST['cep'];

$opiniao = $_REQUEST['opiniao']


$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "razao social: " . $razao . "\n";
$body = $body . "cnpj: " . $cnpj . "\n";
$body = $body . "cep: " . $cep . "\n";
$body = $body . "assunto" .$assunto . "\n";
$body = $body . "opinião: " . $opiniao . "\n";


mail($destinatario, $body, $assunto, "from: $email\r\n");

?>
