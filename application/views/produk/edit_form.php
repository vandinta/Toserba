<!DOCTYPE html>
<html lang="en">

<head>
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
						<div class="col-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h3 class="card-title">Edit Data Produk</h3>
									<a href="<?php echo site_url('produk') ?>" class="btn btn-outline-info btn-fw">Kembali</a>
									<?php foreach ($Produk as $pr) : ?>
										<form class="forms-sample" action="<?php echo site_url('Produk/edit'); ?>" method="POST" enctype="multipart/form-data">
											<br>
											<input type="hidden" name="id" value="<?php echo $pr->id_produk; ?>" />
											<div class="form-group">
												<label for="nama_produk">Nama Produk</label>
												<input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Nama Produk" value="<?php echo $pr->nama_produk; ?>" required />
												<div class="invalid-feedback">
													<?php echo form_error('nama_produk') ?>
												</div>
											</div>
											<div class="form-group">
												<label for="harga">Harga</label>
												<input type="number" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $pr->harga; ?>" required />
												<div class="invalid-feedback">
													<?php echo form_error('harga') ?>
												</div>
											</div>
											<div class="form-group">
												<label for="kategori_id">Kategori</label>
												<select id="kategori_id" name="kategori_id" class="form-control" required>
													<option value="">Pilih Kategori</option>
													<?php foreach ($Kategori as $kt) : ?>
														<option value="<?php echo $kt->id_kategori ?>" <?php echo ($pr->kategori_id == $kt->id_kategori) ? 'selected' : '';  ?>><?= $kt->nama_kategori ?></option>
													<?php endforeach; ?>
												</select>
											</div>
											<div class="form-group">
												<label for="status_id">Status</label>
												<select id="status_id" name="status_id" class="form-control" required>
													<option value="">Pilih status</option>
													<?php foreach ($Status as $kt) : ?>
														<option value="<?php echo $kt->id_status ?>" <?php echo ($pr->status_id == $kt->id_status) ? 'selected' : '';  ?>><?= $kt->nama_status ?></option>
													<?php endforeach; ?>
												</select>
											</div>
											<button class="btn btn-primary float-right mr-2" style="background-color: #f58924; border:black;" type="submit" name="btn"> Simpan </button>
										</form>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
					<!-- partial footer -->
					<?php $this->load->view("template/footer.php") ?>
					<!-- partial -->
				</div>
				<!-- content-wrapper ends -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- partial modal-->
	<?php $this->load->view("template/modal.php") ?>
	<!-- partial -->
	<!-- partial js -->
	<?php $this->load->view("template/js.php") ?>
	<!-- partial -->
</body>

</html>