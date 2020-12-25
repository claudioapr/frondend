<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php require_once('funcao.php'); 		  add();		?>
<!DOCTYPE html>		
<html lang="pt-br">		
<head>
	<meta charset="utf-8">		  
	<meta http-equiv="X-UA-Compatible" content="IE=edge">		 
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/favicon.png">		  		  
	<title>Z11</title>		  		  <!-- Bootstrap CSS -->	

	<link href="css/bootstrap.min.css" rel="stylesheet">		 
	<link href="css/style.css" rel="stylesheet">		
</head>	

<?php $db = open_database(); ?>
<body>		
<?php if ($db) : ?>  
	<div class="container">
		<div class="row">
			<div role="main">
				<img src="img/EMBREVE.png" class="img-responsive img-centro1" alt="...">
				<img src="img/ZEDAPOLLO.png" class="img-responsive img-centro2" alt="...">
				<img src="img/VAALEM.png" class="img-responsive img-centro3" alt="...">
				<form action="index.php" method="post">
					<input type="email" id="inpt" onfocus="troncaCor() " name="email['email']"  class="inpt-email" placeholder="Digite seu e-email">
					 <button type="submit">Cadastrar</button>
				</form>
				<div>
					<a href="https://www.facebook.com/Z11digital/"><img src="img/FACE.png" class="img-face" alt="..."></a>
					<a href="https://www.instagram.com/z11digital/"><img src="img/INSTA.png" class="img-insta" alt="..."></a>
				</div>	
			</div>
		</div>	
	</div>		 
		 
<?php else : ?>			
	<div class="alert alert-danger" role="alert">				
			<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>			
    </div>		
<?php endif; ?>
	
	<script src="js/jquery.js"></script>			  
	<script src="js/bootstrap.min.js"></script>	
	<script src="js/ajuste.js"></script>		
</body>		
</html>