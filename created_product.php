<?php

echo "<pre>";
print_r($_POST);
print_r($_FILES);

if(!is_dir('products')){
    mkdir('products',0777);
}
if(!is_dir('product_images')) {
    mkdir('product_images',0777);
}
$product_name = $_FILES['product_photo']['name'];
$exten = pathinfo($product_name)['extension'];
$img = uniqid().".".$exten;
echo $product_name;

if(move_uploaded_file($_FILES['product_photo']['tmp_name'],'./product_images/'.$img)){

    $_POST['product_image'] = $img;
    $product_data = json_encode($_POST);
    file_put_contents('./products/'.uniqid().'_'.$_POST['product_name'].'.json',$product_data);
    header('location: create_product.php');
}
