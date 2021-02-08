<?php
    echo ' <form action="uploadFile.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="currentFolder" value="'.$currentFolder.'">
    <input type="file" name="the_file" id="fileToUpload" value="Select file">
    <input type="submit" name="submit" value="Start Upload">
    </form>';
?>