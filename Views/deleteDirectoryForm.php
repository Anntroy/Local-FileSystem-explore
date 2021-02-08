<?php
    echo '<form action="Controllers/deleteDirectory.php" method="post">
    <input type="hidden" name="currentFolder" value="'.$currentFolder.'">
    <button type="submit" title="Delete folder"><i class="fa fa-folder-minus fa-lg"></i></button>
    </form>';
?>