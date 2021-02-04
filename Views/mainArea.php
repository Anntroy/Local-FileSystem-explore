<?php
$initialPathName = 'home';
$initialPath = '.\\'.$initialPathName;
if (isset($_GET['path'])) {
    //echo $_GET['path'];
    $pathToShow = $initialPath.'\\'.$_GET['path'];
    $pathName = $initialPathName.'\\'.$_GET['path'];
} else {
    $pathToShow = $initialPath;
    $pathName = $initialPathName;
}

if (is_dir($pathToShow)) {
    //openDirectory();
    $handlePath = opendir($pathToShow);
    $d = dir($pathToShow);
    //echo '<li class="nav-header"><i class="icon icon-folder"></i>'.$pathName.'</li>';
    while (false !== ($entry = $d->read())) {
        if ($entry != "." && $entry != "..") {
            $extension = pathinfo($entry, PATHINFO_EXTENSION);
            switch ($extension) {
                case 'doc':
                    $iconType = 'fa fa-file-o';
                    break;
                case 'csv':
                        # code...
                    break;
                case 'jpg':
                    # code...
                    break;
                case 'png':
                    # code...
                    break;
                case 'txt':
                    $iconType = 'fa fa-file-o';
                    break;
                case 'ppt':
                    # code...
                    break;
                case 'odt':
                    # code...
                    break;
                case 'pdf':
                        # code...
                    break;
                case 'zip':
                    # code...
                    break;
                case 'rar':
                    # code...
                    break;
                case 'exe':
                        # code...
                    break;
                case 'svg':
                    # code...
                    break;
                case 'mp3':
                    # code...
                    break;
                case 'mp4':
                        # code...
                    break;
                default:
                    # code...
                    break;
            }
            $size = filesize($pathToShow.'\\'.$entry);
            if ($size<1000000) {
                $size = $size/1000 . "kB";
            } elseif ($size>1000000) {
                $size = $size/1000000 . "MB";
            };
            $createdDate = date("d/m/Y H:i:s.", filectime($pathToShow.'\\'.$entry));
            $modificatedDate = date("d/m/Y H:i:s.", filemtime($pathToShow.'\\'.$entry));
            echo '<ul class="item-list item-list-element">
            <li class="item-prop item-prop-cont item-prop-name"><i class="'.$iconType .'" aria-hidden="false"></i><a href="index.php?path='.$entry.'">'.$entry.'</a></li>
            <li class="item-prop item-prop-cont">'.$extension.'</li>
            <li class="item-prop item-prop-cont">'.$size.'</li>
            <li class="item-prop item-prop-cont">'.$createdDate.'</li>
            <li class="item-prop item-prop-cont">'.$modificatedDate.'</li>
        </ul>';
            //echo '<ul class="item-list"><i class="icon icon-folder"></i>'.$pathName.'</ul>'
            //echo '<li class="nav-item"><i class="'.$iconType .'" aria-hidden="false"></i><a href="index.php?path='.$entry.'">'.$entry.'</a></li>';
        }
    }
    $d->close();
} else {
    echo "this is a file";
}