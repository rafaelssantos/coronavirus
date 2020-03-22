<?php include_once ('../../../conf/conf.php'); ?>

<?php 
	require_once(ROOT_DIR . '/classes/NewsManager.php');

	$other_lang_url = "en/news/";
	$other_lang = "en";
	$lang = "pt";
	$terms_and_cond_url = "pt/noticias/termos-e-condicoes.php";
 ?>


<!DOCTYPE html>
<html lang='{$lang}'>
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notícias ─ GNSS-NavAer</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel='shortcut icon' href='img/logo.ico'>
	<link rel="alternate" hreflang="en" href="en/news/">


	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/html.css'>
	<link rel='stylesheet' type='text/css' href='css/language.css'>
	<link rel='stylesheet' type='text/css' href='css/header.css'>
	<link rel='stylesheet' type='text/css' href='css/content.css'>
	<link rel='stylesheet' type='text/css' href='css/footer.css'>
	<link rel='stylesheet' type='text/css' href='css/news.css'>

	<!-- Google Analytics  -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153764787-1"></script>
	<script src="javascript/google/gtag-config.js"></script>
	

	<script src='javascript/lib/jquery-3.4.1.min.js'></script>
</head>



<body>
	<?php include (HTDOCS_DIR . '/html/' . $lang . '/language.php'); ?>
	<?php include (HTDOCS_DIR . '/html/' . $lang . '/header.php'); ?>
	
	<script>
		$('#mn-news').addClass('current-menu-item');
	</script>

	<div class='content'>	
		<div class='news-archive'>
			<?php 
	 			echo NewsManager::getInstance()->generateNewsHeadline($lang, $lang, HTDOCS_DIR . "/json/news/"); 
	 		?>
		</div>

		<div id='news-terms'>
			<?php 
				echo "<p>Participa deste projeto? Deseja enviar uma notícia ou artigo? <a href='" . $terms_and_cond_url . "'>Termos & Condições.</a></p>";
			 ?>
		</div>
	</div>


	<?php include (HTDOCS_DIR . '/html/' . $lang . '/footer.php'); ?>	

 	<script>
		$(".language-btn").attr("href", <?php echo "'{$other_lang_url}'"; ?> );
	</script>
 </body>