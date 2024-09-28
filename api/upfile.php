<?php

echo "<pre>";

if(empty($_FILES['photo']['name'][0])){
header("location:upload.php");
die();

}

print_r($_FILES);
$file_name = $_FILES['photo']['name'];

// echo ini_get('upload_max_filesize',);
// var_dump(move_uploaded_file($_FILES['photo']['tmp_name'],"./photo/".uniqid().'.'.pathinfo($file_name)['extension']));
// header('location:./upload.php');

foreach($file_name as $key=>$names){
    if(move_uploaded_file($_FILES['photo']['tmp_name'][$key],"./photo/".uniqid().'.'.pathinfo($names)['extension'])){
        header("location:upload.php");
    }
}