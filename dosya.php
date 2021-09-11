<?php 
    print_r($_FILES);
    $upload = move_uploaded_file($_FILES['dosya']['tmp_name'],  $_FILES['dosya']['name']);
?>