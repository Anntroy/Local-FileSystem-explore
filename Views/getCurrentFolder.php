<?php
    // if (isset($_GET['path'])) {
    //     //echo $_GET['path'];
    //     $pathToShow = $initialPath.'/'.$_GET['path'];
    //     $pathName = $initialPathName.'/'.$_GET['path'];

    // } else {
    //     $pathToShow = $initialPath;
    //     $pathName = $initialPathName;
    // }
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
?>