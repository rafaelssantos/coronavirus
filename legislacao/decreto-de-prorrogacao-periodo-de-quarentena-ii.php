<?php
include_once('../conf/conf.php');
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

    <title>Legislação ─ CGC da Prefeitura Municipal de Quatá-SP</title>

    <base href=<?php echo BASE_URL_DIR; ?>>


    <link rel='shortcut icon' href='img/logo.ico'>

    <link rel='stylesheet' type='text/css' href='css/reset.css'>
    <link rel='stylesheet' type='text/css' href='css/html.css'>
    <link rel='stylesheet' type='text/css' href='css/header.css'>
    <link rel='stylesheet' type='text/css' href='css/content.css'>
    <link rel='stylesheet' type='text/css' href='css/footer.css'>
    <link rel='stylesheet' type='text/css' href='css/news.css'>

    <script src="javascript/lib/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/fa170b8b16.js" crossorigin="anonymous"></script>
</head>



<body>
    <?php include(HTDOCS_DIR . '/html/header.php'); ?>

    <script>
        $("#mn-news").addClass("current-menu-item");
    </script>



    <div class='content'>
        <span class='date'>22 de abril de 2020</span>
        <h1>Decreto de prorrogação do estado de quarentena ─ DECRETO Nº 4.117</h1>
        <span class='author'>O texto reproduzido tem caráter informativo e não substitui o <a href=""></a>publicado no diário oficial do município</span>

        <p><strong>"DISPÕE SOBRE A PRORROGAÇÃO DO PERÍODO DE QUARENTENA DE QUE TRATA O DECRETO MUNICIPAL Nº. 4.114 DE 08 DE ABRIL DE 2020 E DÁ OUTRAS PROVIDÊNCIAS"</strong></p>

        <p><strong>MARCELO PECCHIO,</strong>, Prefeito Municipal de Quatá, no uso de suas atribuições legais;</p>

        <p><strong>CONSIDERANDO</strong> o disposto no Decreto Municipal nº 4.107 de 26 de março de 2020, que estabeleceu QUARENTENA no Município de Quatá, bem como o Decreto Municipal nº. 4.114 de 08 de abril de 2020 que estendeu esse período até 22 de abril de 2020;</p>

        <p><strong>CONSIDERANDO</strong> o Comunicado Oficial do Governo do Estado de São Paulo, que informou sobre a prorrogação da Quarentena em todos os 645 Municípios do Estado até 10 de maio de 2020;</p>

        <p><strong>CONSIDERANDO</strong> a necessidade de se alinhar as determinações do Governo do Estado de São Paulo com as determinações do Poder Público Municipal;</p>

        <p><strong>DECRETA:</strong>

            <p><strong>Artigo 1º</strong> – Fica estendido o período de quarentena estabelecido no artigo 1º do Decreto Municipal nº 4.114 de 08 de abril de 2020, até <strong>10 de maio de 2020</strong>, no Município de Quatá, como medida necessária ao enfrentamento da pandemia da COVID-19 (Novo CORONAVÍRUS).</p>

            <p><strong>Artigo 2º</strong> – Este Decreto entra em vigor na data de sua publicação.</p>
            <h2 class='inside-header'>Fontes</h2>
            <ul>
                <li>PREFEITURA MUNICIPAL DE QUATÁ. <em>Diário Oficial do Município</em>. Data da publicação: 27 de abril de 2020. Disponível em: <a href="https://dosp.com.br/exibe_do.php?i=MTA1OTIx">https://dosp.com.br/exibe_do.php?i=MTA1OTIx</a>.</li>
            </ul>
    </div>

    <?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>