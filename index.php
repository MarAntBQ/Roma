<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title id="tittle">Roma Tarot</title>
    <?php 

    include ("includes/head-setup.php");

    ?>

</head>

<body>
    <header>
        <?php
        include 'includes/header.php';
        ?>
    </header>
    <main>

        <?php

        if (isset($_GET["path"])){

          if($_GET["path"]=="home"||
          $_GET["path"]=="about"||
          $_GET["path"]=="services"||
          $_GET["path"]=="contact"||
          $_GET["path"]=="news"||
          $_GET["path"]=="store"||
          $_GET["path"]=="work-with-us"
          ){

            include "pages/".$_GET["path"].".php";

          }else {

            include "pages/404.php"; 

          }  

        }else{

          include "pages/home.php";

        } 

        ?>
    </main>
    <footer>
        <?php
        include 'includes/footer.php';
        ?>
    </footer>
</body>

</html>
