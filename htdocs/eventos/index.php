<?php include_once ('../../../conf/conf.php'); ?>

<?php 
	require_once(ROOT_DIR . '/classes/EventsManager.php');

	$other_lang_url = "en/events/";
	$other_lang = "en";
	$lang = "pt"
?>


<!DOCTYPE html>
<html lang='{$lang}'>
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eventos ─ GNSS-NavAer</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel='shortcut icon' href='img/logo.ico'>
	<link rel="alternate" hreflang="en" href="en/events/" /> <!-- alterar aqui! -->


	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/html.css'>
	<link rel='stylesheet' type='text/css' href='css/language.css'>
	<link rel='stylesheet' type='text/css' href='css/header.css'>
	<link rel='stylesheet' type='text/css' href='css/content.css'>
	<link rel='stylesheet' type='text/css' href='css/footer.css'>
	<link rel='stylesheet' type='text/css' href='css/events.css'>
	

	<!-- Google Analytics  -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153764787-1"></script>
	<script src="javascript/google/gtag-config.js"></script>

	<script src='javascript/lib/jquery-3.4.1.min.js'></script>
</head>

<body>
	<?php include (HTDOCS_DIR . '/html/' . $lang . '/language.php'); ?>
	<?php include (HTDOCS_DIR . '/html/' . $lang . '/header.php'); ?>
	
	<script>
		$('#mn-events').addClass('current-menu-item');
	</script>

	<div class='content'>	
		<div class='events-archive'>
			<?php 
	 			echo EventsManager::getInstance()->generateEventsHeadline($lang, $lang, HTDOCS_DIR . "/json/events/"); 
	 		?>
		</div>

	</div>


	<?php include (HTDOCS_DIR . '/html/' . $lang . '/footer.php'); ?>	

 	<script>
		$(".language-btn").attr("href", <?php echo "'{$other_lang_url}'"; ?> );
	</script>
</body>