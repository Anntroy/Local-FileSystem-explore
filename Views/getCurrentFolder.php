<?php
    if (isset($_GET['filePath'])) {
        $currentFile = $_GET['filePath'];
        $mainPath = $_GET['path'];
        $p = strpos($currentFolder, 'Home/');
        $showCurrentFolder = substr($currentFolder, $p + 5);
        echo "Current path: " .$showCurrentFolder. "<br>";
        echo "Main path: " .$mainPath;
    }
    if (isset($_GET['folderPath'])) {
        $currentFolder = $_GET['folderPath'];
        $mainPath = $_GET['path'];
        $p = strpos($currentFolder, 'Home/');
        $showCurrentFolder = substr($currentFolder, $p + 5);
        echo "Current path: " .$showCurrentFolder. "<br>";
        echo "Main path: " .$mainPath;
    }
    else {
        $currentFolder = "Home";
    }
?>