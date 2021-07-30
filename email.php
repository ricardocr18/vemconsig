<?php

$nome = addcslashes($_POST(['name']))
$cpf = addcslashes($_POST(['cpf']))
$$celular = addcslashes($_POST(['celular']))
$concorda = addcslashes($_POST(['concorda']))

$sto = "vandessa@vemconsig.com.br";
$subject = "Cliente - Site VEMCONSIG";
$body = "Nome: ".$nome. "\n"
        "CPF: ".$cpf. "\n"
        "Celular: ".$celular. "\n"
        "Concorda: ".$concorda. "\n"
$header = "From: atendimento@vemconsig.com"
            ."Replay-To:".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();

if (mail($sto,$subject,$body,$header)){
    echo("Email enviado com sucesso");
}else{
    echo("O Email não pode ser enviado");
}

?>