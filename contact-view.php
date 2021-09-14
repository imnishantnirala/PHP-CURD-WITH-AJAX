<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Ajax | Insert | Update | Delete Data !</title>
  </head>
  <body>
    
	<div class="container col-lg-8 border border-primary p-4 mt-5">
		<div class="row">
			<h1 class="text-center text-primary">Using Ajax | Insert | Update | Delete Data !</h1>
			<form class="mb-5 mt-3" id="contact_form">
		    <div class="row">
		    	<div id="error-message" class="text-danger"></div>
		  		<div id="success-message" class="text-success"></div>
				  <div class="col">
				    <input type="text" class="form-control" placeholder="Name" id="name" required>
				  </div>
				  <div class="col">
				    <input type="number" class="form-control" placeholder="Phone No" id="phone_no" required>
				  </div>
				  <div class="col">
				    <input type="email" class="form-control" placeholder="Email Id" id="email_id" required>
				  </div>
				  <div class="col">
				    <input type="submit" class="btn btn-primary" name="submit" id="save-contact" value="Save">
				  </div>
				</div>
		  </form>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">S.no</th>
			      <th scope="col">Name</th>
			      <th scope="col">Phone Number</th>
			      <th scope="col">Email Id</th>
			      <th scope="col">Delete</th>
			      <th scope="col">Update</th>
			    </tr>
			  </thead>
			  <tbody id="table-data">
			  </tbody>
			</table>
		</div>
		<div class="row border border-primary" id="model-form">
				<button class="btn btn-danger col-1 m-2" id="close-btn">X</button>
				<h1 class="text-center text-primary">Udate Contact</h1>
				<form class="mb-5 mt-3" id="update_contact_form"></form>
		</div>
	</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- Ajex -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/ajax.js"></script>
  </body>
</html>