<?php
    $delete_file = 'C:\Users\huygh\Desktop\form-to-csv.csv';
    unlink("$delete_file");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
?>