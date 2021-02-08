<?php
    function uploadFile($currentDirectory){


        $errors = []; // Store errors here

        $fileExtensionsAllowed = ['doc', 'csv', 'txt', 'ppt', 'odt', 'pdf', 'exe', 'svg', 'jpeg','jpg','png', 'mp3', 'mp4']; // These will be the only file extensions allowed

        $fileName = $_FILES['the_file']['name'];
        $fileSize = $_FILES['the_file']['size'];
        $fileTmpName = $_FILES['the_file']['tmp_name'];
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
                header("location: ./Views/showError.php");
            }
        } else {
            foreach ($errors as $error) {
                header("location: ./Views/showError.php?error1=$error");
            }
        }

        }
    };

    uploadFile($_POST['currentFolder']);
?>