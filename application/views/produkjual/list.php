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
							<div class="col-lg-12 grid-margin stretch-card">
								<div class="card">
									<h4 class="card-title mt-3 ml-3">List Produk Yang Dijual</h4>
								</div>
							</div>
							<div class="row product-lists" style="margin-top: -40px;">
								<?php foreach ($Produk as $pr) : ?>
									<div class="col-lg-4 col-md-6 text-center" style="margin-top: 20px;">
										<div class="card" style="height: 160px;">
											<div class="card-body">
												<div class="single-product-item">
													<h3 class="card-title"><?= $pr->nama_produk; ?></h3>
													<h6 class="card-subtitle mb-2 text-muted"><?= $pr->nama_kategori; ?></h6>
													<h6>Rp. <?= $pr->harga; ?> ,-</h6>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
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