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
        <ul id="menu">
            <li><a href="empresa.php" class="link_menu">Empresa</a></li>
            <li><a href="cardapio.php" class="link_menu">Cardápio</a></li>
            <li><a href="delivery.php" class="link_menu">Delivery</a></li>
            <li><a href="contato.php" class="link_menu">Contato</a></li>
        </ul>    	
    </div>

	<div id="cardapio" class="banner_cardapio_sjc">
    	&nbsp;
    </div>

    <div id="cont">
    	<div id="peca_o_seu"><a href="contato.php"><img src="images/peca_o_seu.png" /></a></div>
    	<!--
    	<div id="combinados" class="cardapio">
        	<div class="titulos" style="text-align:center;">Combinados</div>
            
            <div id="combinado1" style="width:205px;">
            	<div class="n1">1</div>
              	<div class="descricao_comb1" style="margin-left:60px;">
                	<img src="images/dog_gr.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_1">Dog Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_1">lata 350ml<br /></span>
                    <span class="nome_1">Fritas média<br /></span>
                    <span class="preco1">
                    	<span style="font-size:16px;">R$</span> 10,90
                    </span>
                    </div>
               	</div>     
			</div>     
                
            <div id="combinado1">
            	<div class="n1">2</div>
              	<div class="descricao_comb1">
                	<img src="images/lanche_gr.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_1">Bancon Junior<br /> Refrigerante<br /></span>
                    <span class="descricao_1">lata 350ml<br /></span>
                    <span class="nome_1">Fritas média<br /></span>
                    <span class="preco1">
                    	<span style="font-size:16px;">R$</span> 11,96
                    </span>
                    </div>
               	</div>     
			</div>  
            
            <div id="combinado1">
            	<div class="n1">3</div>
              	<div class="descricao_comb1">
                	<img src="images/lanche_gr.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_1">Bancon Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_1">lata 350ml<br /></span>
                    <span class="nome_1">Fritas média<br /></span>
                    <span class="preco1">
                    	<span style="font-size:16px;">R$</span> 14,20
                    </span>
                    </div>
               	</div>     
			</div>  
            
            <div id="combinado2">
            	<div class="n2">4</div>
              	<div class="descricao_comb2">
                	<img src="images/lanche_pq.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_2">Big burger Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_2">lata 350ml<br /></span>
                    <span class="nome_2">Fritas média<br /></span>
                    <span class="preco2">
                    	<span style="font-size:12px;">R$</span> 14,90
                    </span>
                    </div>
               	</div>     
			</div>  
            
            <div id="combinado2">
            	<div class="n2">5</div>
              	<div class="descricao_comb2">
                	<img src="images/lanche_pq.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_2">Double Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_2">lata 350ml<br /></span>
                    <span class="nome_2">Fritas média<br /></span>
                    <span class="preco2">
                    	<span style="font-size:12px;">R$</span> 15,90
                    </span>
                    </div>
               	</div>     
			</div>
            
            <div id="combinado2">
            	<div class="n2">6</div>
              	<div class="descricao_comb2">
                	<img src="images/lanche_pq.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_2">Tropical Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_2">lata 350ml<br /></span>
                    <span class="nome_2">Fritas média<br /></span>
                    <span class="preco2">
                    	<span style="font-size:12px;">R$</span> 13,90
                    </span>
                    </div>
               	</div>     
			</div>

            <div id="combinado2">
            	<div class="n2">7</div>
              	<div class="descricao_comb2">
                	<img src="images/lanche_pq.png" />
                    <div style="margin-top:15px;">
                    <span class="nome_2">Chicken Primo’s<br /> Refrigerante<br /></span>
                    <span class="descricao_2">lata 350ml<br /></span>
                    <span class="nome_2">Fritas média<br /></span>
                    <span class="preco2">
                    	<span style="font-size:12px;">R$</span> 14,95
                    </span>
                    </div>
               	</div>     
			</div> 
                        
			<div id="combinado_fritas">
            	<img src="images/fritas_gr.png" />
                <div class="descricao_fritas">
                	Fritas Pequena (40g):<br />
                    R$ <span style="font-size:36px;">2,30</span>
                </div>
                <div class="descricao_fritas" style="margin-left:280px;">
                	Fritas Pequena (40g):<br />
                    R$ <span style="font-size:36px;">4,20</span>
                </div>                
            </div>
                                                                    
                                
        </div>
       -->
    	<div id="lanches_sjc" class="cardapio" style="margin-top:335px;">
            
            <div id="lanches1_sjc" style="margin-top: 70px">
            	<div class="n3_sjc">1</div>
                <div class="descricao_lanches_sjc">
                	<span>Dog Primo’s</span><br />
                    <div class="descricao_lanche_sjc">(Pão, maionese, tomate, batata palha e salsicha)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                    	<span style="font-size:14px;">Médio:</span>
                    	<span style="font-size:12px">R$</span>4,20
                    	<span style="font-size:14px;">Grande:</span>
                    	<span style="font-size:12px">R$</span>8,90                    	
                    </div>
                </div>
            </div>
            
            <div id="lanches1_sjc" style="margin-top: 70px">
            	<div class="n3_sjc">7</div>
                <div class="descricao_lanches_sjc">
                	<span>Egg Bacon Primo's</span><br />
                    <div class="descricao_lanche_sjc">(Pão, maionese, alface americana, tomate, cebola, molho especial, bacon, ovo, hambúrguere queijo prato)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -97px;"> 
                    	<span style="font-size:14px;">Médio:</span>
                    	<span style="font-size:12px">R$</span>8,20
                    	<span style="font-size:14px;">Grande:</span>
                    	<span style="font-size:12px">R$</span>15,50                    	
                    </div>
                </div>
            </div>   
            
            <div id="lanches1_sjc">
            	<div class="n3_sjc">2</div>
                <div class="descricao_lanches_sjc">
                	<span>Burger Primo’s</span><br />
                    <div class="descricao_lanche_sjc">(Pão, maionese, hambúrguer e queijo prato)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -57px;"> 
                    	<span style="font-size:14px;">Médio:</span>
                    	<span style="font-size:12px">R$</span>4,70
                    	<span style="font-size:14px;">Grande:</span>
                    	<span style="font-size:12px">R$</span>9,00                    	
                    </div>
                </div>
            </div>
            
            <div id="lanches1_sjc">
            	<div class="n3_sjc">8</div>
                <div class="descricao_lanches_sjc">
                	<span>Double Primo’s</span><br />
                    <div class="descricao_lanche_sjc">(Pão, maionese, alface americana, tomate, cebola, molho especial, dois hambúrgueres e queijo cheddar)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -77px;"> 
                    	<span style="font-size:14px;">Médio:</span>
                    	<span style="font-size:12px">R$</span>8,90
                    	<span style="font-size:14px;">Grande:</span>
                    	<span style="font-size:12px">R$</span>15,90                    	
                    </div>
                </div>
            </div>   
            
            <div id="lanches1_sjc">
            	<div class="n3_sjc">3</div>
                <div class="descricao_lanches_sjc">
                	<span>Burger Salada</span><br />
                    <div class="descricao_lanche_sjc">(Pão, maionese, alface americana, tomate, molho especial, hambúrguer e queijo prato)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -77px;"> 
                    	<span style="font-size:14px;">Médio:</span>
                    	<span style="font-size:12px">R$</span>5,90
                    	<span style="font-size:14px;">Grande:</span>
                    	<span style="font-size:12px">R$</span>11,00                    	
                    </div>
                </div>
            </div>
            
            <div id="lanches1_sjc">
            	<div class="n3_sjc">9</div>
                <div class="descricao_lanches_sjc">
                	<span>Tropical Primo’s</span><br />
                    <div class="descricao_lanche_sjc">(Pão, maionese, cebola, peito de frango desfiado, requeijão cremoso e queijo prato)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -77px;"> 
                    	<span style="font-size:14px;">Médio:</span>
                    	<span style="font-size:12px">R$</span>6,90
                    	<span style="font-size:14px;">Grande:</span>
                    	<span style="font-size:12px">R$</span>13,20                    	
                    </div>
                </div>
            </div>   
            
            <div id="lanches1_sjc">
            	<div class="n3_sjc">4</div>
                <div class="descricao_lanches_sjc">
                	<span>Bacon Júnior</span><br />
                    <div class="descricao_lanche_sjc">( Pão, maionese, bacon e queijo)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -37px;"> 
                    	<span style="font-size:14px;">Médio:</span>                    	
                    	<span style="font-size:12px">R$</span>4,90 
	                	<span style="font-size:14px;">Grande:</span>                    	
                    	<span style="font-size:12px">R$</span>10,90 
                    </div>
                </div>
            </div>
            
            <div id="lanches1_sjc">
            	<div class="n3_sjc">10</div>
                <div class="descricao_lanches_sjc">
                	<span>Chicken Primo’s</span><br />
                    <div class="descricao_lanche_sjc">(Pão, maionese, alface americana, tomate, molho especial, peito de frango desfiado e queijo prato)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -77px;"> 
                    	<span style="font-size:14px;">Médio:</span>
                    	<span style="font-size:12px">R$</span>7,90
                    	<span style="font-size:14px;">Grande:</span>
                    	<span style="font-size:12px">R$</span>13,90                    	
                    </div>
                </div>
            </div>   
            
            <div id="lanches1_sjc">
            	<div class="n3_sjc">5</div>
                <div class="descricao_lanches_sjc">
                	<span>Bacon Primo's</span><br />
                    <div class="descricao_lanche_sjc">(Pão, maionese, alface americana, tomate, cebola, molho especial, bacon, hambúrguer e queijo prato)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -77px;"> 
                    	<span style="font-size:14px;">Médio:</span>
                    	<span style="font-size:12px">R$</span>7,50
                    	<span style="font-size:14px;">Grande:</span>
                    	<span style="font-size:12px">R$</span>14,90                    	
                    </div>
                </div>
            </div>
            
            <div id="lanches1_sjc">
            	<div class="n3_sjc">11</div>
                <div class="descricao_lanches_sjc">
                	<span>Chicken Bacon Primo’s</span><br />
                    <div class="descricao_lanche_sjc">(Pão, maionese, alface americana, tomate,molho especial, bacon, peito de frango desfiado e queijo prato)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -77px;"> 
                    	<span style="font-size:14px;">Médio:</span>
                    	<span style="font-size:12px">R$</span>8,90
                    	<span style="font-size:14px;">Grande:</span>
                    	<span style="font-size:12px">R$</span>15,90                    	
                    </div>
                </div>
            </div>               
            
            <div id="lanches1_sjc">
            	<div class="n3_sjc">6</div>
                <div class="descricao_lanches_sjc">
                	<span>Big Burger Primo’s </span><br />
                    <div class="descricao_lanche_sjc">(Pão, maionese, alface americana, tomate, cebola, molho especial, hambúrguer, queijo prato e queijo cheddar)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -77px;"> 
                    	<span style="font-size:14px;">Médio:</span>
                    	<span style="font-size:12px">R$</span>7,90
                    	<span style="font-size:14px;">Grande:</span>
                    	<span style="font-size:12px;">R$</span>14,00                    	
                    </div>
                </div>
            </div>
            
            <div id="lanches1_sjc">
            	<div class="n3_sjc">12</div>
                <div class="descricao_lanches_sjc">
                	<span>Primo’s Tudo</span><br />
                    <div class="descricao_lanche_sjc">(Pão, maionese, alface americana, tomate, molho especial, bacon, ovo, salsicha, requeijão cremoso, peito de frango, desfiado e queijo prato)</div>
                    <div class="preco_lanche_sjc" style="margin-top: -97px;"> 
                    	<span style="font-size:14px;">Médio:</span>
                    	<span style="font-size:12px">R$</span>10,90
                    	<span style="font-size:14px;">Grande:</span>
                    	<span style="font-size:12px;">R$</span>17,90  
                    </div>
                </div>
            </div>                                                            
                                    
        </div>        
        
    	<div id="adicional_extra" class="cardapio">
        	<div class="titulos">Adicional Extra:</div>
            <div id="extras1">
            Hambúrguer<br />
            Frango<br />
            Bacon<br />
            Salsicha<br />
            Queijo cheddar<br />
            Queijo requeijão (cremoso)<br />
            </div>
            <div id="preco_extras1">
            R$ 2,00<br />
            R$ 2,00<br />
            R$ 2,20<br />
            R$ 1,20<br />
            R$ 1,20<br />
            R$ 1,20
            </div>

            <div id="extras2">
            Queijo prato<br />
            Ovo<br />
            Tomate<br />
            Alface Americana<br />
            Batata palha<br />
            Cebola
            </div>
            <div id="preco_extras2">
            R$ 1,20<br />
            R$ 1,00<br />
            R$ 0,90<br />
            R$ 0,90<br />
            R$ 0,90<br />
            R$ 0,90
            </div>            
        </div>                
        
    	<div id="refrigerantes" class="cardapio">
        	<div class="titulos">Bebidas:</div>
            <div id="opcoes">
            	<div class="itens">
                    <img src="images/bebidas/lata.png" /><br />
                    Lata<br />
                    R$<span style="font-size:28px;">3,50</span>
                </div>
            	<div class="itens" style="margin-top:-19px;">
                    <img src="images/bebidas/600.png" /><br />
                    600 ml<br />
                    R$<span style="font-size:28px;">4,20</span>
                </div> 
            	<div class="itens" style="margin-top:-30px;">
                    <img src="images/bebidas/1-5l.png" /><br />
                    1,5 Litros<br />
                    R$<span style="font-size:28px;">6,00</span>
                </div>  
            	<div class="itens">
                    <img src="images/bebidas/lata.png" /><br />
                    Suco Lata<br />
                    R$<span style="font-size:28px;">3,50</span>
                </div> 
            	<div class="itens" style="margin-top:-18px;">
                    <img src="images/bebidas/s1l.png" /><br />
                    Suco 1 Litro<br />
                    R$<span style="font-size:28px;">6,00</span>
                </div>                                                                              
                
            </div>
            <div id="marcas">
                <img src="images/bebidas/sprite.jpg" />
                <img src="images/bebidas/fanta.jpg" />
                <img src="images/bebidas/coca.jpg" />
                <img src="images/bebidas/kuat.jpg" />
                <img src="images/bebidas/del_valle.jpg" />                                                
            </div>
        </div> 
                       
    	<div id="acai1" class="cardapio">
        	<img src="images/acai.jpg" />
        </div>                

    	<div id="acai2" class="cardapio">
        	<div id="acai2_1">
                <div class="titulos">Açaí:</div>
                <div class="descricao_acai1">
                    <div class="itens">
                        <img src="images/bebidas/copo300.png" /><br />
                        Copo 300ml<br />
                        R$<span style="font-size:28px;">4,50</span>
                    </div>
                    <div class="itens" style="margin-top:-19px; margin-left:-10px;">
                        <img src="images/bebidas/copo500.png" /><br />
                        Copo 500ml<br />
                        R$<span style="font-size:28px;">5,50</span>
                    </div> 
                    <div class="itens" style="margin-top:-35px;">
                        <img src="images/bebidas/copo700.png" /><br />
                        Copo 700ml<br />
                        R$<span style="font-size:28px;">8,50</span>
                    </div>
                </div>
            </div>
        	<div id="acai2_2">
                <div class="titulos">Acréscimos:</div>
                <div class="nome_acrescimos_acai">
                    Banana:<br />
                    Paçoca:<br />
                    Leite Condensado:<br />
                    Leite em pó:<br />
                    Granola Tradicional:<br />
                    Ovomaltine:<br />
                    Maracujá:<br />
                    Choco boll:<br />
                    Confete: <br />
                    Chocolate ao leite:</span>:<br />
                </div>  
                <div class="precos_acrescimos_acai"> 
                    <span style="font-size:14px;">R$</span> 0,90<br /><!--Banana-->
                    <span style="font-size:14px;">R$</span> 0,90<br /><!--Paçoca-->
                    <span style="font-size:14px;">R$</span> 1,50<br /><!--Leite C-->
                    <span style="font-size:14px;">R$</span> 1,50<br /><!--Leite P-->
                    <span style="font-size:14px;">R$</span> 1,50<br /><!--Granola T-->
                    <span style="font-size:14px;">R$</span> 1,50<br /><!--Ovomaltine-->
                    <span style="font-size:14px;">R$</span> 2,00<br /><!--Maracujá-->
                    <span style="font-size:14px;">R$</span> 1,80<br /><!--Choco Boll-->
                    <span style="font-size:14px;">R$</span> 1,80<br /><!--Confete-->
                    <span style="font-size:14px;">R$</span> 1,80<br /><!--Chocolate-->         
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
