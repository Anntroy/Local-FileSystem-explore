<?php
    $root = "/opt/lampp/htdocs/Local-FileSystem-explore/Home/";
    $dir = $root;
    function obteinDirectoryStructure($path){
        if (is_dir($path)){
            $manager = opendir($path);
            echo "<ul>";

            while (($file = readdir($manager)) !== false)  {

            $full_path = $path . "/" . $file;

                if ($file != "." && $file != "..") {
                    if (is_dir($full_path)) {
                        echo '<li class="aside__list-item"><a href="../Controllers/openFolder.php?path='.$full_path.'"><i class="far fa-folder"></i><span class="aside__list-text">' . $file . '</span></a></li>';
                        obteinDirectoryStructure($full_path);
                    } else {
                        echo '<li class="aside__list-item"><a href="../Controllers/openFolder.php?path='.$full_path.'"><i class="fa fa-file-o"></i><span class="aside__list-text">'. $file . '</span></a></li>';
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
