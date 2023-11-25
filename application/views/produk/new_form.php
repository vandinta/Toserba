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
									<h3 class="card-title">Tambah Produk</h3>
									<a href="<?php echo site_url('produk') ?>" class="btn btn-outline-info btn-fw">Kembali</a>
									<form class="forms-sample" action="<?php echo site_url('Produk/input'); ?>" method="POST">
										<br>
										<div class="form-group">
											<label for="nama_produk">Nama Produk</label>
											<input type="text" class="form-control <?php echo form_error('nama_produk') ? 'is-invalid' : '' ?>" name="nama_produk" id="nama_produk" value="<?php echo set_value('nama_produk'); ?>" placeholder="Nama Produk" required />
											<span style="color: red;"><?php echo form_error('nama_produk'); ?></span>
										</div>
										<div class="form-group">
											<label for="harga">Harga</label>
											<input type="number" class="form-control <?php echo form_error('harga') ? 'is-invalid' : '' ?>" name="harga" id="harga" value="<?php echo set_value('harga'); ?>" placeholder="Harga" required />
											<span style="color: red;"><?php echo form_error('harga'); ?></span>
										</div>
										<div class="form-group">
											<label for="kategori_id">Kategori</label>
											<select id="kategori_id" name="kategori_id" class="form-control" required>
												<option value="">Pilih Kategori</option>
												<?php foreach ($Kategori as $kt) : ?>
													<option value="<?php echo $kt->id_kategori ?>"><?= $kt->nama_kategori ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<div class="form-group">
											<label for="status_id">Status</label>
											<select id="status_id" name="status_id" class="form-control" required>
												<option value="">Pilih Status</option>
												<?php foreach ($Status as $st) : ?>
													<option value="<?php echo $st->id_status ?>"><?= $st->nama_status ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<button class="btn btn-primary float-right mr-2" style="background-color: #f58924; border:black;" type="submit" name="btn"> Simpan </button>
									</form>
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