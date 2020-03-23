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
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" href="css/home.css">

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
		<div class='update-panel-container'>
			<span>Última atualização em 23 de março de 2020 às 20:00</span>
		</div>

		<div class='cases-panel-container'>
			<div class='cases-label-container' id='label-monitorados'>
				<span class='cases-label'>*Casos monitorados</span><span class='cases-counter'>001</span> 
			</div>
			<div class='cases-label-container' id='label-suspeitos'>
				<span class='cases-label'>**Casos suspeitos</span><span class='cases-counter'>004</span> 
			</div>
			<div class='cases-label-container' id='label-descartados'>
				<span class='cases-label'>Casos descartados</span><span class='cases-counter'>000</span> 
			</div>
			<div class='cases-label-container' id='label-confirmados'>
				<span class='cases-label'>Casos confirmados</span><span class='cases-counter'>000</span> 
			</div>
			<div class='cases-label-container' id='label-obitos'>
				<span class='cases-label'>Óbitos</span><span class='cases-counter'>000</span> 
			</div>
		</div>

		<p>*Casos monitorados são os suspeitos em que não foram feitas coletas de exame.</p>
		<p>**Casos suspeitos são os suspeitos em que foram feitas coletas de exame.</p>
		<p>Ao todo os casos que são possíveis de se confirmarem representam a soma dos casos monitorados com os casos suspeitos.</p>
		<div class='chart-panel-container'>
		</div>

	</div>
	
	<?php include (HTDOCS_DIR . '/html/footer.php'); ?>



	<script>
		$(".language-btn").attr("href", "en/index.php");
	</script>
</body>
</html>
