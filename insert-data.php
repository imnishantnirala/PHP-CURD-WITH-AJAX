<?php
	$conn = mysqli_connect("localhost", "root", "", "curd_2021") or die("connection Failed");

	$name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	$email_id = $_POST['email_id'];

	$sql="INSERT INTO `contact_list`(`name`, `phone_no`, `email_id`) VALUES ('$name','$phone_no','$email_id')";

	$result = mysqli_query($conn,$sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}

?>