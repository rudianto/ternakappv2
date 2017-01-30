<!DOCTYPE html>
<html>
<head>
	<title></title>

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
	<script src="<?=base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap-select.min.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url();?>assets/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/js/Chart.min.js"></script>
	<script src="<?=base_url();?>assets/js/fileinput.js"></script>
	<script src="<?=base_url();?>assets/js/chartData.js"></script>
	<script src="<?=base_url();?>assets/js/main.js"></script>

</head>
<body>


<div class="brand clearfix">
		<a href="index.html" class="logo"><img src="<?=base_url();?>assets/img/logo.jpg" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="<?=base_url();?>assets/img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> <?= $this->session->userdata('username');?></a>
			</li>
			<li><?=anchor('login/logout', ' Logout', ['class'=>'fa fa-plug']);?></li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				
				<li class="ts-label">Main Menu</li>
				<li class="open"><?=anchor('kandangcontroller/', ' Dashboard ', ['class'=>'fa fa-dashboard']);?></li>
				<li class="open"><?=anchor('kandangcontroller/produksi', ' Data Produksi Telur ', ['class'=>'fa fa-pie-chart']);?></li>
				<li class="open"><?=anchor('kandangcontroller/kandang', ' Data Kandang ', ['class'=>'fa fa-table']);?></li>
				<li class="open"><?=anchor('kandangcontroller/vaksin', ' Data Vaksin ', ['class'=>'fa fa-edit']);?></li>
				<li class="open"><?=anchor('kandangcontroller/pelanggan', ' Data Pelanggan ', ['class'=>'fa fa-pie-chart']);?></li>
				<li class="open"><?=anchor('kandangcontroller/perusahaan', ' Data Perusahaan ', ['class'=>'fa fa-archive']);?></li>
				<li class="open"><?=anchor('kandangcontroller/pesan', ' Data Pemesanan ', ['class'=>'fa fa-files-o']);?></li>
					
				

				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li><a href="#">Help</a></li>
					<li><a href="#">Settings</a></li>
					<li class="ts-account">
						<a href="#"><img src="<?=base_url();?>assets/img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Edit Account</a></li>
							<li><a href="#">Logout</a></li>
						</ul>
					</li>
				</ul>

			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">