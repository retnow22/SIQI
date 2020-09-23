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
						<a href="{{ url('/kelola-akun') }}">

							<span><i class="fa fa-user-circle-o"></i></span>
							<span>Kelola Akun</span>
						</a>
					</li>
					<li>
						<a href="{{ route('jadwal.index') }}">
							<span><i class="fa fa-calendar"></i></span>
							<span>Kelola Jadwal</span>
						</a>
					</li>
					<li>
						<a href="{{ route('nilai.index') }}">
							<span><i class="fa fa-graduation-cap"></i></span>
							<span>Nilai UAS</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/data-presensi') }}">
							<span><i class="fa fa-server"></i></span>
							<span>Data Presensi</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/kelola-rombel') }}">
							<span><i class="fa fa-group"></i></span>
							<span>Data Rombel</span>
						</a>
					</li>
					<li>
						<a href="{{ route('peserta.index') }}">
							<span><i class="fa fa-user"></i></span>
							<span>Data Peserta</span>
						</a>
					</li>
					<li>
						<a href="{{ route('pengajar.index') }}">
							<span><i class="fa fa-user"></i></span>
							<span>Data Pengajar</span>
						</a>
					</li>
					<li>
						<a href="{{ route('kafalah.index') }}">
							<span><i class="fa fa-envelope"></i></span>
							<span>Hadiah Pengajar</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
