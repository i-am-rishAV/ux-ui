<?php 
include ("session.php");
include("connection.php");

$sql = "SELECT `id` from `feature`";
$result = $connect->query($sql);
$feature = mysqli_num_rows($result);


$sql2 = "SELECT `id` from `plan_enquiry`";
$result2 = $connect->query($sql2);
$plan = mysqli_num_rows($result2);

$sql3 = "SELECT `id` from `feedback`";
$result3 = $connect->query($sql3);
$feedback = mysqli_num_rows($result3);

$sql4 = "SELECT `id` from `contact`";
$result4 = $connect->query($sql4);
$contact = mysqli_num_rows($result4);
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
	<title>Design it Panel</title>

	<!-- Favicon -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="assets/css/line-awesome.min.css">

	<!-- Chart CSS -->
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
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
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Welcome Admin!</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item active">Dashboard</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="card dash-widget">
							<div class="card-body">
								<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
								<a href="feature.php"><div class="dash-widget-info">
									<h3><?=$feature ?></h3>
									<span>Features</span>
								</div></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="card dash-widget">
							<div class="card-body">
								<span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
							<a href="plan.php">	<div class="dash-widget-info">
									<h3><?=$plan ?></h3>
									<span>Plan Enquiry</span>
								</div></a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="card dash-widget">
							<div class="card-body">
								<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
								<a href="feedback.php"><div class="dash-widget-info">
									<h3><?=$feedback ?></h3>
									<span>Feedbacks</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="card dash-widget">
							<div class="card-body">
								<span class="dash-widget-icon"><i class="fa fa-user"></i></span>
								<a href="contact.php"><div class="dash-widget-info">
									<h3><?= $contact ?></h3>
									<span>contacts</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>





				<!-- Statistics Widget -->

				<!-- /Statistics Widget -->




			</div>
			<!-- /Page Content -->

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

</body>

</html>