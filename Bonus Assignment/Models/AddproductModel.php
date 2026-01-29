<?php
require_once('Assignmentdatabase.php');

function addProduct($product){
    $con = getConnection();
    $sql = "insert into add_product values('','{$product['name']}','{$product['buying_price']}','{$product['selling_price']}','{$product['display']}')";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function getAllDisplayedProducts(){
    $con = getConnection();
    $sql = "select * from add_product where display='Yes'";
    $result = mysqli_query($con, $sql);
    return $result;
}

function getProductById($id){
    $con = getConnection();
    $sql = "select * from add_product where ID='{$id}'";
    $result = mysqli_query($con, $sql);
    return mysqli_fetch_assoc($result);
}

function updateProduct($product){
    $con = getConnection();
    $sql = "update add_product set Product_Name='{$product['name']}',Buying_Price='{$product['buying_price']}',Selling_Price='{$product['selling_price']}',Display='{$product['display']}'where ID='{$product['id']}'";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function deleteProduct($id){
    $con = getConnection();
    $sql = "delete from add_product where ID='{$id}'";

    if(mysqli_query($con, $sql)){
        return true;
    }else{
        return false;
    }
}

function searchProductByName($name){
    $con = getConnection();
    $sql = "select * from add_product 
            where Product_Name like '%{$name}%' 
            and Display='Yes'";
    return mysqli_query($con, $sql);
}

?>
