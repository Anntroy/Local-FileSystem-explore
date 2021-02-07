<?php
    function renameDirectory(){
        $renamedFolder = $_POST['renamedFolder'];
        $folder = $_POST['currentFolder'];
        echo $renamedFolder. "<br>";
        $position = strrpos($folder, "/");
        $folderDirectory = substr($folder, 0, $position);
        echo $folderDirectory. "<br>";
        $rename = rename($folder, $folderDirectory.'/'.$renamedFolder);
        var_dump($rename);
    };
    renameDirectory();
    header("location: ../index.php");
?>