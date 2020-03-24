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
	<link rel="stylesheet" type="text/css" href="css/department.css">
	<link rel="stylesheet" type="text/css" href="css/call-center.css">



	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="javascript/collapsible-button.js"></script>
	<script src="https://use.fontawesome.com/bd6ce15083.js"></script>

</head>




<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-services").addClass("current-menu-item");
	</script>


	<div class='content'>
		<h1>REPARTIÇÕES PÚBLICAS MUNICIPAIS</h1>
		<p>Algumas repartições e serviços públicos municipais foram temporariamente suspensos ou tiveram seu horário de funcionamento alterado. Clique no nome de cada secretaria ou setor para obter mais informações e instruções a respeito do funcionamento.</p>
		

		<button type="button" class="collapBtn">Administração e Finanças</button>
		<div class="department-container">
  			<p>Em definição.</p>
		</div>

		<button type="button" class="collapBtn">Agricultura e Meio Ambiente</button>
		<div class="department-container">
			<p>Em definição.</p>
		</div>

		<button type="button" class="collapBtn">Cultura e Turismo</button>
		<div class="department-container">
			<p><strong>Responsável: </strong>Gustavo Pilizari<br>Telefone: (18) 99789-3645</p>

			<h5>Centro Cultural (FECHADO)</h5>
			<ul>
				<li>Biblioteca Memorial (FECHADO)</li>
				<li>Aulas de Piano (INTERROMPIDO)</li>
			</ul>

			<h5>Anfiteatro (FECHADO)</h5>
			<ul>
				<li>Aulas de Banda (INTERROMPIDO)</li>
				<li>Aulas de Xadrez (INTERROMPIDO)</li>
			</ul>

			<h5>Polo GURI (FECHADO)</h5>
			<ul>
				<li>Aulas de Música (INTERROMPIDO)</li>
				<li>Aulas de Ballet (INTERROMPIDO)</li>
			</ul>
		</div>

		<button type="button" class="collapBtn">Educação</button>
		<div class="department-container">
			<p>Em definição.</p>
		</div>

		<button type="button" class="collapBtn">Esporte e Lazer</button>
		<div class="department-container">
			<p>Em definição.</p>
		</div>

		<button type="button" class="collapBtn">Infraestrutura, Urbanização e Serviços</button>
		<div class="department-container">
			<p>Em definição.</p>
		</div>


		<button type="button" class="collapBtn">Planejamento, Obras e Serviços</button>
		<div class="department-container">
			<p>Em definição.</p>
		</div>

		<button type="button" class="collapBtn">Saúde</button>
		<div class="department-container">
			<p></p>
		</div>

		<button type="button" class="collapBtn">Assessoria de Imprensa</button>
		<div class="department-container">
			<p><strong>Responsável: </strong> Andréia Serrano<br>Telefone: (18) 99662-2304<br>Horário de atendimento: 8h às 11h e das 13h às 17h</p>
		</div>

		<?php include(HTDOCS_DIR . '/html/call-center.php'); ?>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>
</html>