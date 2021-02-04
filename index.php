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
<aside class="aside">
    <details open>
        <summary class="aside__summary">
            <i class="fas fa-home fa-lg"></i><span class="aside__summary-text">Home</span>
        </summary>
        <?php include("Views/aside.php"); ?>
    </details>
</aside>
<body>
    <main class="wrapper">
        <ul class="item-list item-list-header">
            <li class="item-prop item-prop-header">Name</li>
            <li class="item-prop item-prop-header">Type</li>
            <li class="item-prop item-prop-header">Size</li>
            <li class="item-prop item-prop-header">Created Date</li>
            <li class="item-prop item-prop-header">Modificated</li>
        </ul>
        <?php
            include("Views/mainArea.php");
        ?>
    </main>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>
