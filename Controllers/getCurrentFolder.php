<?php
    session_start();
    function getCurrentFolder($folder){
        $newFolderName = $_GET['newFolder'];
        echo $newFolderName. "<br>";
        if (isset($folder)) {
            $newFolder = $folder."/".$_GET['newFolder'];
            echo $newFolder ."<br>";
            $mkdir = mkdir($newFolder, 0777, true);
            var_dump($mkdir);
        } else {
            $folder = "Home/";
            echo $folder;
        }
    };
?>
