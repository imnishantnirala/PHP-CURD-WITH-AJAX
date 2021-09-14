<?php 
$connect = mysqli_connect("localhost","root","", "curd_2021") or die("Databse not connected !");

$id = $_POST['id'];
$name = $_POST['name'];
$phone_no = $_POST['phone_no'];
$email_id = $_POST['email_id'];

$update_sql = "UPDATE `contact_list` SET `name` = '$name', `phone_no` = '$phone_no', `email_id`='$email_id' WHERE `id` = '$id' ";

$result = mysqli_query( $connect, $update_sql);

if($result){
	echo 1;
}else{
	echo 0;
}

?>