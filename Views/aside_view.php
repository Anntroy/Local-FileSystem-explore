<?php
    $root = "Home";
    $dir = $root;
    function obteinDirectoryStructure($path){
        if (is_dir($path)){
            $manager = opendir($path);
            echo "<ul>";

            while (($file = readdir($manager)) !== false)  {

            $full_path = $path . "/" . $file;

            if ($file != "." && $file != "..") {
                $pos = strpos($full_path, '//');
                $short_path = substr($full_path, $pos + 2);
                    $pathArray = explode("/", $full_path);
                    $pathArrayLength = count($pathArray)-1;
                    if (is_dir($full_path)) {
                        echo '<li class="aside__list-item"><a href="index.php?folderPath='.$full_path.'&path='.$full_path.'"><i class="far fa-folder"></i><span class="aside__list-text">' . $file . '</span></a></li>';
                        obteinDirectoryStructure($full_path);
                    } else {
                        echo '<li class="aside__list-item"><a href="index.php?filePath='.$full_path.'"><i class="fa fa-file-o"></i><span class="aside__list-text">'. $file . '</span></a></li>';
                    }
                }
            }

            closedir($manager);
            echo "</ul>";
        } else {
            echo "This is not a valid path<br/>";
        }
    }
    obteinDirectoryStructure($dir);
?>