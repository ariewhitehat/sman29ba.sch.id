<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin of Content -->
<section class="section-pengumuman">
	<div class="container">
		<div class="text-center mb-3">
			<img src="assets/img/logo.png" alt="Logo" width="80">
			<h1 class="h4">Sistem Informasi Kelulusan Online</h1>
			<h2 class="h5">SMAN 1 Sumber Marga Telang</h2>
		</div>
		<div class="row justify-content-center">
			<div class="col-sm-4">
				<form action="" method="POST" class="needs-validation border border-1 rounded p-4" novalidate>
					<div class="row">
						<div class="col-sm-12 mb-2">
							<label for="username" class="form-label">Nomor Induk Siswa Nasional (NISN)</label>
							<div class="input-group has-validation">
								<span class="input-group-text"><i class="bi bi-credit-card-2-front-fill"></i></span>
								<input type="number" name="username" class="form-control" id="username" placeholder="NISN Anda" required>
								<!-- <div class="invalid-feedback">
									<i class="bi bi-exclamation-diamond-fill">
								</div> -->
							</div>
						</div>
						<div class="col-sm-12 mb-2">
							<label for="firstName" class="form-label"> Kode Keamanan</label>
							<div class="input-group has-validation">
								<span class="input-group-text"><i class="bi bi-file-lock2"></i></span>
								<input type="password" name="password" class="form-control" id="firstName" placeholder="Kode keamanan dari Operator" value="" required>
								<!-- <div class="invalid-feedback">
									<i class="bi bi-exclamation-diamond-fill"></i>
									Maaf, Password Anda salah !
								</div> -->
							</div>
						</div>
					</div>
					<button class="btn btn-primary btn-md" type="submit" name="login"><i class="bi bi-search"></i> Cek Kelulusan</button>
					<a href="https://wa.me/6281271734334" target="_blank" class="btn btn-warning">Butuh Bantuan?</a>
				</form>
				<!-- Begin of Accordion -->
				<div class="accordion accordion-flush mt-3" id="accordionFlushExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingOne">
							<button class="accordion-button collapsed btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
								<i class="bi bi-book-half px-1"></i> Panduan Peserta Didik
							</button>
						</h2>
						<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">
								<ul>
									<li>NISN (Nomor Induk Siswa Nasional) : Bisa dilihat pada raport masing-masing siswa</li>
									<li>Kode Keamanan : Setiap kelas diberikan kode keamanan khusus oleh Operator Sekolah yang akan dibagikan oleh wali kelas masing-masing</li>
									<li>Klik/Tap Tombol Cek Kelulusan, apabila berhasil maka akan diarahkan ke halaman Surat Keterangan Kelulusan</li>
									<li>Klik/Tap Tombol Lihat Data Rinci Kelulusan, siswa akan dibawa ke halaman Data Rinci Kelulusan Siswa, scroll ke bawah untuk melihat rincian nilai ijazah siswa per jurusan</li>
									<li> Scroll kebawah untuk Download Surat Keterangan Kelulusan, Download Poster Kelulusan (Untuk dishare ke sosial media) dan Download Kartu Pelajar </li>
									<li>Apabila terdapat kesulitan dalam penggunaan aplikasi ini Klik/Tap Tombol <a href="https://wa.me/6281271734334" target="_blank" class="btn btn-danger"><i class="bi bi-help"></i> <i class="bi bi-info-circle"></i> Butuh Bantuan?</a>
								</ul>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingTwo">
							<button class="accordion-button collapsed btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
								<i class="bi bi-info-square-fill px-1"></i> Informasi Umum
							</button>
						</h2>
						<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">
								<p>Aplikasi Pengumuman Kelulusan Online ini baru bisa di akses sesuai intruksi Dinas Pendidikan ProvinsiSumatera Selatan pada tanggal 15 Mei 2022.</p>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="flush-headingThree">
								<button class="accordion-button collapsed btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
									<i class="bi bi-terminal-fill px-1"></i> Info Aplikasi
								</button>
							</h2>
							<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
								<div class="accordion-body">
									<ul>
										<li>Aplikasi ini masih dalam tahap pengembangan (Developent) sehingga tidak menutup kemungkinan terjadinya error</li>
										<li>Aplikasi ini berada pada <code>Version Beta</code></li>
										<li>Aplikasi ini dikembangkan oleh Samsul Bari selaku Operator Sekolah di SMAN 1 Sumber Marga Telang dan Sebagai Frelancer Web Development</li>
										<li>Website Pengembang : <a href="https://samsulbari.my.id"> www.samsulbari.my.id</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Accordion -->
			</div>
		</div>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#ffffff" fill-opacity="1" d="M0,96L6.7,112C13.3,128,27,160,40,181.3C53.3,203,67,213,80,186.7C93.3,160,107,96,120,80C133.3,64,147,96,160,96C173.3,96,187,64,200,96C213.3,128,227,224,240,245.3C253.3,267,267,213,280,165.3C293.3,117,307,75,320,85.3C333.3,96,347,160,360,170.7C373.3,181,387,139,400,128C413.3,117,427,139,440,160C453.3,181,467,203,480,218.7C493.3,235,507,245,520,234.7C533.3,224,547,192,560,165.3C573.3,139,587,117,600,133.3C613.3,149,627,203,640,218.7C653.3,235,667,213,680,218.7C693.3,224,707,256,720,256C733.3,256,747,224,760,186.7C773.3,149,787,107,800,122.7C813.3,139,827,213,840,202.7C853.3,192,867,96,880,48C893.3,0,907,0,920,5.3C933.3,11,947,21,960,64C973.3,107,987,181,1000,176C1013.3,171,1027,85,1040,69.3C1053.3,53,1067,107,1080,112C1093.3,117,1107,75,1120,64C1133.3,53,1147,75,1160,80C1173.3,85,1187,75,1200,90.7C1213.3,107,1227,149,1240,144C1253.3,139,1267,85,1280,85.3C1293.3,85,1307,139,1320,165.3C1333.3,192,1347,192,1360,213.3C1373.3,235,1387,277,1400,245.3C1413.3,213,1427,107,1433,53.3L1440,0L1440,320L1433.3,320C1426.7,320,1413,320,1400,320C1386.7,320,1373,320,1360,320C1346.7,320,1333,320,1320,320C1306.7,320,1293,320,1280,320C1266.7,320,1253,320,1240,320C1226.7,320,1213,320,1200,320C1186.7,320,1173,320,1160,320C1146.7,320,1133,320,1120,320C1106.7,320,1093,320,1080,320C1066.7,320,1053,320,1040,320C1026.7,320,1013,320,1000,320C986.7,320,973,320,960,320C946.7,320,933,320,920,320C906.7,320,893,320,880,320C866.7,320,853,320,840,320C826.7,320,813,320,800,320C786.7,320,773,320,760,320C746.7,320,733,320,720,320C706.7,320,693,320,680,320C666.7,320,653,320,640,320C626.7,320,613,320,600,320C586.7,320,573,320,560,320C546.7,320,533,320,520,320C506.7,320,493,320,480,320C466.7,320,453,320,440,320C426.7,320,413,320,400,320C386.7,320,373,320,360,320C346.7,320,333,320,320,320C306.7,320,293,320,280,320C266.7,320,253,320,240,320C226.7,320,213,320,200,320C186.7,320,173,320,160,320C146.7,320,133,320,120,320C106.7,320,93,320,80,320C66.7,320,53,320,40,320C26.7,320,13,320,7,320L0,320Z"></path>
	</svg>
</section>
<!-- End of Content -->
<!-- Begin of Modal -->
<div class="modal fade" id="modalPengumuman" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle"><i class="bi bi-megaphone-fill"></i> Pengumuman</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>Diberitahukan kepada siswa siswi yang ingin melanjutkan ke Perguruan Tinggi dengan menggunakan KIP-Kuliah agar menghubungi Operator Sekolah via chat, terima kasih.
				</p>
				<p>Regards</p>
				<p>Admin</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-square-fill"></i> Close</button>
				<a href="beranda/#kontak" class="btn btn-success"><i class="bi bi-whatsapp"></i> Chat Operator</a>
			</div>
		</div>
	</div>
</div>
<!-- End of Modal -->
<?= $this->endSection(); ?>