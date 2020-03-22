<?php include_once ('../conf/conf.php'); ?>


<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Portal Contra o Coronavirus─Prefeitura Municipal de Quatá-SP</title>
	
	<base href=<?php echo BASE_URL_DIR; ?>>
	
	
	<link rel="shortcut icon" href="img/logo.ico">
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/language.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" href="css/financial-support.css">
	<link rel="stylesheet" href="css/news-slider.css">

	<!-- Google Analytics  -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153764787-1"></script>
	<script src="javascript/google/gtag-config.js"></script>


	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="javascript/news-sliders.js"></script>
	<script src="https://use.fontawesome.com/bd6ce15083.js"></script>

</head>




<body>
	<?php include (HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-home").addClass("current-menu-item");
	</script>


	<div class='content'>
		<?php include (HTDOCS_DIR . '/html/news-slider.php'); ?>

		<span>
			<p>INCT é a sigla para Instituto Nacional de Ciência e Tecnologia. É um dos maiores programas de Ciência e Tecnologia no Brasil e objetiva desenvolver Ciência e Tecnologia do mais alto nível, na chamada fronteira do conhecimento.</p>

			<p>O INCT <strong>Tecnologia <abbr title='Global Navigation Satellite System'>GNSS</abbr> no suporte à navegação aérea</strong> foi aprovado na chamada INCT 16/2014. Trata-se de um projeto de seis anos, que teve início em janeiro de 2017. Ele passou a ser designado como <strong><abbr title='Global Navigation Satellite System'>GNSS</abbr>-NavAer</strong>. Dentre os 14 temas de pesquisa apresentados quando da chamada, ele se insere no tema "Controle e Gerenciamento de Tráfego Aéreo".
			</p>
			
			<p>Diferentes instituições participam deste projeto: a <abbr title='Universidade Estadual Paulista'>Unesp Campus de Presidente Prudente</abbr> que o coordena, o <abbr title='Instituto Nacional de Pesquisas Espaciais'>INPE</abbr>, o <abbr title='Instituto Tecnológico de Aeronáutica'>ITA</abbr>, o <abbr title='Instituto de Aeronáutica e Espaço'>IAE</abbr>, a <abbr title='Pontifícia Universidade Católica do Rio de Janeiro'>PUC-Rio</abbr>, a <abbr title='Universidade Federal do Rio Grande do Sul'>UFRGS</abbr> e o <abbr title='Instituto Federal de São Paulo'>IFSP</abbr> Campus Presidente Epitácio. Outras instituições ainda colaboram com o nosso INCT, tais como <abbr title='Universidade Federal do Paraná'>UFPR</abbr>, <abbr title='Universidade Tecnológica Federal do Paraná'>UTFPR</abbr> além das instituições que se prontificaram a colaborar na forma de permitir a instalações de equipamentos para o projeto, que são várias e se espalham por todo o pais. Esse projeto recebe financiamento do <abbr title='Conselho Nacional de Desenvolvimento Científico e Tecnológico'>CNPq</abbr>, <abbr title='Coordenação de Aperfeiçoamento de Pessoal de Nível Superior'>CAPES</abbr> e <abbr title='Fundação de Amparo à Pesquisa do Estado de São Paulo'>FAPESP</abbr><a class='read-more' href='pt/projeto.php'> [...] Leia mais</a></p>
		</span>

		<?php include (HTDOCS_DIR . '/html/financial-support.php'); ?>
	</div>

	
	<?php include (HTDOCS_DIR . '/html/footer.php'); ?>



	<script>
		$(".language-btn").attr("href", "en/index.php");
	</script>
</body>
</html>
