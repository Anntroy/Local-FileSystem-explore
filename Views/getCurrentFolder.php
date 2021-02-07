<?php
        $currentFile = $_GET['filePath'];
        $currentFolder = $_GET['folderPath'];
        $mainPath = $_GET['path'];
        $p = strpos($currentFolder, 'Home/');
        $showCurrentFolder = substr($currentFolder, $p + 5);
        echo "Current path: " .$showCurrentFolder. "<br>";
        echo "Main path: " .$mainPath;
?>