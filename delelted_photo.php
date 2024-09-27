<?php
echo "<pre>";

var_dump($_GET['photo']);
if(unlink("./photo/".$_GET['photo'])){
    header('location:upload.php');
}