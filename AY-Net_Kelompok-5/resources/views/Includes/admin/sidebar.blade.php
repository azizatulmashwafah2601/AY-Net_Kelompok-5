<!--**********************************
    Sidebar start
***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
		<ul class="metismenu" id="menu">
			<li class="dropdown header-profile">
				<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
					<img src="{{ url('/img/administrator/'.Auth::user()->foto_profil) }}" width="20" alt="pic">
					<div class="header-info ms-3">
						<span class="font-w200 ">Hi, <b>{{ Auth::user()->name }}</b></span>
						<small class="font-w400">{{ Auth::user()->email }}</small>
					</div>
				</a>
				<!-- <div class="dropdown-menu dropdown-menu-end">
					<a href="app-profile.html" class="dropdown-item ai-icon">
						<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
						<span class="ms-2">Profile </span>
					</a>
					<a href="page-error-404.html" class="dropdown-item ai-icon">
						<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
						<span class="ms-2">Logout </span>
					</a>
				</div> -->
			</li>
            <li>
                <a href="{{ route('admin') }}" class="ai-icon" aria-expanded="false">
					<i class="flaticon-025-dashboard"></i>
					<span class="nav-text">Dashboard</span>
				</a>
            </li>
            <li>
                <a href="{{ route('administrator') }}" class="ai-icon" aria-expanded="false">
				    <i class="flaticon-050-info"></i>
					<span class="nav-text">Administrator</span>
				</a>
            </li>
            <li>
                <a href="{{ route('pelanggan') }}" class="ai-icon" aria-expanded="false">
					<i class="flaticon-045-heart"></i>
					<span class="nav-text">Pelanggan</span>
				</a>
            </li>
            <li>
                <a href="{{ route('paket') }}" class="ai-icon" aria-expanded="false">
					<i class="flaticon-043-menu"></i>
					<span class="nav-text">Paket</span>
				</a>
            </li>
            <li>
                <a href="{{ route('addtagihan') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-013-checkmark"></i>
					<span class="nav-text">Tagihan</span>
				</a>
			</li>
            <li>
                <a href="{{ route('transaksi') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Transaksi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('laporan') }}" class="ai-icon" aria-expanded="false">
					<i class="flaticon-072-printer"></i>
					<span class="nav-text">Laporan</span>
				</a>
            </li>
		<div class="copyright">
			<p><strong>AY Net - Bondowoso</strong> © 2023 All Rights Reserved</p>
			<p class="fs-12">Made with <span class="heart"></span> by AY TEAM</p>
		</div>
	</div>
</div>
<!--**********************************
    Sidebar end
***********************************-->