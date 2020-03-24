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
		<h1>REPARTIÇÕES PÚBLICAS MUNICIPAIS</h1>

		<h3>Administração e Finanças</h3>
		<p>Em definição.</p>

		<h3 class='inside-subtitle'>Agricultura e Meio Ambiente</h3>
		<p>Serviço de coleta seletiva, ASQUARE, em funcionamento.</p>
		<p>Atendimento ao público e demais serviços com funcionamento suspenso.</p>

		<h3 class='inside-subtitle'>Assuntos Jurídicos</h3>
		<p>Funcionamento interno e remoto.</p>


	
		<h3 class='inside-subtitle'>Cultura e Turismo</h3>
		<p>Biblioteca Municipal, Centro Cultural, Espaço Memória, Guri, Banda Municipal e aulas de Piano, Xadrez e Ballet estão com funcionamento suspenso.</p>

		<h3 class='inside-subtitle'>Educação</h3>
		<p>Todos os setores (inclusive creches e escolas) com funcionamento suspenso.</p>
		
		<h3 class='inside-subtitle'>Esporte e Lazer</h3>
		<p>Em definição.</p>

		<h3 class='inside-subtitle'>Fundo Social da Solidariedade</h3>
		<p></p>

		<h3 class='inside-subtitle'>Infraestrutura, Urbanização e Serviços</h3>
		<p>Coleta de lixo, coleta de entulho e serviços de limpeza de praças públicas e demais localidades em funcionamento.</p>

		<h3 class='inside-subtitle'>Planejamento, Obras e Desenvolvimento</h3>
		<p>Atendimento presencial suspenso. Todos os setores estão com atendimento remoto emergencial por telefone ou e-mail das 9h às 11h e das 13h às 17h.</p>
		<p>Setor de Cadastro Imobiliário: <a href="mailto:cadastroimobiliario@quata.sp.gov.br">cadastroimobiliario@quata.sp.gov.br</a> / 18 99779-4395.</p>
		<p>Setor de Fiscalização: <a href="mailto:fiscalizacao@quata.sp.gov.br">fiscalizacao@quata.sp.gov.br</a> / 18 99673-4804.</p>
		<p>Setor de Engenharia: <a href="mailto:guilhermeengenheiro@quata.sp.gov.br">guilhermeengenheiro@quata.sp.gov.br</a> / 18 99732-1460 e <a href="mailto:marliarquiteta@quata.sp.gov.br">marliarquiteta@quata.sp.gov.br</a> / 14 99723-2500.</p>

		<h3 class='inside-subtitle'>Promoção Social</h3>
		<p>Assistência social com atendimento ao público das 8h às 11h com revezamento de funcionários.</p>
		<p>CRAS com atendimento ao público das 13h às 16h com revezamento de funcionários.</p>

		<h3 class='inside-subtitle'>Saúde</h3>


		<h1 class='inside-title'>REPARTIÇÕES PÚBLICAS ESTADUAIS</h1>

		<h1 class='inside-title'>REPARTIÇÕES PÚBLICAS FEDERAIS</h1>

		<h1 class='inside-title'>COMÉRCIO</h1>
		<h1 class='inside-title'>INDÚSTRIA</h1>



		<?php include(HTDOCS_DIR . '/html/questions.php'); ?>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

</html>