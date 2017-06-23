<?php
session_start();
require_once 'app/autoloader.php';

$_SESSION['products'] = $_POST;

$myCart = new classes\cart\Cart();
$myCart->addProduct($_SESSION['products']);
$myCart->printProduct();
