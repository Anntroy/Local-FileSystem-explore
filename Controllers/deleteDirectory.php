<?php
        // $folder = $_POST['currentFolder'];
    function is_dir_empty($dir) {
        if (!is_readable($dir)) return NULL;
        return (count(scandir($dir)) == 2);
    };

    function deleteDirectory($path){

        $it = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS);
        echo "<br>";
        $files = new RecursiveIteratorIterator($it,
                RecursiveIteratorIterator::CHILD_FIRST);

        foreach($files as $file) {
            if ($file->isDir()){
                if (is_dir_empty($file)) {
                    echo "the folder is empty";
                    rmdir($file->getRealPath());
                }else{
                    echo "the folder is NOT empty". $file;
                    deleteDirectory($file);
                }
            } else {
                unlink($file->getRealPath());
            }
        }
        $rmdir = rmdir($path);
        var_dump($rmdir);
    };

    deleteDirectory($_POST['currentFolder']);

    // header("location: ../index.php");
?>