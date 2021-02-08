<?php
    // if (isset($_GET['path'])) {
    //     //echo $_GET['path'];
    //     $pathToShow = $initialPath.'/'.$_GET['path'];
    //     $pathName = $initialPathName.'/'.$_GET['path'];

    // } else {
    //     $pathToShow = $initialPath;
    //     $pathName = $initialPathName;
    // }
        $currentFile = $_GET['filePath'];
        $currentFolder = $_GET['folderPath'];
        $mainPath = $_GET['path'];
        $p = strpos($currentFolder, 'Home/');
        $showCurrentFolder = substr($currentFolder, $p + 5);
        echo "Current path: " .$showCurrentFolder. "<br>";
        echo "Main path: " .$mainPath;
?>