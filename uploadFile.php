<?php
    function uploadFile($currentDirectory){


        $errors = []; // Store errors here

        $fileExtensionsAllowed = ['doc', 'csv', 'txt', 'ppt', 'odt', 'pdf', 'exe', 'svg', 'jpeg','jpg','png', 'mp3', 'mp4']; // These will be the only file extensions allowed

        $fileName = $_FILES['the_file']['name'];
        $fileSize = $_FILES['the_file']['size'];
        $fileTmpName = $_FILES['the_file']['tmp_name'];
        echo $fileTmpName;
        $fileType = $_FILES['the_file']['type'];
        $fileExtension = strtolower(end(explode('.',$fileName)));

        $uploadPath = $currentDirectory .'/'. basename($fileName);

        if (isset($_POST['submit'])) {

            if (! in_array($fileExtension,$fileExtensionsAllowed)) {
                $errors[] = "This file extension is not allowed.";
            }
            if ($fileSize > 40000000) {
                $errors[] = "File exceeds maximum size (4MB)";
            }
            if (empty($errors)) {

            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
            var_dump($didUpload);


            if ($didUpload) {
                header("location: ./index.php");
            } else {
                header('Refresh:10; url=index.php');
                echo "<article><form class='modal__form'><div class='modal__form-div'><h2 class='modal__form-div-h2 error'>Error</h2><hr><div><label class='modal__form-div-label error'><b>An error occurred. Please contact the administrator!</b></label></div></div></form></article>";
                // echo "<script> alert('An error occurred. Please contact the administrator.'); </script>";
                // header("location: ./index.php");
            }
        } else {
            foreach ($errors as $error) {
                header('Refresh:10; url=index.php');
                echo "<article><form class='modal__form'><div class='modal__form-div'><h2 class='modal__form-div-h2 error'>Error</h2><hr><div><label class='modal__form-div-label error'><b>'".$error."'</b></label></div></div></form></article>";
                // echo "<script> alert('".$error."'); </script>";
                // header("location: ./index.php");
            }
        }

        }
    };

    uploadFile($_POST['currentFolder']);
?>