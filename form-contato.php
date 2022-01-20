<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['mensagem']);

$to = "arthurantunes@usp.br";
$subject = "Contato recebido - Site Pessoal";
$body = "Nome: ".$nome."\n".
        "E-mail: ".$email."\n".
        "Telefone: ".$telefone."\n".
        "Mensagem: ".$mensagem;
$header = "From:arthurantunes@usp.br"."\r\n"
        ."Reply-To:".$email."\r\n"
        ."X=mailer:PHP/".phpversion();

mail($to, $subject, $body, $header)



}

?>