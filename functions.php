<?php
require "database.php";

$errors = array();
function insert($product_name,$product_image){ 
    global $errors,$connection;
    //validate
    if(empty($product_name)){
        array_push($errors, "product name required");
    }
    if(empty($product_image)){
        array_push ($errors, "Please select an image");
    }
    //insert data into a database//
    //insert if no errors
    if (count($errors) == 0) {
           //If no errors found  
           if(!empty($product_image)){
               $folder = "./products/";
               $file_name = basename($product_image);
               $file_path = $folder.$file_name;
               $ext = pathinfo($file_path, PATHINFO_EXTENSION);   
               $types = array('jpg','jpeg','png');
               $img = addslashes(file_get_contents($_FILES['product_image']['tmp_name']));
               $tmp_name = $_FILES['product_image']['tmp_name'];
               if(in_array($ext,$types)){
                   if(move_uploaded_file($tmp_name,$file_path)){
                        $query = "INSERT INTO products (product_name , product_image) VALUES ('$product_name','".$file_name."')";
                        $action = mysqli_query($connection,$query);
                        if($action){
                            echo 'Upload Sucessful';
                            return true;
                        }else{
                            echo 'Failed one';
                            return false;
                        }
                   }else{
                       echo 'Failed to upload';
                       return false;
                   }
               } else{
                   echo 'Invalid image type';
                   return false;
               }
           }  else{
               echo 'Image required';
               return false;
           }
    }else{
        print_r($errors);
        return false;
    }
}

if (isset($_POST['submit'])) {
    //get data from the form


    $product_name = $_POST['product_name'];
    $product_image = $_FILES['product_image']['name'];


    //Call function to insert
    insert($product_name,$product_image);
}
    // $sql = " SELECT * FROM products";
    $query = "SELECT * FROM products";
    $result = mysqli_query($connection,$query);
    $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($connection);  
?>