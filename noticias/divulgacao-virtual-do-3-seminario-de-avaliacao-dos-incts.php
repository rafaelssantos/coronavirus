<?php 
	include_once ('../conf/conf.php'); 
?>


<?php 
	require_once(ROOT_DIR . '/classes/NewsManager.php');
	$contact_url = BASE_URL_DIR . "contato.php";
 ?>


<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notícias─CGC da Prefeitura Municipal de Quatá-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>
		

	<link rel='shortcut icon' href='img/logo.ico'>

	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/html.css'>
	<link rel='stylesheet' type='text/css' href='css/language.css'>
	<link rel='stylesheet' type='text/css' href='css/header.css'>
	<link rel='stylesheet' type='text/css' href='css/content.css'>
	<link rel='stylesheet' type='text/css' href='css/footer.css'>
	<link rel='stylesheet' type='text/css' href='css/news.css'>



	<script src='javascript/lib/jquery-3.4.1.min.js'></script>
</head>



<body>

	<?php include (HTDOCS_DIR . '/html/pt/language.php'); ?>
	<?php include (HTDOCS_DIR . '/html/pt/header.php'); ?>

	<script>
		$("#mn-news").addClass("current-menu-item");
	</script>


 
	<div class='content'>
		<span class='date'>07 de novembro de 2019 ─ Última atualização em 18 de novembro de 2019</span>
		<h1>Divulgação virtual do INCT GNSS-NavAer no 3º Seminário de avaliação dos INCTs</h1>
		
		<p>O CNPq realizará, no período de 19 a 21 de novembro de 2019, o 3º Seminário de Monitoramento e Avaliação dos projetos do Programa Institutos Nacionais de Ciência e Tecnologia. Na ocasião serão avaliados 105 projetos do Programa, sendo 3 do Edital MCT/CNPq/FNDCT Nº 71/2010 – Institutos Nacionais de Ciência e Tecnologia em Ciências do Mar e 102 da Chamada INCT – MCTI/CNPq/CAPES/FAPs nº 16/2014.</p>
		
		<p>A apresentação virtual do INCT GNSS-NavAer está sendo preparada. </p> 
		<p>	
		Clique <?php echo "<a class='font-size-1-3' href='{$site_dir}download/III-seminario-avaliacao-dos-incts-2019.zip' download='III-seminario-avaliacao-dos-incts-2019.zip'>aqui</a>" ?>  para fazer download da versão atual da apresentação virtual. É importante seguir as instruções para conseguir executar corretamente os arquivos <em>.pptx</em> (MS Power Point 2007 ou superior) que a compõem.</p>
	</div>

	<?php include (HTDOCS_DIR . '/html/pt/footer.php'); ?>	


	<!-- <script>
		$(".language-btn").attr("href", "");
	</script> -->
 </body>