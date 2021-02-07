<?php
    echo '<form action="Controllers/renameDirectory.php" method="post">
    <input type="text" name="renamedFolder" placeholder="Enter new name..." required>
    <input type="hidden" name="currentFolder" value="'.$currentFolder.'">
    <button type="submit" title="Rename folder"><i class="fas fa-edit fa-lg"></i></button>
    </form>';
?>