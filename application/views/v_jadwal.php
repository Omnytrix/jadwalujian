<!DOCTYPE html>
<html lang="en">

<head>
	<title>Data Jadwal</title>
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/agency/assets/logo.ico') ?>"/>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">
</head>
<div class="pull-right">
<a href="<?= site_url('home/tambah_data') ?>" class="btn btn-success">Input Data</a>
<a href="<?= site_url('home/index') ?>" class="btn btn-danger">Logout</a>
	<a><?php echo $this->session->userdata('user_operator'); ?> </a>
</div>
<body>
<div class="container-fluid">
	<p class="text-center h2"><strong>Jadwal Ujian Skripsi/Tesis/Disertasi</strong></p>
	<table id="mydata" class="table table-striped table-bordered" style="width:100%">
		<thead>
		<tr>
			<td>No</td>
			<td>NIM</td>
			<td>Nama Mahasiswa</td>
			<td>Program Studi</td>
			<td>Jenis Ujian</td>
			<td>Ruang Ujian</td>
			<td>Tanggal Ujian</td>
			<td>Jam Mulai</td>
			<td>Jam Selesai</td>
			<td>Dosen Penguji</td>
			<td>Penguji Ke-</td>
		</tr>
		</thead>
		<tbody>
		<?php $no = 1; ?>
		<?php foreach ($data as $key) { ?>
			<tr>
				<td><?= $no++?></td>
				<td><?= $key->nim?></td>
				<td><?= $key->nama_mahasiswa?></td>
				<td><?= $key->nama_prodi?></td>
				<td><?= $key->jenis_ujian?></td>
				<td><?= $key->tempat_ujian?></td>
				<td><?= $key->tanggal_ujian?></td>
				<td><?= $key->jam_mulai?></td>
				<td><?= $key->jam_selesai?></td>
				<td><?= $key->nama_dosen?></td>
				<td><?= $key->penguji_ke?></td>
			</tr>
		<?php } ?>
		</tbody>
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>
	</table>
</div>

<script>
	$(document).ready(function () {
		$('#mydata').DataTable();
	});
</script>

</body>

</html>

