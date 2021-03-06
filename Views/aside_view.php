<?php
    $root = "Home";
    $dir = $root;
    function obteinDirectoryStructure($path){
        $fileExtensionsAllowed = ['jpeg','jpg','png', 'mp3', 'mp4'];
        if (is_dir($path)){
            $manager = opendir($path);
            echo "<ul class='aside_ul'>";

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
                        $fileName = strtolower(end(explode('/',$full_path)));
                        $fileExtension = strtolower(end(explode('.',$fileName)));
                        if (in_array($fileExtension,$fileExtensionsAllowed)) {
                            echo '<li class="aside__list-item"><a href="./'.$full_path.'" target="image"><i class="fa fa-file-o"></i><span class="aside__list-text">'. $file . '</span></a></li>';
                        }
                        else {
                            echo '<li class="aside__list-item"><a href=""><i class="fa fa-file-o"></i><span class="aside__list-text">'. $file . '</span></a></li>';
                        }
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