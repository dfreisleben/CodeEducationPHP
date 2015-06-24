
<?php
//$path = str_replace("/","", $rota['path']);

function rotas()
{
    $rota = ltrim(parse_url(filter_input(INPUT_SERVER, 'REQUEST_URI'), PHP_URL_PATH), "/");

    if($rota == "")
    {
        $rota = "index";
    }
    return $rota;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Code Education</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <link href="css/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body role="document">

<?php require_once('menu.php'); ?>

<div class="container theme-showcase" role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">

<?php

//  echo "<h1>Code Education</h1>";
//echo "<p>Esse é um site de estudo das aulas que estou realizando na Code Education.</p>";

$rotas = array('index','empresa','produtos','servicos','contato');

if (!in_array(rotas(), $rotas) or !file_exists(rotas().".php"))
{
    http_response_code(404);
    echo " ERRO 404 ";
}
else
{
    require_once(rotas().".php");
}

 ?>
</div>

</div> <!-- /container -->

<footer class="footer">
    <div class="container">
        <p class="text-muted">Todos os direitos reservados - <?php echo date("Y");?></p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>