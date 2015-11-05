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
            alert("Qual o seu email?");
            document.formulario.email.focus();
            return false;
        }
        
        document.formulario.submit();
        alert("Cadastro Efetuado com sucesso");
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
	$email_destinatario = "contato@primosburger.com.br";
	$email_reply = "$email";
	$email_assunto = "Cadastro Site";
	//====================================================
 
 
	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['nome'];
 	$email = $_POST['email'];
	//====================================================
 
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n";	
	$email_conteudo .=  "E-mail = $email \n";
	
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

                <form action="" method="POST" name="formulario" id="formulario">
                    <input name="nome" id="input_rodape" type="text" placeholder="Nome" /><br />
                    <input name="email" id="input_rodape" type="text" placeholder="Email" /><br />
                    <input type="button" name="BTEnvia" value="Enviar" id="botao_rodape" onclick="validaCampos();" />         
                </form> 

</body>
</html>
