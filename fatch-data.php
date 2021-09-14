<?php 

$conn = mysqli_connect("localhost", "root", "", "curd_2021") or die("connection Failed");


$sql = "SELECT * FROM `contact_list`";
$result  = mysqli_query($conn,$sql) or die("Data not Fatch !");

$num_rows = mysqli_num_rows($result);
$output = "";

if($num_rows > 0){
	$i=0;
	while($contact_data = mysqli_fetch_assoc($result)){ $i++;
		$output .= "<tr> <td> ".$i." </td><td>".$contact_data["name"]."</td><td>".$contact_data["phone_no"]."</td> <td>".$contact_data['email_id']."</td> <td> <button class='btn btn-danger' id='delete-btn' data-id='".$contact_data['id']."'>Delete</button> </td> <td> <button class='btn btn-primary' id='update-btn' data-eid='".$contact_data['id']."'>Update</button> </td> </tr>";
	}
	// mysqli_close($conn);
	echo $output;
}else{
	echo "<h2>No Record Found.</h2>";
}
?>