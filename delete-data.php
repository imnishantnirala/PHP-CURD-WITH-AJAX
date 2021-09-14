<?php

$contact_id = $_POST['id'];
$conn = mysqli_connect("localhost", "root", "", "curd_2021") or die("connection Failed");


$sql = "DELETE FROM contact_list WHERE id = {$contact_id} ";
$result  = mysqli_query($conn,$sql);
if($result){
	echo 1;
}else{
	echo 0;
}
?>