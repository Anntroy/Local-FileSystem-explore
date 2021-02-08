<?php
    echo '<form action="Controllers/createDirectory.php" method="post">
    <input type="text" name="newFolder" placeholder="Enter new folder name..." required>
    <input type="hidden" name="currentFolder" value="'.$currentFolder.'">
    <button type="submit" title="Add new folder"><i class="fa fa-folder-plus fa-lg"></i></button>
    </form>';
?>