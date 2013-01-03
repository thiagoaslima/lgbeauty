<?php
$page = $_SERVER['REQUEST_URI'];

switch ($page) {

    case '/servicos.php':
        $id = 'id="servicos"';
        $home_link = '<a href="index.php"><img src="i/logo_v.png" alt=""></a>';
        break;
    
    default:
        $id = 'id="home"';
        $home_link = '<img src="i/logo_v.png" alt="">';
        break;
}

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php echo $id; ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php echo $id; ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php echo $id; ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php echo $id; ?> class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>salão LG beauty</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- <link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'> -->
        <link rel="stylesheet" href="css/main3.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body><div id="wrapper">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <header>
        <div class="content">
            <figure>
                <?php echo $home_link; ?>
                <h1>LG beauty</h1>
            </figure>

            <nav>
                <ul>
                    <li>
                        <span></span>
                        <a href="servicos.php">Serviços</a>
                    </li>
                    <li>
                        <span></span>
                        <a href="equipe.php">Equipe</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="bg">
        <div id="halftone"></div>
    </div>