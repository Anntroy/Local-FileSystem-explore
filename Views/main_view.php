<?php
/* echo '$folderShowed->path: '.$folderShowed->path.'<br>';
echo '$rename '. $rename.'<br>';
echo 'folderShoewd: ';
print_r ($folderShowed).'<br>';
echo 'Foldercontent: ';
print_r ($folderContent).'<br>'; */
echo '
<ul class="item-list item-list-header">
    <li class="item-prop item-prop-header">Name</li>
    <li class="item-prop item-prop-header">Type</li>
    <li class="item-prop item-prop-header">Size</li>
    <li class="item-prop item-prop-header">Created Date</li>
    <li class="item-prop item-prop-header">Modificated</li>
</ul>';
if (is_dir($folderShowed->path) && $folderContent!= null && $rename == false) {
    foreach ($folderContent as $folder) {
        if (is_dir($folder->path.'/'.$folder->name)) {
            echo '<ul class="item-list item-list-element" data-path="'.$folder->path.'" data-name="'.$folder->name.'">
            <li class="item-prop item-prop-cont item-prop-name">'.$folder->icon.'<a href="index.php?path='.$folder->path.'/'.$folder->name.'">'.$folder->name.'</a></li>
            <li class="item-prop item-prop-cont">'.$folder->extension.'</li>
            <li class="item-prop item-prop-cont">'.$folder->size.'</li>
            <li class="item-prop item-prop-cont">'.$folder->createdDate.'</li>
            <li class="item-prop item-prop-cont">'.$folder->modificatedDate.'</li>
        </ul>';
        }
     else {
            echo '<ul class="item-list item-list-element" data-path="'.$folder->path.'"  data-name="'.$folder->name.'">
            <li class="item-prop item-prop-cont item-prop-name">'.$folder->icon.'<a href="index.php?path="'.$folder->path.'">'.$folder->name.'</a></li>
            <li class="item-prop item-prop-cont">'.$folder->extension.'</li>
            <li class="item-prop item-prop-cont">'.$folder->size.'</li>
            <li class="item-prop item-prop-cont">'.$folder->createdDate.'</li>
            <li class="item-prop item-prop-cont">'.$folder->modificatedDate.'</li>
        </ul>';
        } 
    }
} elseif (is_dir($folderShowed->path) && $folderContent!= null && $rename == true) {
    foreach ($folderContent as $folder) {
        if ($folder->name == $fileToRename) {
            echo '<ul class="item-list item-list-renameElement">
                    <form action="index.php" method="get">
                        <input type="hidden" name="pathToRename" value='.$folder->path.'/>
                        <input type="hidden" name="oldName" value='.$folder->name.'>
                        <li class="item-prop item-prop-cont item-prop-name input-container">'.$folder->icon.'<input class="input input-newFolderName" type="text" name="newName" id="newName" placeholder='.$folder->name.' autofocus></li>
                    </form>
                </ul>';
        } else {
            echo '<ul class="item-list item-list-element" data-path="'.$folder->path.'">
            <li class="item-prop item-prop-cont item-prop-name">'.$folder->icon.'<a href="index.php?path='.$folder->path.'/'.$folder->name.'">'.$folder->name.'</a></li>
            <li class="item-prop item-prop-cont">'.$folder->extension.'</li>
            <li class="item-prop item-prop-cont">'.$folder->size.'</li>
            <li class="item-prop item-prop-cont">'.$folder->createdDate.'</li>
            <li class="item-prop item-prop-cont">'.$folder->modificatedDate.'</li>
        </ul>';
        }
    }
}
if ($createNewFolder == true) {
    echo '<ul class="item-list item-list-newElement">
        <form action="index.php" method="get">
            <input type="hidden" name="path" value='.$folderShowed->path.'/>
            <input type="hidden" name="pathToCreate" value='.$folderShowed->path.'/>
            <li class="item-prop item-prop-cont item-prop-name input-container"><input class="input input-newFolderName" type="text" name="newFolderName" id="newFolderName" placeholder="New folder"></li>
        </form>
    </ul>';
}
?>