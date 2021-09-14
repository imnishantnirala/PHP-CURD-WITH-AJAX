<?php 

$conn = mysqli_connect("localhost","root","", "curd_2021") or die("Databse not connected !");

$contact_id = $_POST['id'];
$select_sql = "SELECT * FROM `contact_list` WHERE id = {$contact_id} ";
$fetch_result = mysqli_query($conn, $select_sql) or die("SQL Query Failed !");
$output = "";
if(mysqli_num_rows($fetch_result)>0){
	while( $contact_data =  mysqli_fetch_assoc($fetch_result)){
		$output .= '
			<div class="row">
			  <div class="col">
			  	<input type="hidden" value=" '.$contact_data['id'].' " id="update-id">

			    <input type="text" value=" '.$contact_data['name'].' " class="form-control" placeholder="Name" id="update-name">
			  </div>
			  <div class="col">
			    <input type="text" value=" '.$contact_data['phone_no'].' " class="form-control" placeholder="Phone No" id="update-phone_no">
			  </div>
			  <div class="col">
			    <input type="email" value=" '.$contact_data['email_id'].' " class="form-control" placeholder="Email Id" id="update-email_id">
			  </div>
			  <div class="col">
			    <input type="submit" class="btn btn-primary" id="update-contact" value="Update">
			  </div>
			</div>
		';
	}
	echo $output;
}


// $update_sql = "UPDATE `contact_list` SET `name`=[value-2],`phone_no`=[value-3],`email_id`=[value-4] WHERE 1"
// $result = mysqli_query($conn,$sql);
// if($result){
// 	echo 1;
// }else{
// 	echo 0;
// }



?>