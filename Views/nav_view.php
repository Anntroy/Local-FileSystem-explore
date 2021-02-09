<?php
echo '<nav class="nav nav-container">
<ul class="nav-list nav-list-navegation">
    <li class="nav-item"><a href="index.php?path='.$folderShowed->path.'"><i class="fas fa-hdd"></i>'.$folderShowed->name.'</a></li>';
    if (dirname($folderShowed->path)!='.') {
        echo '<li class="nav-item"><a href="index.php?path='.dirname($folderShowed->path).'"><i class="fas fa-reply"></i></a></li>';
    } else {
        echo '<li class="nav-item"><a href="index.php?path=Home"><i class="fas fa-reply"></i></a></li>';

    }
echo '</ul>
<ul class="nav-list nav-list-funcionality">
    <li class="nav-item"><a class="rename"><i class="fas fa-edit"></i>Rename</a></li>
    <li class="nav-item"><a href="index.php?path='.$folderShowed->path.'&new=true" title="Add folder"><i class="fas fa-folder-plus"></i></a></li>
    <li class="nav-item"><a href="./uploadForm.php" title="Upload file"><i class="fas fa-file-upload"></i></a></li>
    <li class="nav-item"><a class="delete" title="Delete folder"><i class="fas fa-trash-alt"></i></a></li>
    <li class="nav-item"><i class="fas fa-search"></i></li>
</ul>
</nav>';
?>
