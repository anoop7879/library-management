<?php
	include_once 'dbconn.php';
	$id=$_GET['book_id'];
	$sql="DELETE FROM books WHERE book_id='$id'";
	// print_r($sql);die;
	$que = mysqli_query($con,$sql);
	header("Location: http://localhost/admin/pages/examples/bookdata.php");
	exit();
?>