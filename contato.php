<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="Primos, Burguer, Lanches, São José, Delivery, Rápido" http-equiv="keywords" /> 
    <meta name="description" content="" http-equiv="description" /> 
    <meta name="author" content="Agência TAIÓ - 12 - 3206.1690 - contato@agenciataio.com.br" /> 
    <meta name="robots" content="all" /> 
    <meta name="language" content="pt-br" /> 
    <meta name="classification" content="Primos Burguer" /> 
    <meta name="rating" content="general" /> 

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-42476898-3', 'primosburger.com.br');
      ga('send', 'pageview');
    </script> 

    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<link rel="shortcut icon" href="favicon.ico" />
    
<script>
    function validaCampos()
    {
        if(document.formulario.nome.value == "")
        {
            alert("Qual o seu nome?");
            document.formulario.nome.focus();
            return false;
        }

        if(document.formulario.email.value == "")
        {
            alert("Qual seu e-mail?");
            document.formulario.email.focus();
            return false;
        }
        
        if(document.formulario.mensagem.value == "")
        {
            alert("Escreva sua mensagem");
            document.formulario.mensagem.focus();
            return false;
        }
        
        document.formulario.submit();
        alert("Mensagem enviada");
    }  


</script>
	<?php
if (isset($_POST['nome'])){
 
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
 	//====================================================
	$email_remetente = $_POST['email'];
	//====================================================
 
 
	//Configurações do email, ajustar conforme necessidade
	//====================================================
	$email_destinatario = "rafael@agenciataio.com.br";
	$email_reply = "$email";
	$email_assunto = "Contato Site";
	//====================================================
 
 
	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['nome'];
 	$email = $_POST['email'];	
 	$telefone = $_POST['telefone'];
 	$mensagem = $_POST['mensagem'];	
	//====================================================
 
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n";	
	$email_conteudo .=  "E-mail = $email \n";	
	$email_conteudo .=  "Telefone = $telefone \n";
	$email_conteudo .=  "Mensagem = $mensagem \n";		
	
 	//====================================================
 
	//Seta os Headers (Alerar somente caso necessario)
	//====================================================
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
 
 
	//Enviando o email
	//====================================================
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){

	}
	//====================================================
}	
?>          

<title>Primos Burguer ::</title>
</head>

<body id="body_empresa">

<div id="topo">
	<a href="http://www.primosburger.com.br"><img src="images/logo.jpg" alt="Logo Primo's Burger" title="Logo Primo's Burger" /></a>
    <ul id="menu_laranja">
    	<li><a href="empresa.php" class="link_menu_laranja">Empresa</a></li>
        <li><a href="cardapio.php" class="link_menu_laranja">Cardápio</a></li>
        <li><a href="delivery.php" class="link_menu_laranja">Delivery</a></li>
        <li><a href="contato.php" class="link_menu_laranja">Contato</a></li>
    </ul>    	
</div>

<div id="cont">
	<div id="mapa_contato">
    	<iframe width="930" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?hl=pt-BR&amp;ie=UTF8&amp;ll=-23.237915,-45.886416&amp;spn=0.026618,0.052314&amp;t=m&amp;z=15&amp;output=embed"></iframe>
    </div>
    <div id="contato">
    	<div id="dados_contato">
        	<h1>Contato</h1>
            
            <p><span style="font-size:24px;">São José dos Campos/SP</span><br />
            R. José Alves Ribeiro Filho, 45 - Bosque dos Eucaliptos<br />
			<span style="font-size:32px;">(12) 3341-9001</span>
            </p>
            
            <p><span style="font-size:24px;">Itapeva/SP</span><br />
            R. João Antunes de Moura, 205 - Jd. Maringá<br />
			<span style="font-size:32px;">(15) 3521-0577</span>
            </p>            
        </div>
        <div id="form">
            <form action="" method="POST" name="formulario" id="formulario">
                <input name="nome" id="input" type="text" placeholder="Nome" /><br />
                <input name="email" id="input" type="text" placeholder="E-mail" /><br />
                <input name="telefone" id="input" type="text" placeholder="Telefone" /><br />                
                <textarea name="mensagem" id="mensagem" scroll="no" placeholder="Mensagem" ></textarea>                        
                <input type="button" name="BTEnvia" value="Enviar" id="botao" onclick="validaCampos();" />         
            </form> 
        </div>        
    </div>

</div>

<div style="clear:both;"&nbsp;</div>

<div id="rodape">
	<div id="cont">
    	<img src="images/logo_rodape.jpg" />
        <ul id="menu_rodape">
        	<li><a href="empresa.php" class="link_menu">Empresa</a></li>
        	<li><a href="cardapio.php" class="link_menu">Cardápio</a></li>
        	<li><a href="delivery.php" class="link_menu">Delivery</a></li>
        	<li><a href="contato.php" class="link_menu">Contato</a></li>                                    
        </ul>
        <div id="form_rodape">
        	<div style="float: left;">
        	<span style="font-size:14px;">Assine nossa newsletter e fique por dentro das promoções</span>
        	<iframe src="form.php" width="440px" height="100px" frameborder="0"></iframe>
            </div>
            <ul id="midias">
	        <li><a href="https://www.facebook.com/pages/Primos-Burger/337847863016288" target="_blank"><img src="images/icone_face.png" border="0" /></a></li>
	        <li><a href="https://twitter.com/primosburger" target="_blank"><img src="images/icone_twitter.png" border="0" /></a></li>
	        <li><a href="http://instagram.com/primosburger" target="_blank"><img src="images/icone_instagram.png" border="0" /></a></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
