$(document).ready(function(){
	// this code For fatch data from data base with ajax 
	function loadTable(){
		$.ajax({
			url : "fatch-data.php",
			type : "POST",
			success : function(contact_data){
				$("#table-data").html(contact_data);
			}
		});
	};
	loadTable();

	//this code for insert data into databse  
	$("#save-contact").on("click",function(e) {
		e.preventDefault();
		var name = $("#name").val();
		var phone_no = $("#phone_no").val();
		var email_id = $("#email_id").val();
		if(name == "" || phone_no == "" || email_id == "" ){
			$("#error-message").html("All fields are required.").slideDown();
		}else{
			$.ajax({
				url : "insert-data.php",
				type : "POST",
				data : {name : name, phone_no : phone_no, email_id : email_id},
				success : function(insert_data){
					if(insert_data == 1){
						loadTable();
						$("#contact_form").trigger("reset");
						$("#success-message").html("Insert SuccessFully !").slideDown();
						$("#error-message").hide();
					}else{
						alert("Cant Save Record !");
					}
				}
			});
		}
	});

	// this code for delete data from databse 
	$(document).on("click", "#delete-btn", function(){
		if( confirm("Do You Really want to delete this record ?") ){
			var contactId = $(this).data("id");
			$.ajax({
				url : "delete-data.php",
				type : "POST", 
				data : {id : contactId},
				success : function(data){
					if(data==1){
						loadTable();
						$("#success-message").html("Delete SuccessFully !").slideDown();
						$("#error-message").hide();
					}else{
						$("#success-message").hide();
						$("#error-message").html("Cant Delete Record !").slideDown();
					}
				}
			});
		}
	});

	// update contact form value
	 $("#model-form").hide();
	 $(document).on("click", "#update-btn", function(e){
	 	$("#model-form").slideDown();
	 	var contactId = $(this).data("eid");
	 	$.ajax({
	 		url : "update-form.php",
	 		type : "POST",
	 		data : {id : contactId},
	 		success : function(data){
	 			$("#update_contact_form").html(data);
	 		}
	 	});
	 });

	 // save and update form
	 $(document).on("click","#update-contact",function(e){
	 	e.preventDefault();

	 	var id = $("#update-id").val();
	 	var name = $("#update-name").val();
	 	var phone_no = $("#update-phone_no").val();
	 	var email_id = $("#update-email_id").val();
	 	$.ajax({
	 		url : "update-data.php",
	 		type : "POST",
	 		data : {id : id, name : name, phone_no : phone_no, email_id : email_id},
	 		success : function(data){
	 			if(data==1){
					loadTable();
					$("#success-message").html("Update SuccessFully !").slideDown();
					$("#error-message").hide();
					$("#model-form").slideUp();
				}else{
					$("#success-message").hide();
					$("#error-message").html("Cant Update Record Something Went Wrong !").slideDown();
				}
	 		}
	 	});
	 });

	 // Hide update model form 
	 $(document).on("click", "#close-btn",function(){
	 	$("#model-form").slideUp();
	 });
	
	
});