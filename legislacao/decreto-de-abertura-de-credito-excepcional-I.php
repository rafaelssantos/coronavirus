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
    <link rel='stylesheet' type='text/css' href='css/law.css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fa170b8b16.js" crossorigin="anonymous"></script>
</head>



<body>
    <?php include(HTDOCS_DIR . '/html/header.php'); ?>

    <script>
        $("#mn-news").addClass("current-menu-item");
    </script>



    <div class='content'>
        <span class='date'>03 de abril de 2020</span>
        <h1>Decreto de abertura de crédito extraordinário, em caráter excepcional ─ DECRETO Nº 4.111</h1>
        <span class='author'>O texto reproduzido tem caráter informativo e não substitui o <a href=""></a>publicado no diário oficial do município</span>

        <p><strong>"DISPÕE SOBRE A ABERTURA DE CRÉDITO EXTRAORDINÁRIO, EM CARÁTER EXCEPCIONAL, NOS TERMOS DO INCISO III DO ART. 41 DA LEI 4.320/64, AO ORÇAMENTO DE 2020 LEI 3417 DE 10/12/2019 E DÁ OUTRAS PROVIDÊNCIAS"</strong></p>

        <p><strong>MÁRCIO BIDÓIA, PREFEITO EM EXERCÍCIO NO MUNICÍPIO DE QUATÁ, ESTADO DE SÃO PAULO, NO USO DAS ATRIBUIÇÕES QUE LHE SÃO CONFERIDAS POR LEI.</strong></p>

        <p><strong>CONSIDERANDO</strong> que o município já adotou Medidas Emergenciais para o enfrentamento da pandemia no Decreto nº 4.101 de 21/03/2020, de Estado de Calamidade no Decreto nº 4.103 de 21/03/2010 e determinou Período de Quarentena através do Decreto nº 4.107 de 26/03/2020;</p>

        <p><strong>CONSIDERANDO</strong> que o município já adotou Medidas Emergenciais para o enfrentamento da pandemia no Decreto nº 4.101 de 21/03/2020, de Estado de Calamidade no Decreto nº 4.103 de 21/03/2010 e determinou Período de Quarentena através do Decreto nº 4.107 de 26/03/2020;</p>

        <p><strong>CONSIDERANDO</strong> que o Município foi contemplado com o repasse de recursos do Governo Federal, de acordo com a Portaria n.º 480 de 23 de março de 2020, do Ministério da Saúde;</p>

        <p><strong>CONSIDERANDO</strong> que não se tem tempo hábil para aguardar a tramitação de projeto de lei, necessitando em regime de urgência de abrir os créditos para efetivação das despesas de custeio das ações de saúde no enfrentamento do Coronavirus – Covid 19;</p>

        <p><strong>CONSIDERANDO finalmente</strong> que compete ao Poder Executivo, buscar uma forma de amenizar esses impactos na vida das pessoas e empresas da municipalidade;</p>

        <p><strong>DECRETA:</strong>

            <p><strong>Art. 1º</strong> – Fica aberto no orçamento-programa do exercício de 2020, de acordo com o inciso III do art. 41 da Lei 4.320/64 <strong>Crédito Adicional EXTRAORDINÁRIO</strong>, no valor de R$.28.012,00 (vinte e oito mil e doze reais), para criação da seguinte dotação orçamentária:</p>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="font-weight-bold"></th>
                        <th scope="col" class="font-weight-bold">(+)</th>
                        <th scope="col" class="font-weight-bold">CRÉDITO EXTRAORDINÁRIO</th>
                        <th scope="col" class="font-weight-bold">R$ (SAÚDE)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-weight-bold">.02</td>
                        <td class="font-weight-bold"></td>
                        <td class="font-weight-bold">PODER EXECUTIVO</td>
                        <td class="font-weight-bold"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">02.05</td>
                        <td class="font-weight-bold"></td>
                        <td class="font-weight-bold">SECRETARIA MUNICIPAL DE SAÚDE</td>
                        <td class="font-weight-bold"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold"></td>
                        <td class="font-weight-bold">02.05.03</td>
                        <td class="font-weight-bold">VIGILÂNCIA EM SAÚDE</td>
                        <td class="font-weight-bold"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold"></td>
                        <td class="font-weight-bold">.0035</td>
                        <td class="font-weight-bold">POLÍTICA DE ENFRENTAMENTO COVID 19</td>
                        <td class="font-weight-bold"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">10.305.0035.2094</td>
                        <td class="font-weight-bold"></td>
                        <td class="font-weight-bold">AUX.  ENFRENTAMENTO EPIDEMIA COVID 19</td>
                        <td class="font-weight-bold"></td>
                    </tr>
                    <tr>
                        <td>(583) 3.3.90.30.00</td>
                        <td>F: 05</td>
                        <td>Material de Consumo (Cód. Aplic. 312)</td>
                        <td>28.012,00</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>__________</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>TOTAL DO CRÉDITO ABERTO</td>
                        <td>28.012,00</td>
                    </tr>
                </tbody>
            </table>

            <p><strong>Art. 2º</strong> – Para cobertura do Crédito EXTRAORDINÁRIO aberto pelo artigo anterior, serão utilizados recursos provenientes de EXCESSO DE ARRECADAÇÃO, conforme disposto no inciso II do § 1º, c.c. º 3º do artigo 43, da Lei Federal nº 4.320, de 17 de março de 1.964, por conta de recursos advindos do Governo Federal, Portaria n.º 480 de 23 de março de 2020, do Ministério da Saúde, no valor de R$.28.012,00 (vinte e oito mil e doze reais), assim discriminado.</p>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="font-weight-bold"></th>
                        <th scope="col" class="font-weight-bold">Fonte de recurso</th>
                        <th scope="col" class="font-weight-bold">Valor R$ </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-weight-bold">Excesso de arrecadação</td>
                        <td class="font-weight-bold">05</td>
                        <td class="font-weight-bold">28.012,00</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">1.000.00.00 – RECEITAS CORRENTES</td>
                        <td class="font-weight-bold"></td>
                        <td class="font-weight-bold"></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">1.700.00 – TRANSFERÊNCIAS CORRENTES</td>
                        <td class="font-weight-bold"></td>
                        <td class="font-weight-bold"></td>
                    </tr>
                    <tr>
                        <td>1.718.00.00 – TRANSFERÊNCIAS DA UNIÃO</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1.718.03.31.04 (.....) – Auxílio p/ enfrentam. da Epidemia Covid-19</td>
                        <td></td>
                        <td>28.012,00</td>
                    </tr>
                </tbody>
            </table>

            <p><strong>Art. 3º</strong> – Este Decreto entrará em vigor na data de sua publicação, revogadas as disposições em contrário. </p>

            <h2 class='inside-header'>Fontes</h2>
            <ul>
                <li>PREFEITURA MUNICIPAL DE QUATÁ. <em>Diário Oficial do Município</em>. Data da publicação: 09 de abril de 2020. Disponível em: <a href="https://dosp.com.br/exibe_do.php?i=MTAzNzg5">https://dosp.com.br/exibe_do.php?i=MTAzNzg5</a></li>
            </ul>
    </div>

    <?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>