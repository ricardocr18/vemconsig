
<?php


/* apenas dispara o envio do formulário caso exista $_POST['enviarFormulario']*/


if (isset($_POST['enviarFormulario'])){


/*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/


$enviaFormularioParaNome = 'Vandessa';

$enviaFormularioParaEmail = 'vandessa@vemconsig.com.br';


$caixaPostalServidorNome = 'WebSite | Formulário';

$caixaPostalServidorEmail = 'suporte@vemconsig.com.br';

$caixaPostalServidorSenha = 'salvador@21';


/*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/


/* abaixo as variaveis principais, que devem conter em seu formulario*/


$remetenteNome  = $_POST['nome'];

$remetenteEmail = $_POST['cpf'];

$assunto  = $_POST['celular'];

/* $mensagem = $_POST['mensagem']; */


$mensagemConcatenada = 'Formulário gerado via website'.'<br/>';

$mensagemConcatenada .= '-------------------------------<br/><br/>';

$mensagemConcatenada .= 'Nome: '.$remetenteNome.'<br/>';

$mensagemConcatenada .= 'cpf: '.$remetenteEmail.'<br/>';

$mensagemConcatenada .= 'Celular: '.$assunto.'<br/>';

$mensagemConcatenada .= '-------------------------------<br/><br/>';

/* $mensagemConcatenada .= 'Mensagem: "'.$mensagem.'"<br/>'; */

/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/


require ('PHPMailer_5.2.4/class.phpmailer.php');


$mail = new PHPMailer();


$mail->IsSMTP();

$mail->SMTPAuth  = true;

$mail->Charset   = 'utf8_decode()';

$mail->Host  = 'smtp.'.substr(strstr($caixaPostalServidorEmail, '@'), 1);

$mail->Port  = '587';

$mail->Username  = $caixaPostalServidorEmail;

$mail->Password  = $caixaPostalServidorSenha;

$mail->From  = $caixaPostalServidorEmail;

$mail->FromName  = utf8_decode($caixaPostalServidorNome);

$mail->IsHTML(true);

$mail->Subject  = utf8_decode($remetenteNome);

$mail->Body  = utf8_decode($mensagemConcatenada);


$mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));


if(!$mail->Send()){

$mensagemRetorno = 'Erro ao enviar formulário: '. print($mail->ErrorInfo);

}else{

$mensagemRetorno = 'Formulário enviado com sucesso!';

}

}

?>



<!-- Mensagem de envio -->
<html lang="pt-BR">


<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link href="./style.css" rel="stylesheet">
  <title>Dados enviados com Sucesso</title>

</head>

<body>

<main>
    <nav class="navbar navbar-expand-lg navbar-light  sticky-top">
      <div class="container-fluid">
        <a href="index.html">
            <img  src="./img/logo Completa se fundo2.png" class="logo" alt="Logo da Empresa VEMCONSIG">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#about-form">Simulação de Crédito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.html">Contatos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.html">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://wa.me/5527999936615?text=Bem Vindo a VEMCONSIG">(27) 99993-6615
                  <i class="fab fa-whatsapp"></i>
              </a>
          </li>       
          </ul>
        </div>
      </div>
    </nav>
</main>


<div class="services-area">
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <h3 class="main-title">Dados enviados com Sucesso<br> Em breve Estaremos retornando o Contato.<br> Obrigado por escolher a VEMCONSIG​</h3>
            </div>
                
         </div>
</div>


<!--Footer -->
<div id="nav-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card-footer">
            <a href="index.html">
              <img  src="./img/logo Completa se fundo2.png" class="logo" alt="Logo da Empresa VEMCONSIG">
            </a>
            <div class="chat">
              <h6>Precisando de ajuda?</h6>
              <a target="_blank" href="https://wa.me/5527999936615?text=Bem Vindo a VEMCONSIG">
              <button class="btn btn-primary">Chat online</button>
              </a>
            </div>
            <!-- <div class="social">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-instagram-square"></i>
            </div>-->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-footer">
            <h6>Para você</h6>
            <a class="nav-link" href="#about-form">Simulação de Crédito</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-footer">
            <h6>Institucional</h6>
            <a class="nav-link" href="contato.html">Contatos</a>
            <a class="nav-link" href="sobre.html">Sobre</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>


</body>

</html>




