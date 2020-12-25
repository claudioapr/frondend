<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php require_once('funcao.php'); 		  add();		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">		  
	<meta http-equiv="X-UA-Compatible" content="IE=edge">		 
	<link rel="icon" href="img/favicon.png">		  		  
	<title>Z11</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
</head>

<?php $db = open_database(); ?>
<body>		
	<?php if ($db) : ?> 



		<section class="container-fluid">


			<div class="row">
				<img src="img/logo.png" class="img-responsive img-centro1 logo" alt="...">

				<div class="panel-group" id="menu">

					<div class="panel panel-default">
						<div class="panel-heading" data-toggle="collapse" data-target="#primeiro-paragrafo" data-parent="#menu">
							<h4 class="panel-title titulo-menu"><a href="#">MARKETING DIGITAL</a></h>
							</div>

							<div class="collapse in" id="primeiro-paragrafo">
								<div class="panel-body">
									Criação de redes sociais; produção de conteúdo; gerenciamento para melhor performance; KPIs e métricas.
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading" data-toggle="collapse" data-target="#segundo-paragrafo" data-parent="#menu">
								<h4 class="panel-title titulo-menu"><a href="#">DESENVOLVIMENTO WEB</a></h4>
							</div>

							<div id="segundo-paragrafo" class="collapse">
								<div class="panel-body">
									Criação de site; análise de SEO; produção de conteúdo; gerenciamento para melhor performance e métricas.
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading" data-toggle="collapse" data-target="#terceiro-paragrafo" data-parent="#menu">
								<h4 class="panel-title titulo-menu"><a href="#">IDENTIDADE VISUAL</a></h4>
							</div>

							<div id="terceiro-paragrafo" class="collapse">
								<div class="panel-body">
									Marca, papelaria, brindes, packaging (embalagem), apresentações institucionais e eventos.
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading" data-toggle="collapse" data-target="#quarto-paragrafo" data-parent="#menu">
								<h4 class="panel-title titulo-menu"><a href="#">BRANDING</a></h4>
							</div>

							<div id="quarto-paragrafo" class="collapse">
								<div class="panel-body">
									Entender o posicionamento da sua marca no mercado, o que ela está fazendo, qual a real imagem que ela passa para as pessoas e qual a estratégia de marketing ideal para a sua empresa atingir os objetivos esperados. Em que investir? Para quem e onde falar? Quais redes sociais aparecer?
								</div>
							</div>
						</div>
					</div>
					<div class="titulo-email">
						<p><b>VÁ ALÉM, PODEMOS AJUDAR!</b></p>
					</div>





					<form action="index.php" method="post">
						<input type="email" class="inpt-email" name="email['email']" id="inpt" placeholder="Digite seu e-email"  >
						<div class="botao">
							<button type="submit" class="bnt-email"  id = "botao-cadastrar"  ><div class ="texto-botao" >Cadastrar</div></button>
						</div>


					</form>
					<div id="aviso">
						Recebemos seu email, entraremos em contato.
					</div>
					<div>
						<a href="https://www.facebook.com/Z11digital/"><img src="img/face.png" class="img-face" alt="Nosso facebook"></a>
						<a href="https://www.instagram.com/z11digital/"><img src="img/insta.png" class="img-insta" alt="Nosso instagram"></a>
					</div>	
					<img src="img/zed.png" class="zed" alt="Zed nosso mascote">

				</div>
			</div>


		</section>



	<?php else : ?>			
		<div class="alert alert-danger" role="alert">				
			<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>			
		</div>	
	<?php endif; ?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<script src="js/navbar-animation-fix.js"></script>
</body>
</html>