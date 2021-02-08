<?php
echo '<nav class="nav nav-container">
<ul class="nav-list nav-list-navegation">
    <li class="nav-item"><a href="index.php?path='.$folderShowed->path.'"><i class="fas fa-hdd"></i>'.$folderShowed->name.'</a></li>
    <li class="nav-item"><a href="index.php?path='.dirname($folderShowed->path).'"><i class="fas fa-reply"></i></a></li>
</ul>
<ul class="nav-list nav-list-funcionality">
    <li class="nav-item"><a class="rename"><i class="fas fa-edit"></i>Rename</a></li>
    <li class="nav-item"><a href="index.php?path='.$folderShowed->path.'&new=true">new folder</a></li>
    <li class="nav-item"><a href=""><i class="fas fa-file-upload"></i></a></li>
    <li class="nav-item"><form action="uploadFile.php" method="post" enctype="multipart/form-data">
                            <label for="file-upload" class="custom-file-upload">
                                <i class="fas fa-file-upload"></i> Custom Upload
                            </label>
                            <input id="file-upload" type="file"/>
                            <input type="hidden" name="currentFolder" value="'.$currentFolder.'">
                            <input type="submit" name="submit" value="Start Upload">
                        </form></li>
    <li class="nav-item"><a href=""><i class="fas fa-trash-alt"></i></a></li>
    <li class="nav-item">Search</li>
</ul>
</nav>';
?>