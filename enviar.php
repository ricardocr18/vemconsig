<?php

require ('PHPMailer_5.2.4/class.phpmailer.php');


$mail = new PHPMailer();


$mail->IsSMTP();

$mail->SMTPAuth  = true;

$mail->Charset   = 'utf8_decode()';

$mail->Host  = 'smtp.smtps.uhserver.com';

$mail->Port  = '465';

$mail->Username  = 'atendimento@vemconsig.com.br';

$mail->Password  = 'vemconsig2021';

$mail->From  = 'atendimento@vemconsig.com.br';

$mail->FromName  = 'Site';

$mail->IsHTML(true);

$mail->Subject  = 'E-mail do Site';

$mail->Body  = 'Conteudo do E-mail';

$mail->AltBody  = 'Conteudo do E-mail em texto';


$mail->AddAddress('ricardocribeiro@hotmail.com');


if(!$mail->Send()){

echo = 'Erro ao enviar formulário: ';

}else{

echo = 'Formulário enviado com sucesso!';

}

}




?>