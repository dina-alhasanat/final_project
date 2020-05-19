<?php

	include('includes/connection.php');
	$query = "delete from order where order_id = {$_GET['id']}";
	mysqli_query($conn , $query);

	header('location:manage_order.php');

?>