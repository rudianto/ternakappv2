<html>
	<head>
		<title>Kandang</title>
		<!-- Font awesome -->
		<link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css">
		<!-- Sandstone Bootstrap CSS -->
		<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
		<!-- Bootstrap Datatables -->
		<link rel="stylesheet" href="<?=base_url();?>assets/css/dataTables.bootstrap.min.css">
		<!-- Bootstrap social button library -->
		<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-social.css">
		<!-- Bootstrap select -->
		<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-select.css">
		<!-- Bootstrap file input -->
		<link rel="stylesheet" href="<?=base_url();?>assets/css/fileinput.min.css">
		<!-- Awesome Bootstrap checkbox -->
		<link rel="stylesheet" href="<?=base_url();?>assets/css/awesome-bootstrap-checkbox.css">
		<!-- Admin Stye -->
		<link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
	</head>
	<body>
	<div class="login-page bk-img" style="background-image: url(<?=base_url();?>assets/img/login-bg.jpg);">
			<div class="form-content">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<h1 class="text-center text-bold text-light mt-4x">Sign in</h1>
							<div class="well row pt-2x pb-3x bk-light">
								<div class="col-md-8 col-md-offset-2">
									<?=form_open('login/proseslogin', ['class'=>'']);?>

										<label for="" class="text-uppercase text-sm">Your Username </label>
										<input type="text" id="username" name="username" placeholder="Username" class="form-control mb">

										<label for="" class="text-uppercase text-sm">Password</label>
										<input type="password" id="password" name="password" placeholder="Password" class="form-control mb">

										
										</div>
										<input type="submit" value="Log in" class="btn btn-primary btn-block">

									<?=form_close();?>
								</div>
							</div>
							<div class="text-center text-light">
								<a href="#" class="text-light">Forgot password?</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<!-- Loading Scripts -->
	<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap-select.min.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/js/Chart.min.js"></script>
	<script src="<?=base_url();?>assets/js/fileinput.js"></script>
	<script src="<?=base_url();?>assets/js/chartData.js"></script>
	<script src="<?=base_url();?>assets/js/main.js"></script>
</html>


