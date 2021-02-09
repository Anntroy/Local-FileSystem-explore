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
        echo '<article>
                    <form class="modal__form" action="uploadFile.php" method="post" enctype="multipart/form-data">
                        <div class="modal__form-div"><h2 class="modal__form-div-h2">Upload file</h2><hr><div>
                        <label for="file-upload" class="custom-file-upload">
                            <i class="fas fa-file-upload"></i>  <span>Click to choose a file</span>
                        </label>
                            <input id="file-upload" type="file"/>
                            <input type="hidden" name="currentFolder" value="'.$currentFolder.'">
                            <input type="submit" name="submit" class="btn" value="Start Upload" formaction="../uploadFile.php">
                        </div>
                    </form>
                </article>';
    ?>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>