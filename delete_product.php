<?php

echo "<pre>";
print_r($_GET);
if(unlink('./products/'.$_GET['json_data']) && unlink('./product_images/'.$_GET['img']) ) header('location:product_list.php');
