<?php include_once ('../../../conf/conf.php'); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Termos & Condições (Notícias) ─ GNSS-NavAer</title>

	<base href=<?php echo BASE_URL_DIR; ?>>

	
	<link rel="shortcut icon" href="img/logo.ico">
	<link rel="alternate" hreflang="en" href="en/news/terms-and-conditions.php">

	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/language.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/news.css">

	<!-- Google Analytics  -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153764787-1"></script>
	<script src="javascript/google/gtag-config.js"></script>	

	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
</head>





<body>
	<?php include (HTDOCS_DIR . '/html/pt/language.php'); ?>
	<?php include (HTDOCS_DIR . '/html/pt/header.php'); ?>

	<script>
		$("#mn-news").addClass("current-menu-item");
	</script>


	<div class='content'>
		<h1 id='news-terms-and-conditions-title'>Termos & Condições</h1>
		<h2 id='news-terms-and-conditions-subtitle'>Artigos e notícias</h2>
		<ol>
			<li>O texto submetido deve estar inserido no contexto do projeto.</li>
			<li>O processo de publicação não é automático. O texto será analisado antes de ser disponibilizado neste site.</li>
			<li>Tipos de textos aceitos: notícias, informações de eventos, artigos informativos e qualquer outro ao projeto.</li>
			<li>É necessário enviar versões em dois idiomas: português brasileiro e inglês americano (ou britânico).</li>
		</ol>
		<p>Obrigado por sua colaboração.</p>
		<a href="https://forms.gle/dhNTnwD9V1GmETz36" target="_blank" class='button news-submit-button'>Prosseguir</a>
	</div>

	
	<?php include (HTDOCS_DIR . '/html/pt/footer.php'); ?>	

	<script>
		$(".language-btn").attr("href", "en/news/terms-and-conditions.php");
	</script>
</body>
</html>
