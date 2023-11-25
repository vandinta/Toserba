<style type="text/css">
	html:not(.sidebar) .sidebar-offcanvas .nav .nav-item.open>.nav-link,
	.sidebar.sidebar-hover.sidebar-offcanvas .nav .nav-item.open>.nav-link,
	html:not(.sidebar) .sidebar-icon-only .nav .nav-item.open>.nav-link>.menu-title,
	.sidebar.sidebar-hover.sidebar-icon-only .nav .nav-item.open>.nav-link>.menu-title,
	html:not(.sidebar) .sidebar-offcanvas .nav .nav-item .nav-link:not(.active):hover,
	.sidebar-hover.sidebar .sidebar-offcanvas .nav .nav-item .nav-link:not(.active):hover {
		background-color: rgba(87, 182, 87, 1);
	}
	
	html:not(.sidebar) .sidebar-icon-only .nav .nav-item .nav-link .menu-title:not(.active):hover,
	.sidebar-hover.sidebar .sidebar-icon-only .nav .nav-item .nav-link .menu-title:not(.active):hover {
		background-color: rgba(87, 182, 87, 1);
	}

	.sidebar-offcanvas .nav>.nav-item.active>.nav-link {
		background-color: rgba(87, 182, 87, 1) !important;
	}

	.sidebar-icon-only .nav>.nav-item.active {
		background-color: rgba(87, 182, 87, 1) !important;
	}

	.sidebar-icon-only .nav>.nav-item.active>.nav-link>.menu-title {
		background-color: rgba(87, 182, 87, 1) !important;
	}
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item <?php echo $this->uri->segment(1) == 'dashboard' ? 'active': '' ?>">
			<a class="nav-link" href="<?php echo site_url('dashboard') ?>">
				<i class="icon-grid menu-icon"></i>
				<span class="menu-title">Dashboard</span>
			</a>
		</li>
		<li class="nav-item <?php echo $this->uri->segment(1) == 'jual' ? 'active': '' ?>">
			<a class="nav-link" href="<?php echo site_url('jual') ?>">
				<i class="icon-paper menu-icon"></i>
				<span class="menu-title">Data Produk Dijual</span>
			</a>
		</li>
		<li class="nav-item <?php echo $this->uri->segment(1) == 'produk' ? 'active': '' ?>">
			<a class="nav-link" href="<?php echo site_url('produk') ?>">
				<i class="icon-check menu-icon"></i>
				<span class="menu-title">Data Produk</span>
			</a>
		</li>
	</ul>
</nav>
