<?php include_once ('../../../conf/conf.php'); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eventos ─ GNSS-NavAer</title>

	<base href=<?php echo BASE_URL_DIR; ?>>
	

	<link rel='shortcut icon' href='img/logo.ico'>
	<link rel="alternate" hreflang="pt" href="en/events/sbgea-simfast.php" />

	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/html.css'>
	<link rel='stylesheet' type='text/css' href='css/language.css'>
	<link rel='stylesheet' type='text/css' href='css/header.css'>
	<link rel='stylesheet' type='text/css' href='css/content.css'>
	<link rel='stylesheet' type='text/css' href='css/footer.css'>
	<link rel='stylesheet' type='text/css' href='css/events.css'>
	<link rel="stylesheet" type='text/css' href="javascript/lib/leaflet/leaflet.css" />

	<!-- Google Analytics  -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153764787-1"></script>
	<script src="javascript/google/gtag-config.js"></script>

	<script src='javascript/lib/jquery-3.4.1.min.js'></script>
	<script src="javascript/lib/leaflet/leaflet.js"></script>
	<script src="javascript/stations-network-map.js"></script>
</head>



<body>

	<?php include (HTDOCS_DIR . '/html/pt/language.php'); ?>
	<?php include (HTDOCS_DIR . '/html/pt/header.php'); ?>

	<script>
		$("#mn-events").addClass("current-menu-item");
	</script>


 
	<div class='content'>
		<span class='date'>25 à 29 de Maio de 2020</span>
		<h1>VIII Simpósio Brasileiro de Geofísica Espacial e Aeronomia (SBGEA) & VIII Simpósio de Física e Astronomia do Vale do Paraíba (SIMFAST)</h1>

		<p>
			O Simpósio Brasileiro de Geofísica Espacial e Aeronomia (SBGEA) é um evento científico promovido pela Associação Brasileira de Geofísica Espacial e Aeronomia, e que acontece a cada dois anos desde 2006. Entre os dias 25-29 de maio de 2020, a oitava edição (VIII SBGEA) do simpósio será realizada em conjunto com a oitava edição do Simpósio de Física e Astronomia do Vale Paraíba (VIII SimFAST), um evento organizado anualmente pelos discentes do Programa de Pós-Graduação em Física e Astronomia da Universidade do Vale do Paraíba (UNIVAP).
		</p>

		<p>
			O simpósio em conjunto VIII SBGEA & VIII SimFAST acontecerá no campus da UNIVAP, na cidade de São José dos Campos/SP, Brasil. O evento será uma oportunidade única para que a comunidade científica da área de Geofísica Espacial e Aeronomia, bem como das diferentes áreas de pesquisa da Física e Astronomia, possam divulgar e discutir seus trabalhos diante de uma plateia multidisciplinar, que contará com especialistas do Brasil e do exterior.
		</p>

		<p>
			Um objetivo importante da reunião da SBGEA & SimFAST é facilitar a integração entre estudantes e professores/pesquisadores, promovendo um intercâmbio frutífero de ideias e experiências. Esperamos que na próxima edição do SBGEA & SimFAST, os profissionais que atuam nas diferentes áreas envolvidas no evento possam estabelecer e fortalecer a cooperação e o intercâmbio acadêmico, bem como planejar ações futuras que contribuem para a formação de especialistas e o desenvolvimento científico e tecnológico do Brasil.
		</p>


		<img class="events-img" src="img/sbgea-simfast.png">
		<br>		
		
		<h2 class='section-title'>Link para o evento:</h2>
		<ol>
			<a target="_blank" href="https://www.univap.br/universidade/instituto-de-pesquisa/agenda-e-eventos/sbgea-simfast.html">https://www.univap.br/universidade/instituto-de-pesquisa/agenda-e-eventos/sbgea-simfast.html</a>
		</ol>
	</div>


	<?php include (HTDOCS_DIR . '/html/en/footer.php'); ?>	


	<script>
		$(".language-btn").attr("href", "en/events/sbgea-simfast.php");
	</script>
 </body>