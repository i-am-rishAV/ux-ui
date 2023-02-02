<?php 
include ("session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords"
		content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Price</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="assets/css/line-awesome.min.css">



	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<?php include('components/header.php'); ?>
		<!-- /Header -->

		<!-- Sidebar -->
		<?php include('components/sidebar.php'); ?>
		<!-- /Sidebar -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<!-- Page Content -->
			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title">Prices</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Pricings</li>
							</ul>
						</div>
						<div class="col-auto float-right ml-auto">
							<button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#addprice">
                                               <i class="icofont-plus-circle me-2 fs-6"></i>  Add Price
                                                   </button>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							
               <div id="records"></div>


						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->

			<!-- Add Designation Modal -->

			  <div class="modal fade" id="addprice" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Price</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<!-- <span aria-hidden="true">&times;</span> -->
							</button>
                            </div>

                            <div class="modal-body ">

                              <form>
								<div class="form-group">
									<label>Title<span class="text-danger">*</span></label>
									<input class="form-control" id="title" type="text" required>
								</div>
								<div class="form-group">
									<label>Price<span class="text-danger">*</span></label>
									<input class="form-control" id="price" type="text" required>
								</div>
								<div class="form-group">
									<label>description 1<span class="text-danger">*</span></label>
									<input class="form-control" id="des1" type="text" required>
								</div>
								<div class="form-group">
									<label>description 2<span class="text-danger">*</span></label>
									<input class="form-control" id="des2" type="text">
								</div>
								<div class="form-group">
									<label>description 3<span class="text-danger">*</span></label>
									<input class="form-control" id="des3" type="text">
								</div>
								<div class="form-group">
									<label>description 4<span class="text-danger">*</span></label>
									<input class="form-control" id="des4" type="text">
								</div>
								<div class="form-group">
									<label>description 5<span class="text-danger">*</span></label>
									<input class="form-control" id="des5" type="text">
								</div>
								<div class="form-group">
									<label>description 6<span class="text-danger">*</span></label>
									<input class="form-control" id="des6" type="text">
								</div>
								<div class="form-group">
									<label>description 7<span class="text-danger">*</span></label>
									<input class="form-control" id="des7" type="text">
								</div>
								
								<div class="submit-section">
									<button class="btn btn-primary submit-btn" id="submit" onclick="addrecord()">Submit</button>
								</div>
							</form>


                            </div>
                        
                        </div>
                    </div>
           </div>
			<!-- /Add Designation Modal -->

			<!-- Edit Designation Modal -->
			<div class="modal fade" id="update_price_modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Price</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<!-- <span aria-hidden="true">&times;</span> -->
							</button>
						</div>
						<div class="modal-body">
							 <form>
								<div class="form-group">
									<label>Title<span class="text-danger">*</span></label>
									<input class="form-control" id="update_title" type="text" required>
								</div>
								<div class="form-group">
									<label>Price<span class="text-danger">*</span></label>
									<input class="form-control" id="update_price" type="text" required>
								</div>
								<div class="form-group">
									<label>description 1<span class="text-danger">*</span></label>
									<input class="form-control" id="update_des1" type="text" required>
								</div>
								<div class="form-group">
									<label>description 2<span class="text-danger">*</span></label>
									<input class="form-control" id="update_des2" type="text">
								</div>
								<div class="form-group">
									<label>description 3<span class="text-danger">*</span></label>
									<input class="form-control" id="update_des3" type="text">
								</div>
								<div class="form-group">
									<label>description 4<span class="text-danger">*</span></label>
									<input class="form-control" id="update_des4" type="text">
								</div>
								<div class="form-group">
									<label>description 5<span class="text-danger">*</span></label>
									<input class="form-control" id="update_des5" type="text">
								</div>
								<div class="form-group">
									<label>description 6<span class="text-danger">*</span></label>
									<input class="form-control" id="update_des6" type="text">
								</div>
								<div class="form-group">
									<label>description 7<span class="text-danger">*</span></label>
									<input class="form-control" id="update_des7" type="text">
								</div>
								
								<div class="submit-section">
									<button class="btn btn-primary submit-btn" id="update" onclick="updateprice()">Update</button>
									<input type="hidden" name="" id="hidden_id">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Edit Designation Modal -->

			<!-- Delete Designation Modal -->
			<div class="modal custom-modal fade" id="delete_price_modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-header">
								<h3>Delete Price</h3>
								<p>Are you sure want to delete?</p>
							</div>
							<div class="modal-btn delete-action">
								<div class="row">
									<div class="col-6">
										<button onclick="deletef()" class="btn btn-primary continue-btn" >Delete</button>
									</div>
									<div class="col-6">
										<button data-bs-dismiss="modal"
											class="btn btn-primary cancel-btn">Cancel</button>
									</div>
									<input type="hidden" name="" id="hidden_id">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Designation Modal -->

		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

<script src="assets/js/jquery-3.5.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


	<!-- Custom JS -->
	<script src="assets/js/app.js"></script>

		<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	
<script>
		$(document).ready(function () {
    			readRecords();
		});

 	    function readRecords() {
		let readrecord = "readrecord"; // creating a varaible to send to use it as isset function
		$.ajax({
			url: "price_db.php",
			type: "post",
			data: { readrecord: readrecord }, // sending data from this page 
			success: function (data, status) {
				$('#records').html(data);  // receiving data from price_db page
			}
    		 });	
		}

		function addrecord() {
    	// storing all the inputs by user in variable 
		let title = $('#title').val();
		let price = $('#price').val();
		let des1 = $('#des1').val();
		let des2 = $('#des2').val();
		let des3 = $('#des3').val();
		let des4 = $('#des4').val();
		let des5 = $('#des5').val();
		let des6 = $('#des6').val();
		let des7 = $('#des7').val();



			$.ajax({

				url: "price_db.php",
				type: "post",
				//sending the inputs stored in varaibles to run queries to store in database 
				data: {
					title: title,
					price: price,
					des1: des1,
					des2: des2,
					des3: des3,
					des4: des4,
					des5: des5,
					des6: des6,
					des7: des7
				},

				success: function (data, status) {
					$('#title').val(""); //  reseting the value back to null
					$('#price').val("");
					$('#des1').val("");
					$('#des2').val("");
					$('#des3').val("");
					$('#des4').val("");
					$('#des5').val("");
					$('#des6').val("");
					$('#des7').val("");
					$('#addprice').modal("hide");
					readRecords(); //to display the new data entered in database we callinf this function
					
				}

			});

    

  		  }

	function editUser(id1) {
    $('#hidden_id').val(id1); //giving id to the hidden input

    $.post("price_db.php", { id1: id1 }, function (data, status) {

        let price = JSON.parse(data); // converting json data to javascript object
        $('#update_title').val(price.title); // accessing the data that we just converted into javascript object
        $('#update_price').val(price.price);
        $('#update_des1').val(price.des1);
        $('#update_des2').val(price.des2);
        $('#update_des3').val(price.des3);
        $('#update_des4').val(price.des4);
        $('#update_des5').val(price.des5);
        $('#update_des6').val(price.des6);
        $('#update_des7').val(price.des7);

    }
    );

    $('#update_price_modal').modal("show"); // now showing the modal with all the data

    }

	function updateprice() {
    let add_title = $('#update_title').val();
    let add_price = $('#update_price').val();
    let add_des1 = $('#update_des1').val();
    let add_des2 = $('#update_des2').val();
    let add_des3 = $('#update_des3').val();
    let add_des4 = $('#update_des4').val();
    let add_des5 = $('#update_des5').val();
    let add_des6 = $('#update_des6').val();
    let add_des7 = $('#update_des7').val();

    let add_hidden_id = $('#hidden_id').val();

    $.post("price_db.php", {

        add_title: add_title,
        add_hidden_id: add_hidden_id,
        add_price: add_price,
        add_des1: add_des1,
        add_des2: add_des2,
        add_des3: add_des3,
        add_des4: add_des4,
        add_des5: add_des5,
        add_des6: add_des6,
        add_des7: add_des7

    },
        function (data, status) {
            $('#update_price_modal').modal("hide");
            readRecords();
        }

    );
    }

	function deleteUser(id){
      
		let hidden_id = $('#hidden_id').val(id);
		$('#delete_price_modal').modal("show"); // now showing the modal with all the data
		
	}

	function deletef(deleteid) {
    //confirming from the user so that it will run only
    // when the user will click yes 
	
    let id = $('#hidden_id').val();
        $.ajax({
            url: "price_db.php",
            type: "post",
            data: {id:id }, //sending the id to write the delete query using this id
            success: function (data, status) {
				 $('#delete_price_modal').modal("hide");
                readRecords();// after deleting calling readRecord function to display remaining data
            }

        });
    }


</script>

	

</body>

</html>