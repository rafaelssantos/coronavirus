<?php include_once ('../../../conf/conf.php'); ?>


<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notícias ─ GNSS-NavAer</title>	

	<base href=<?php echo BASE_URL_DIR; ?>>
		

	<link rel='shortcut icon' href='img/logo.ico'>
	<link rel="alternate" hreflang="en" href="en/news/stations-of-continuous-monitoring-of-ionospheric-scintillation.php">


	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/html.css'>
	<link rel='stylesheet' type='text/css' href='css/language.css'>
	<link rel='stylesheet' type='text/css' href='css/header.css'>
	<link rel='stylesheet' type='text/css' href='css/content.css'>
	<link rel='stylesheet' type='text/css' href='css/footer.css'>
	<link rel='stylesheet' type='text/css' href='css/news.css'>
	<link rel="stylesheet" type='text/css' href="javascript/lib/leaflet/leaflet.css">

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
		$("#mn-news").addClass("current-menu-item");
	</script>


 
	<div class='content'>
		<span class='date'>30 de julho de 2019</span>
		<h1>Rede de Estações de Monitoramento Contínuo da Cintilação Ionosférica</h1>
		<span class='author'>Ítalo Tsuchiya,  Rafael Silva Santos, Rogério Takeshi Oyama e Bruno César Vani</span>
		<p>Antes mesmo do INCT GNSS-NavAer, nossa equipe ja se dedicava ao estudo da cintilação ionosférica. Nesse âmbito, dois projetos de temáticos anteriores, <abbr title="Concept for Ionospheric Scintillation Mitigation for Professional GNSS in Latin America">CIGALA</abbr> e <abbr title="Countering GNSS high Accuracy applications Limitations due to Ionospheric disturbances in BRAzil">CALIBRA</abbr>, forneceram recursos para a implantação de uma rede monitoramento da cintilação ionosférica no território brasileiro.  Essa rede continua ativa e em contínua expansão.</p>

		<p>O principal equipamento das estações de monitoramento é o receptor GNSS PolaRxS–PRO, da Septentrio, que é apresentado na  <a href="pt/noticias/estacoes-de-monitoramento-continuo-da-cintilacao-ionosferica.php#figure-1">Figura 1</a>. Esse receptor coleta dados a uma taxa de até 100 Hz e proporcionam parâmetros específicos da ionosfera a cada minuto.</p>

		<figure id='figure-1'>
			<img class='news-img' src="img/PolaRxS-IMGP60431.jpg" style='max-width: 300px;' alt="">
			<figcaption><strong>Figura 1:</strong> Receptor PolaRxS-PRO Septentrio.</figcaption>
		</figure>

		<p>Na presente data, a rede conta com receptores financiados pelo Projeto <abbr title="Concept for Ionospheric Scintillation Mitigation for Professional GNSS in Latin America">CIGALA</abbr>, Projeto <abbr title="Countering GNSS high Accuracy applications Limitations due to Ionospheric disturbances in BRAzil">CALIBRA</abbr>;  <abbr title='Fundação de Amparo à Pesquisa do Estado de São Paulo'>FAPESP</abbr> e INCT GNSS-NavAer, além de instituições parceiras, totalizando 15 receptores. Esses receptores estão instalados em estações de monitoramento contínuo conforme distribuição no mapa apresentado na <a href="pt/noticias/estacoes-de-monitoramento-continuo-da-cintilacao-ionosferica.php#figure-2">Figura 2</a>. Futuramente, novos receptores serão instalados.</p>

		<figure id='figure-2'>
			<div id="stations-network-map" style="z-index: 1; max-width: 800px;  margin: auto; height: 500px"></div>
			<figcaption><strong>Figura 2:</strong> Rede GNSS-NavAer.</figcaption>
		</figure>

		<p>Os dados coletados são armazenados em nossa infraestrutura e disponibilizados para análise na ferramenta <a target="_blank" href="http://ismrquerytool.fct.unesp.br/is/">ISMR Query Tool</a>. Essa ferramenta visa estender as possibilidades de análise dos dados de monitoramento da ionosfera através da aplicação de técnicas de visualização e mineração de dados, explorando recursos em um ciclo analítico visual. O software também pode ser utilizado para fazer o download de dados históricos de montitoramento (arquivos .ismr).</p>
		 
		<h2 class='section-title'>Referências</h2>
		<ol>
			<li>VANI, Bruno César; SHIMABUKURO, Milton Hirokazu; MONICO, João Francisco Galera. Visual exploration and analysis of ionospheric scintillation monitoring data: The ISMR Query Tool. Computers & Geosciences (2017). <a target="_blank" href="http://dx.doi.org/10.1016/j.cageo.2016.08.022">http://dx.doi.org/10.1016/j.cageo.2016.08.022</a>.</li>
		</ol>
	</div>

	<?php include (HTDOCS_DIR . '/html/pt/footer.php'); ?>	


	<script>
		$(".language-btn").attr("href", "en/news/stations-of-continuous-monitoring-of-ionospheric-scintillation.php");
	</script>
 </body>