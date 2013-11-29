<?php
include "header.php";
?>

<div class="col-md-12">
	<h2 style="border-bottom: 1px solid #5882FA; padding-bottom: 10px">Tugas II3160 Pemrograman Integratif</h2>
	<p>Oleh Muhammad Fajrin (18211010) & R. Ryan Adi wicaksana (18211035)</p>

	<div class="row konten">
		<div class="col-md-3 box-data">
			<p class="lead">Akses semua data mahasiswa</p>
			<p>Untuk mendapatkan semua data mahasiswa, bisa gunakan URI berikut :</p>
			<p><strong><code>http://[domain utama]/18211010-18211035/searchmhs.php?tag=all</code></strong></p>
			<p>Contoh pengaksesan di localhost :</p>
			<p><strong><code>http://localhost/18211010-18211035/searchmhs.php?tag=all</code></strong></p>
		</div>
		<div class="col-md-3 box-data">
			<p class="lead">Akses data mahasiswa berdasarkan NIM</p>
			<p>Untuk mendapatkan data mahasiswa berdasarkan NIM, bisa gunakan URI berikut:</p>
			<p><strong><code>http://[domain utama]/18211010-18211035/searchmhs.php?tag=NIM&value=XXXXX</code></strong></p>
			<p>dengan <strong>XXXXX</strong> adalah NIM yang ingin dicari</p>
			<p>Contoh pengaksesan di localhost :</p>
			<p><strong><code>http://localhost/18211010-18211035/searchmhs.php?tag=NIM&value=18211001</code></strong></p>
		</div>
		<div class="col-md-3 box-data">
			<p class="lead">Akses data mahasiswa berdasarkan nama</p>
			<p>Untuk mendapatkan data mahasiswa berdasarkan nama, bisa gunakan URI berikut:</p>
			<p><strong><code>http://[domain utama]/18211010-18211035/searchmhs.php?tag=Nama&value=XXXXX</code></strong></p>
			<p>dengan <strong>XXXXX</strong> adalah nama yang ingin dicari</p>
			<p>Contoh pengaksesan di localhost :</p>
			<p><strong><code>http://localhost/18211010-18211035/searchmhs.php?tag=Nama&value=Aditya%20Pradita</code></strong></p>
			<p>gunakan <strong>%20</strong> untuk mengantikan <strong>spasi</strong></p>
		</div>
	</div>

	<div class="col-md-12 kaki">
		<span>Copyright &copy M Fatoni (18211042) & Faris Taufiq (18211054)</span>
	</div>
</div>
