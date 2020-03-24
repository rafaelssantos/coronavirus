<?php
include_once('conf/conf.php');
?>


<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Funcionamento de serviços─CGC da Prefeitura Municipal de Quatá-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel="shortcut icon" href="img/logo.ico">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/language.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/questions.css">



	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="javascript/news-sliders.js"></script>
	<script src="https://use.fontawesome.com/bd6ce15083.js"></script>

</head>




<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-services").addClass("current-menu-item");
	</script>


	<div class='content'>
		<h1>Repartições públicas municipais</h1>
		<h5 class='inside-header'>Administração e Finanças</h5>
		<h5 class='inside-header'>Agricultura e Meio Ambiente</h5>
		<h5 class='inside-header'>Assuntos Jurídicos</h5>
		<h5 class='inside-header'>Cultura e Turismo</h5>
		<h5 class='inside-header'>Educação</h5>
		<h5 class='inside-header'>Esporte e Lazer</h5>
		<h5 class='inside-header'>Fundo Social da Solidariedade</h5>
		<h5 class='inside-header'>Infraestrutura, Urbanização e Serviços</h5>
		<h5 class='inside-header'>Planejamento, Obras e Desenvolvimento</h5>
		<h5 class='inside-header'>Promoção Social</h5>
		<h5 class='inside-header'>Saúde</h5>

		<?php include(HTDOCS_DIR . '/html/questions.php'); ?>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

</html>