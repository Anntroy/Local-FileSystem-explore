<?php
class folderToShow {
    public $name;
    public $path;
    public $content;

    function  __construct() {
        $initialPathName = 'Home';
        $initialPath = $initialPathName;
        if (isset($_GET['path']) && $_GET['path']!= '..') {
            echo $_GET['path'];
            $pathToShow = $_GET['path'];
            $pathName = $_GET['path'];
        } else {
            $pathToShow = $initialPath;
            $pathName = $initialPathName;
        }
        $this->path = $pathToShow;
        echo ($pathToShow);
        $this->name =  basename($pathName);
    }

    function get_content() {
        if (is_dir($this->path)) {
            echo 'is a dir';
            $d = dir($this->path);
            while (false !== ($entry = $d->read())) {
                if ($entry != "." && $entry != "..") {
                    $this->content[] = new folder ($entry, $this->path);
                };
                }
            $d->close();
            echo 'foldercontent: ';
            print_r ($this->content);
            return $this->content;
        } else {
            echo 'is a file';
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
    }
}

class file {
    public $name;
    public $path;
    public $size;
    public $createdDate;
    public $modificatedDate;
    public $extension;

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
    }
}

class newFolder {
    public $name;
    public $path;

    function  __construct($name, $path) {
        $this->name = $name;
        $this->path = $path;
        echo 'new folder name: '. ($name);
        echo  'new folder path: '.($path).($name);
        mkdir ($path.$name, 0777);
    }
}

if (isset($_GET['newFolderName'])) {
    echo ($_GET['newFolderName']);
    echo 'im going to create in: '.($_GET['pathToCreate']);
    $newFolder = new newFolder ($_GET['newFolderName'], $_GET['pathToCreate']);
};
if (isset($_GET['new']) && $_GET['new'] == true) {
    $createNewFolder = true;
    echo 'get new is: '.$_GET['new'];
} else {
    $createNewFolder = false;
}

if (isset($_GET['pathToRename']) && isset($_GET['rename'])) {
    $rename = true;
    $pathToRename = $_GET['pathToRename'];
    echo 'you are going to renam: '.$_GET['pathToRename'];
} else {
    echo 'you are not to rename';
    $rename = false;
    $pathToRename = '';
}

if (isset($_GET['newName'])) {
    echo 'old path: ' . $_GET['oldName'];
    echo 'new path: ' . $_GET['newName'];
    $oldName = $_GET['pathToRename'].$_GET['oldName'];
    $newName = $_GET['pathToRename'].$_GET['newName'];
    rename($oldName, $newName);
}

/* When you call the folder model
is going to be create the new object, folderToShow,  */
$folderShowed = new FolderToShow ();
$folderContent = $folderShowed->get_content();

echo $folderShowed->name;
print_r ($folderContent);

?>