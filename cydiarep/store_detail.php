<?php
$udid = $_GET['UDID'];
$product = $_GET['DEVICE_PRODUCT'];

if (setcookie('UDID', $udid, time() + 600) || setcookie('PRODUCT', $product, time() + 600)) {
	header("Location: https://root1201.me/check.php");
}
?>