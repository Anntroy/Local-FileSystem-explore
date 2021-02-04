<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local FileSystem explorer</title>
    <link rel="stylesheet" href="Css/normalize.css">
    <link rel="stylesheet" href="Css/mainViewArea.css">
</head>
<body>
    <h1>Hello</h1>
    <main class="wrapper">
        <ul class="item-list item-list-header">
            <li class="item-prop item-prop-header">Name</li>
            <li class="item-prop item-prop-header">Type</li>
            <li class="item-prop item-prop-header">Size</li>
            <li class="item-prop item-prop-header">Created Date</li>
            <li class="item-prop item-prop-header">Modificated</li>
        </ul>
        <?php
            include("Views/mainArea.php")
        ?>
    </main>
</body>
</html>
