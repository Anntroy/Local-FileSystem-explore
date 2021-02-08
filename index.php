<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local FileSystem explorer</title>
    <link rel="stylesheet" href="Css/normalize.css">
    <link rel="stylesheet" href="Css/aside.css">
    <link rel="stylesheet" href="Css/mainViewArea.css">
    <link rel="stylesheet" href="Css/navBar.css">
    <link rel="stylesheet" href="Css/main.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<?php
    //Llamada al modelo
    require('Models/folder_model.php');
    ?>
<body>
<aside class="aside">
    <?php include("Views/getCurrentFolder.php"); ?>
    <details open>
        <summary class="aside__summary">
            <i class="fas fa-home fa-lg"></i><span class="aside__summary-text">Home</span>
        </summary>
        <?php include("Views/aside_view.php"); ?>
    </details>
</aside>
<main>
    <nav class="nav nav-container">
    <?php
    //Llamada a la vistas
            include("Views/nav_view.php")
        ?>
    </nav>
    <section class="wrapper">
        <?php
    //Llamada a la vista
    require("Views/main_view.php");
    ?>
    </section>
</main>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="JS/folderFunctions.js"></script>
</body>
</html>
