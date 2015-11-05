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

    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
    <script type="text/javascript">
		$(function() {
			var offset = $("#peca_o_seu").offset();
			var topPadding = 132;
			$(window).scroll(function() {
				if ($(window).scrollTop() > offset.top) {
					$("#peca_o_seu").stop().animate({
						marginTop: $(window).scrollTop() - offset.top + topPadding
					});
				} else {
					$("#peca_o_seu").stop().animate({
						marginTop: 0
					});
				};
			});
		});
	</script>
    


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
        <div style="width:100%; height: 300px; padding-top: 100px; text-align: center">
            <h2>Selecione o Primo's mais próximo de você</h2><br />
            <div style="width: 100%; text-align: center">
	            <div style="float: left; margin-left: 330px;">
		            <a href="cardapio_sjc.php" class="link_menu_laranja"><img src="images/icone-locais.png" /><br><span style="font-size: 20px;">S.J.Campos-SP</span></a>
	            </div>
	            <div style="float: left; margin-left: 80px;">
					<a href="cardapio_itapeva.php" class="link_menu_laranja"><img src="images/icone-locais.png" /><br><span style="font-size: 20px;">Itapeva-SP</span></a>
				</div>
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
