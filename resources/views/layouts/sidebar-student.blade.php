<div class="side-nav">
			<nav>
				<ul>
					<li>
						<a href="{{ url('/home') }}">
							<span><i class="fa fa-home"></i></span>
							<span>Beranda</span>
						</a>
					</li>
					<li>
						<a href="{{ route('peserta.profil') }}">

							<span><i class="fa fa-user-circle-o"></i></span>
							<span>Profil</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/rencana-studi') }}">
							<span><i class="fa fa-book"></i></span>
							<span>Rencana Studi</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/hasil-studi') }}">
							<span><i class="fa fa-graduation-cap"></i></span>
							<span>Hasil Studi</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/presensi-peserta') }}">
							<span><i class="fa fa-file-text"></i></span>
							<span>Laporan KBM</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/pembayaran') }}">
							<span><i class="fa fa-credit-card-alt"></i></span>
							<span>Status Pembayaran</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
