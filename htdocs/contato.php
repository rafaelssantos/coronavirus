<?php include_once ('../conf/conf.php'); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contato─CGC da Prefeitura Municipal de Quatá-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel="shortcut icon" href="img/logo.ico">
	<link rel="alternate" hreflang="en" href="en/contact.php">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/language.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">


	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
</head>

<body>
	<?php include (HTDOCS_DIR . '/html/language.php'); ?>
	<?php include (HTDOCS_DIR . '/html/header.php'); ?>
	
	<script>
		$("#mn-contact").addClass("current-menu-item");
	</script>

	<div class="content">
		<!-- <div class="container-contact">
			<div class="container-form">
				<h1 id='contact-us'>Central de Atendimento ao combate do Coronavírus</h1>
				<form class="form-contact" tabindex="1" action="pt/envia.php" method="post">
					<div class="input">
						<input class="inputs" type="text" name="nome" placeholder="Nome" required>
					</div>
					<div class="input">
						<input class="inputs" type="email" name="email" placeholder="Email" required>
					</div>
					<div class="input">
						<input class="inputs" type="text"name="tel" placeholder="Telefone">
					</div>
					<div class="input">
						<input class="inputs" type="text" name="assunto" placeholder="Assunto" required>
					</div>
					<div class="input">
						<textarea  class="inputs-area" name="mensagem" placeholder="Mensagem" rows="10" cols="30" required></textarea>
					</div>
					<div class="g-recaptcha" data-sitekey="6LcqqbIUAAAAAKKjrkOF8dDCYLQo6UwSBTI7pwkv"></div>
					<input type="submit" name="Enviar" class="button" value="Enviar">
				</form>		
			</div> -->


			<div class="container-address">
				<div class='address'>
					<h5>Central de Atendimento ao combate do Coronavírus</h5>
					<p>Telefone: (18) 99799-0070</p>
				</div>

				<!-- <div class="map">
					<div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.107063540473!2d-51.409717985436124!3d-22.121893285416554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9493f43f0ff7f359%3A0x3ff5d10b95e4acbf!2sUnesp+-+Faculdade+de+Ci%C3%AAncias+e+Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1563296003536!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div> -->
			</div>

		</div>
	</div>
	
	<?php include (HTDOCS_DIR . '/html/footer.php'); ?>	
</body>
</html>