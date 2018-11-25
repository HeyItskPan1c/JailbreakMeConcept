<?php
if (isset($_COOKIE['UDID'])) {
	echo "<script type='text/javascript'>alert('CheckedUDID: OK')</script>";
	if (isset($_COOKIE['PRODUCT'])) {
		echo "<script type='text/javascript'>alert('CheckedProduct: OK')</script>";
	} else {
		echo "<script type='text/javascript'>alert('CheckedProduct: Failed')</script>";
	}
} else {
	echo "<script type='text/javascript'>alert('CheckedUDID: Failed')</script>";
}
?>