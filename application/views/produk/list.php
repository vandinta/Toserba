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
						<div class="container-fluid">
							<?php if ($this->session->flashdata('berhasil')) : ?>
								<div class="alert alert-success" role="alert">
									<?php echo $this->session->flashdata('berhasil'); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<?php $this->session->unset_userdata('berhasil') ?>
							<?php endif; ?>

						<div class="col-lg-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Tabel Data Produk</h4>
									<div class="table-responsive">
										<div>
											<a class="btn btn-primary float-right ml-3" style="background-color: #007bff; border:black;" href="<?php echo site_url('produk/input') ?>"><i class="icon-plus menu-icon"></i> Tambah</a>
										</div>
										<table class="table table-hover text-center" id="dataTable">
											<thead>
												<tr style="background-color: #57B657; color:white;">
													<th>No</th>
													<th>Nama Produk</th>
													<th>Harga</th>
													<th>Kategori</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												foreach ($Produk as $pro) : ?>
													<tr>
														<td width="10">
															<?php echo $no++ ?>
														</td>
														<td width="160">
															<?php
															echo $pro->nama_produk
															?>
														</td>
														<td width="50">
															<?php
															echo $pro->harga
															?>
														</td>
														<td width="50">
															<?php
															echo $pro->nama_kategori
															?>
														</td>
														<td width="50">
															<?php
															if ($pro->status_id == 1) {
															?>
																<span class="badge badge-success">Dijual</span>
															<?php
															} else {
															?>
																<span class="badge badge-warning">Tidak Dijual</span>
															<?php
															}
															?>
														</td>
														<td width="150" style="text-align: center;">
															<a href="<?php echo site_url('produk/edit/' . $pro->id_produk) ?>" class="btn btn-outline-warning btn-fw ml-2 w-100">
																<i class="mdi mdi-lead-pencil"></i> Ubah
															</a><br><br>
															<a onclick="deleteConfirm('<?php echo site_url('produk/delete/' . $pro->id_produk) ?>')" href="#!" class="btn btn-inverse-danger btn-fw ml-2 w-100">
																<i class="mdi mdi-delete"></i> Hapus
															</a>
														</td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
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

	<!-- partial modal->
	<?php $this->load->view("template/modal.php") ?>
	<!-- partial -->
	<!-- partial js -->
	<?php $this->load->view("template/js.php") ?>
	<!-- partial -->

	<script>
		// $(document).ready(function() {
		// 	$('#dataTable').DataTable();
		// });
		$(document).ready(function() {
			$('#dataTable').DataTable({
				"lengthMenu": [
					[5, 10, 25, 50, -1],
					[5, 10, 25, 50, "All"]
				]
			});
		});

		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>

</body>

</html>