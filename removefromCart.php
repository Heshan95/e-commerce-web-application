<?php
include './showErros.php';
session_start();

$productId = "";
if(isset($_POST['pid'])){$productId = $_POST['pid'];}
if(isset($_GET['pid'])){$productId = $_GET['pid'];}

if($productId=="") {    header("Location: ./index.html?msg=Incorrect Product Id at Cart page");    die();}

$cart;
if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
} else {
    $cart = array();
}

foreach ($cart as $key => $value) {
    if($value[0] == $productId){
        unset($cart[$key]);
    }
}

$_SESSION['cart'] = $cart;
header("Location: cart.php");






?>

