<?php

$corpo =
 "Nome:".$_POST['nome'].
 "CPF:".$_POST['cpf'].
 "Celular:".$_POST['celular']."";

mail('ricardocribeiro@hotmail.com',$corpo,'vandessa@vemconsig.com.br');
echo "Email enviado";

?>