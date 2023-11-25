<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="<?php echo base_url('skydash/css/style.css') ?>">
	<?php $this->load->view("template/head.php") ?>
</head>

<body>
	<div class="container-scroller">
		<!-- partial navbar -->
		<?php $this->load->view("template/navbar.php") ?>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial sidebar -->
			<?php $this->load->view("template/sidebar.php") ?>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-md-12 grid-margin">
							<div class="row">
								<div class="col-12 col-xl-8 mb-4 mb-xl-0">
									<h2 class="font-weight-bold">SIM Toserba</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top: -20px;">
						<div class="row">
							<div class="col">
								<div class="card text-white bg-success mb-3">
									<div style="font-size: 25px;" class="card-header">Selamat datang,
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-8 pl-5 mt-5 ">
												<h3 class="card-title"></h3>
												<p style="align-items:center; font-size: 22px;" class="card-text">Kami sangat senang menyapa anda, <br> Di Dashboard ini Anda bisa mengatur aktivitas sistem <br>Silahkan atur website SIM Toserba Anda</p>
											</div>
											<div class="col-md-4">
												<img style="vertical-align: middle;" class="card-img-top" src="<?php echo base_url('assets/image/orang.png') ?>" alt="Card image cap">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</ul>
	</div>
	</div>
	</div>
	</div>
	</div>
	<!-- content-wrapper ends -->
	<!-- partial footer -->
	<?php $this->load->view("template/footer.php") ?>
	<!-- partial -->
	</div>
	<!-- main-panel ends -->
	</div>
	<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->

	<!-- partial js -->
	<?php $this->load->view("template/modal.php") ?>
	<?php $this->load->view("template/js.php") ?>
	<!-- partial -->
</body>

</html>