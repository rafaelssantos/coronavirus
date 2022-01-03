<?php
include_once('conf/conf.php');
?>


<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Funcionamento de repartições públicas ─ CGC da Prefeitura Municipal de Quatá-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel="shortcut icon" href="img/logo.ico">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/language.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/department.css">
	<link rel="stylesheet" type="text/css" href="css/call-center.css">

	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="https://kit.fontawesome.com/fa170b8b16.js" crossorigin="anonymous"></script>
	<script src="javascript/collapsible-button.js"></script>
</head>




<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-services").addClass("current-menu-item");
	</script>


	<div class='content'>
		<h1>REPARTIÇÕES PÚBLICAS MUNICIPAIS</h1>
		<p>As repartições e serviços públicos municipais estão em funcionamento normal.</p>

		<?php include(HTDOCS_DIR . '/html/call-center.php'); ?>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

</html>