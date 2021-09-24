<?php
include 'action.php';
$cart_id = $_GET['cart_id'];

$functionObj-> remove_item($cart_id);


?>