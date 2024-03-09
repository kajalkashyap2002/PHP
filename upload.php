<?php
move_uploaded_file($_FILES["file"]["tmp_name"],"images2/".$_FILES["file"]["name"]);
echo "Stored in :".images2/"$_FILES["file"]["name"];
?>