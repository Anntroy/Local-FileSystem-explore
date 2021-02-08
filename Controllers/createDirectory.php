<?php
    function createDirectory(){
        $newFolderName = $_POST['newFolder'];
        $folder = $_POST['currentFolder'];
        echo $newFolderName. "<br>";
        if (isset($folder)) {
            $newFolder = $folder."/".$newFolderName;
            echo $newFolder ."<br>";
            $mkdir = mkdir($newFolder, 0777, true);
            var_dump($mkdir);
        } else {
            $folder = "Home/";
            echo $folder;
        }
    };
    createDirectory();
?>
