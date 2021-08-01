<?php
	include_once 'dbconn.php';
	$id=$_GET['issue_id'];
	$id1=$_GET['user_id'];
	$id2=$_GET['book_id'];
	// echo 1;
	$sql="DELETE FROM issue_book WHERE issue_id='$id'";
	// print_r($sql);die;
	$que = mysqli_query($con,$sql);
	$sql="update books set book_as='0' where book_id='$id2'";
	// print_r($sql);die;
	$que = mysqli_query($con,$sql);
	// id=<?php echo $data1['issue_id'];
	header("Location: http://localhost/admin/user_dashboard.php?user_id=".$id1);
	exit();
	
?>