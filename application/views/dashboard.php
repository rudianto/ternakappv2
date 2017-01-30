
				
				  		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <center><img src="<?=base_url();?>assets/img/ayam.JPG" alt="..." height="350px" width="1500px"></center>
							      <div class="carousel-caption">
							        Ayam berkualitas <br>telur berkualitas
							      </div>
							    </div>
							    <div class="item">
							      <center><img src="<?=base_url();?>assets/img/telur.JPG" alt="..." height="350px" width="1500px"></center>
							      <div class="carousel-caption">
							       Kepuasan Konsumen Selalu menjadi prioritas <br>KAMI!!!
							      </div>
							    </div>
							    <div class="item">
							      <center><img src="<?=base_url();?>assets/img/telur2.JPG" alt="..." height="350px" width="1500px"></center>
							      <div class="carousel-caption">
							        Grosir dan eceran Kami layani..
							      </div>
							    </div>
							    <marquee>Dashboard istem informasi peternakan &copy;Kelompok KP UNIKOM</marquee>
							  </div>

							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
							<h3><?=$title;?></h3>
<hr color="black">
							
						
	
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 "><?=$kandang;?></div>
													<div class="stat-panel-title text-uppercase">Jumlah Kandang</div>
												</div>
											</div>
											<a href="<?=base_url();?>index.php/kandangcontroller/kandang" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 "><?=$kandang;?></div>
													<div class="stat-panel-title text-uppercase">Jumlah Vaksin</div>
												</div>
											</div>
											<a href="<?=base_url();?>index.php/kandangcontroller/vaksin" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 "><?=$pelanggan;?></div>
													<div class="stat-panel-title text-uppercase">Jumlah Pelanggan</div>
												</div>
											</div>
											<a href="<?=base_url();?>index.php/kandangcontroller/pelanggan" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 "><?=$pesan;?></div>
													<div class="stat-panel-title text-uppercase">Jumlah pemesanan</div>
												</div>
											</div>
											<a href="<?=base_url();?>index.php/kandangcontroller/pesan" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						

						












