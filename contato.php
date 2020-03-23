<?php 
	include_once ('conf/conf.php'); 
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contato─CGC da Prefeitura Municipal de Quatá-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel="shortcut icon" href="img/logo.ico">
	<link rel="alternate" hreflang="en" href="en/contact.php">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/language.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">


	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
</head>

<body>
	<?php include (HTDOCS_DIR . '/html/header.php'); ?>
	
	<script>
		$("#mn-contact").addClass("current-menu-item");
	</script>

	<div class="content">
		<div class="container-address">
			<div class='address'>
				<h5>Central de Atendimento ao combate do Coronavírus</h5>
				<p>Telefone: (18) 99799-0070</p>
			</div>
		</div>
	</div>
	
	<?php include (HTDOCS_DIR . '/html/footer.php'); ?>	
</body>
</html>