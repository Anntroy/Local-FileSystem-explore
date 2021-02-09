<?php
class folderToShow {
    public $name;
    public $path;
    public $content;

    function  __construct() {
        $initialPathName = 'Home';
        $initialPath = $initialPathName;
        if (isset($_GET['path']) && $_GET['path']!= '..') {
            $pathToShow = $_GET['path'];
            $pathName = $_GET['path'];
        } elseif (isset($_GET['pathToRename'])) {
            $pathToShow = $_GET['pathToRename'];
            $pathName = $_GET['pathToRename'];
        }elseif (isset($_GET['pathToDelete'])) {
            $pathToShow = $_GET['pathToDelete'];
            $pathName = $_GET['pathToDelete'];
        }elseif (isset($_GET['pathToCreate'])) {
            $pathToShow = $_GET['pathToCreate'];
            $pathName = $_GET['pathToCreate'];
        }else {
            $pathToShow = $initialPath;
            $pathName = $initialPathName;
        }
        $this->path = $pathToShow;
        $this->name =  basename($pathName);
    }

    function get_content() {
        if (is_dir($this->path)) {
            $d = dir($this->path);
            while (false !== ($entry = $d->read())) {
                if ($entry != "." && $entry != "..") {
                    if (is_dir($this->path.'/'.$entry)) {
                        $this->content[] = new folder ($entry, $this->path);
                    } else {
                        $this->content[] = new file ($entry, $this->path);
                    }
                };
                }
            $d->close();
            return $this->content;
        } else {
            // open modal with the file information
        }
    }
}

class folder {
    public $name;
    public $path;
    public $size;
    public $createdDate;
    public $modificatedDate;
    public $extension;
    public $icon;

    function  __construct($name, $path) {
        $this->name = $name;
        $this->path = $path;
        $createdDate = date("d/m/Y H:i:s.", filectime($this->path.'/'. $this->name));
        $this->createdDate = $createdDate;
        $modificatedDate = date("d/m/Y H:i:s.", filemtime($this->path.'/'.$this->name));
        $this->modificatedDate = $modificatedDate;
        $mysize = filesize($this->path.'/'.$this->name);
            if ($mysize<1000000) {
                $mysize = $mysize/1000 . "kB";
            } elseif ($mysize>1000000) {
                $mysize = $mysize/1000000 . "MB";
            };
        $this->size = $mysize;
        $extension = "folder";
        $this->extension = $extension;
        $this->icon = '<i class="far fa-folder"></i>';
    }
}

class file {
    public $name;
    public $path;
    public $size;
    public $createdDate;
    public $modificatedDate;
    public $extension;
    public $icon;

    function  __construct($name, $path) {
        $this->name = $name;
        $this->path = $path;
        $createdDate = date("d/m/Y H:i:s.", filectime($this->path.'/'. $this->name));
        $this->createdDate = $createdDate;
        $modificatedDate = date("d/m/Y H:i:s.", filemtime($this->path.'/'.$this->name));
        $this->modificatedDate = $modificatedDate;
        $mysize = filesize($this->path.'/'.$this->name);
            if ($mysize<1000000) {
                $mysize = $mysize/1000 . "kB";
            } elseif ($mysize>1000000) {
                $mysize = $mysize/1000000 . "MB";
            };
        $this->size = $mysize;
        $extension = pathinfo($this->name, PATHINFO_EXTENSION);
        $this->extension = $extension;
        switch ($this->extension) {
            case 'doc':
                $this->icon = '<i class="far fa-file-word"></i>';
                break;
            case 'csv':
                $this->icon = '<i class="far fa-file-excel"></i>';
                break;
            case 'jpg':
                $this->icon = '<i class="far fa-file-image"></i>';
                break;
            case 'png':
                $this->icon = '<i class="far fa-file-image"></i>';
                break;
            case 'txt':
                $this->icon = '<i class="fa fa-file-o"></i>';
                break;
            case 'ppt':
                $this->icon = '<i class="far fa-file-powerpoint"></i>';
                break;
            case 'odt':
                # code...
                break;
            case 'pdf':
                $this->icon = '<i class="far fa-file-pdf"></i>';
                break;
            case 'zip':
                $this->icon = '<i class="far fa-file-archive"></i>';
                break;
            case 'rar':
                $this->icon = '<i class="far fa-file-archive"></i>';
                break;
            case 'exe':
                $this->icon = '<i class="far fa-file-excel"></i>';
                break;
            case 'svg':
                # code...
                break;
            case 'mp3':
                $this->icon = '<i class="far fa-file-audio"></i>';
                break;
            case 'mp4':
                $this->icon = '<i class="far fa-file-video"></i>';
                break;
            default:
                # code...
                break;
        }
    }
}

class newFolder {
    public $name;
    public $path;

    function  __construct($name, $path) {
        $this->name = $name;
        $this->path = $path;
        mkdir ($path.$name, 0777);
    }
}

if (isset($_GET['newFolderName'])) {
    $newFolder = new newFolder ($_GET['newFolderName'], $_GET['pathToCreate']);
};
if (isset($_GET['new']) && $_GET['new'] == true) {
    $createNewFolder = true;
} else {
    $createNewFolder = false;
}

if (isset($_GET['pathToRename']) && isset($_GET['fileToRename']) && isset($_GET['rename'])) {
    $rename = true;
    $pathToRename = $_GET['pathToRename'];
    $fileToRename = $_GET['fileToRename'];
} else {
    $rename = false;
    $pathToRename = '';
    $fileToRename = '';
}

if (isset($_GET['newName'])) {
    $oldName = $_GET['pathToRename'].$_GET['oldName'];
    $newName = $_GET['pathToRename'].$_GET['newName'];
    rename($oldName, $newName);
}

if (isset($_GET['pathToDelete']) && isset($_GET['folderToDelete']) && isset($_GET['delete'])) {
    echo (count(scandir($_GET['pathToDelete'].'/'.$_GET['folderToDelete'])));
    if(count(scandir($_GET['pathToDelete'].'/'.$_GET['folderToDelete']))==2){
        rmdir($_GET['pathToDelete'].'/'.$_GET['folderToDelete']);
    }
}
/* When you call the folder model
is going to be create the new object, folderToShow,  */
$folderShowed = new FolderToShow ();
$folderContent = $folderShowed->get_content();

?>