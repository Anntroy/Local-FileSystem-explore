<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="../Css/modal.css">
</head>
<body>
    <?php
        echo '<article><form class="modal__form"><div class="modal__form-div"><h2 class="modal__form-div-h2 error">Error</h2><hr><div><label class="modal__form-div-label error"><b>An error occurred. This file extension is not allowed.</b></label></div></div></form></article>';
        header('Refresh:3; url=../index.php');
    ?>
</body>
</html>