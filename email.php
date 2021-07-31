<?php

if (isset($_POST['cpf']) && !empty($_POST['cpf'])){

$nome = addcslashes($_POST['nome']);
$cpf = addcslashes($_POST['cpf']);
$celular = addcslashes($_POST['celular']);
$concorda = addcslashes($_POST['concorda']);
$email = 'atendimento@vemconsig.com.br';

$to = "ricardocribeiro@hotmail.com";
$subject = "Cliente - Site VEMCONSIG";
$body = "Nome: ".$nome. "\n".
        "CPF: ".$cpf. "\n".
        "Celular: ".$celular. "\n".
        "Concorda: ".$concorda. "\n";
$header = "From: atendimento@vemconsig.com.br"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso");
}else{
    echo("O Email não pode ser enviado");
}

}

?>