<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local FileSystem explorer</title>
    <link rel="stylesheet" href="Css/normalize.css">
    <link rel="stylesheet" href="Css/aside.css">
    <link rel="stylesheet" href="Css/mainViewArea.css">
</head>
<?php
    //Llamada al modelo
    require('Models/folder_model.php');
    ?>
<aside class="aside">
    <?php include("Views/getCurrentFolder.php"); ?>
    <br><!-- 
    <?php include("Views/createDirectoryForm.php"); ?> -->
    <br>
    <!-- <?php include("Views/renameDirectoryForm.php"); ?> -->
    <br>
    <!-- <?php include("Views/deleteDirectoryForm.php"); ?> -->
    <br>
    <br>
    <details open>
        <summary class="aside__summary">
            <i class="fas fa-home fa-lg"></i><span class="aside__summary-text">Home</span>
        </summary>
        <?php include("Views/aside_view.php"); ?>
    </details>
</aside>
<body>
    <main class="wrapper">
        <?php
    //Llamada al modelo
    //require('Models/folder_model.php');

    //Llamada a la vista
    require("Views/main_view.php");
    ?>
    </main>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>
