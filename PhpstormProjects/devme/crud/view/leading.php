<?php
ini_set('SMTP','myserver');
ini_set('smtp_port',25);
if (isset($_POST['BTEnvia'])) {
 
    //Variaveis de POST, Alterar somente se necessário 
    //====================================================
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone']; 
    $mensagem = $_POST['mensagem'];
    //====================================================
    
    //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
    //==================================================== 
    $email_remetente = "marcos.marrize@gmail.com"; // deve ser uma conta de email do seu dominio 
    //====================================================
    
    //Configurações do email, ajustar conforme necessidade
    //==================================================== 
    $email_destinatario = "contato@7informatica-ti.com"; // pode ser qualquer email que receberá as mensagens
    $email_reply = "$email"; 
    $email_assunto = "Contato formmail"; // Este será o assunto da mensagem
    //====================================================
    
    //Monta o Corpo da Mensagem
    //====================================================
    $email_conteudo = "Nome = $nome \n"; 
    $email_conteudo .= "Email = $email \n";
    $email_conteudo .= "Telefone = $telefone \n"; 
    $email_conteudo .= "Mensagem = $mensagem \n"; 
    //====================================================
    
    //Seta os Headers (Alterar somente caso necessario) 
    //==================================================== 
    $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
    //====================================================
    
    //Enviando o email 
    //==================================================== 
    if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
    echo "</b>E-Mail enviado com sucesso!</b>"; 
    } 
    else{ 
    echo "</b>Falha no envio do E-Mail!</b>"; } 
    //====================================================
   } 
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
   
    <title>Document</title>
</head>
<body>
<!-- Just an image -->
<nav class="navbar navbar bg-primary">
  <a class="navbar-brand" href="#">
    <img src="public\img\bsb-flash-logo-1.png" width="80" height="30" alt="">
  </a>
</nav>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="public\banner_polishop.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="public\banner_polishop.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public\banner_polishop.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="content p-5">
<form action="<? $PHP_SELF; ?>" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">E-mail:</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
    <label for="inputAddress">Nome:</label>
    <input type="text" class="form-control" name="nome" placeholder="Sr. Augusto">
    </div>
  </div>
  <div class="form-group">
    
  </div>
  <div class="form-group">
    <label for="inputAddress2">Telefone:</label>
    <input type="tel" class="form-control" name="telefone" placeholder="+55 (99) 9 9999-9999">
    <input type="text" hidden value="Quero ser seu parceiro polishop, entre em conatato comigo.">
  </div>
 
 
  <div class="form-group">
    <div>
    <button type="submit" class="btn bg-primary btn-lg btn-block" name="BTEnvia">Eu Quero</button>
    </div>
  </div>
 
</form>
  </div>

    
</body>
<script src="/public/js/bootstrap.js"></script>
<script>
$('.carousel').carousel({
  interval: 2000
})
</script>
</html>
