<?php
session_start();
require_once 'app/autoloader.php';

if (!isset($_POST['cart'])) {
    echo "Товар не выбран!";
    header('Location: index.php');
    exit;
} else {
    $item = $_SESSION['productList']; $_SESSION['productList'] = 0;
    foreach ($_POST['cart'] as $key => $value) {
        $s = unserialize($item[$value]);
        print "Восстановленный из строки объект<pre>";print_r($s); print "</pre><hr/>";
        print "Заголовок" . $s->getTitle(); print "<hr/>";
        $productlist[] = $s;
    }
    print "Массив корзины <pre>";print_r($productlist); print "</pre><hr/>";
}

$myCart = new classes\cart\Cart($_SESSION['userName'], $productlist);

//$myCart->deleteProduct(1);

?>
