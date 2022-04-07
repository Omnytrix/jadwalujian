<!DOCTYPE html>
<html lang="id">

<head>
	<title>Tambah Jadwal</title>
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/agency/assets/logo.ico') ?>"/>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
	<script	src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
</head>
<div class="pull-right">
	<a href="<?= site_url('jadwal/index') ?>" class="btn btn-primary">Back</a>
	<a href="<?= site_url('home/index') ?>" class="btn btn-danger">Logout</a>
	<a><?php echo $this->session->userdata('user_operator'); ?> </a>
</div>
<body background="<?=base_url('assets/agency/bgfh1.jpg')?>" >
<div class="alert alert-primary" role="alert">
	<h3 class="font-weight-bolder" align="center">Tambah Data Jadwal Ujian Skripsi/Tesis/Disertasi</h3>
</div>
		<div class="container-fluid">
			<form action="<?= site_url('jadwal/simpan') ?>" method="post">
				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NIM</label>
					<input type=text name="nim" class=col-md size="20">
				</div>
				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama Mahasiswa</label>
					<input type=text name="nama_mahasiswa" class=col-md size="40">
				</div>
				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Program Studi</label>
					<input type=text name="nama_prodi" list="prodi" placeholder="--" id="nama_prodi" size="25">
					<datalist id="prodi">
						<option value="S1">
						<option value="MIH">
						<option value="MKN">
						<option value="DIH">
					</datalist>
				</div>
				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jenis Ujian</label>
					<input type=text name="jenis_ujian" list="jenisujian" placeholder="--" id="jenis_ujian" size="25">
					<datalist id="jenisujian">
						<option value="S1-Ujian Proposal">
						<option value="S1-Ujian Seminar Hasil">
						<option value="S1-Ujian Akhir">
						<option value="S2-Ujian Proposal">
						<option value="S2-Ujian Seminar Hasil">
						<option value="S2-Ujian Akhir">
						<option value="S3-Ujian Kelayakan Judul">
						<option value="S3-Ujian Komisi Proposal">
						<option value="S3-Ujian Proposal">
						<option value="S3-Ujian Seminar Hasil">
						<option value="S3-Ujian Komisi Tertutup">
						<option value="S3-Ujian Tertutup">
						<option value="S3-Ujian Terbuka">
					</datalist>
				</div>
				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Ruang Ujian</label>
					<input type=text name="tempat_ujian" class=col-md size="40">
				</div>
				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tanggal Ujian</label>
					<input type=text name="tanggal_ujian" class="datepicker">
				</div>
				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jam Mulai</label>
					<input type=text name="jam_mulai" list="mulai" placeholder="--"  size="5">
					<datalist id="mulai">
						<option value="07.00">
						<option value="07.30">
						<option value="08.00">
						<option value="08.30">
						<option value="09.00">
						<option value="09.30">
						<option value="10.00">
						<option value="10.30">
						<option value="11.00">
						<option value="11.30">
						<option value="12.00">
						<option value="12.30">
						<option value="13.00">
						<option value="13.30">
						<option value="14.00">
						<option value="14.30">
						<option value="15.00">
						<option value="15.30">
						<option value="16.00">
						<option value="16.30">
						<option value="17.00">
						<option value="17.30">
						<option value="18.00">
						<option value="18.30">
						<option value="19.00">
						<option value="19.30">
						<option value="20.00">
						<option value="20.30">
						<option value="21.00">
					</datalist>
				</div>
				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Jam Selesai</label>
					<input type=text name="jam_selesai" list="selesai" placeholder="--"  size="5">
					<datalist id="selesai">
						<option value="08.00">
						<option value="08.30">
						<option value="09.00">
						<option value="09.30">
						<option value="10.00">
						<option value="10.30">
						<option value="11.00">
						<option value="11.30">
						<option value="12.00">
						<option value="12.30">
						<option value="13.00">
						<option value="13.30">
						<option value="14.00">
						<option value="14.30">
						<option value="15.00">
						<option value="15.30">
						<option value="16.00">
						<option value="16.30">
						<option value="17.00">
						<option value="17.30">
						<option value="18.00">
						<option value="18.30">
						<option value="19.00">
						<option value="19.30">
						<option value="20.00">
						<option value="20.30">
						<option value="21.00">
						<option value="21.30">
						<option value="22.00">
					</datalist>
				</div>

				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Dosen Penguji</label>
					<input type=text name="penguji_ke1" list="penguji_ke" placeholder="--" id="penguji_ke1" size="1">
					<datalist id="penguji_ke">
						<option value="1">
						<option value="2">
						<option value="3">
						<option value="4">
						<option value="5">
						<option value="6">
						<option value="7">
						<option value="8">
					</datalist>
					<input type=text name="nama_dosen1" list="nama_dosen" placeholder="--" id="nama_dosen1" size="50">
					<datalist id="nama_dosen">
						<option value="AD. Basniwati, SH., MH.">
						<option value="Ahmad Zuhairi, SH., MH.">
						<option value="Ari Rahmad Hakim Budiawan F., SH., M.Hum.">
						<option value="Arief Rahman, SH., M.Hum.">
						<option value="Budi Sutrisno, SH., M.Hum.">
						<option value="Dewi Sartika, SH., MH.">
						<option value="Diangsa Wagian, M.Hum.">
						<option value="Diman Ade Mulada, SH.,M.H">
						<option value="Diva Pitaloka, SH., MH.">
						<option value="Dr .Chrisdianto Eko Purnomo, SH., MH.">
						<option value="Dr. Abdul Atsar, SH., MH.">
						<option value="Dr. Any Suryani Hamzah, SH, MH.">
						<option value="Dr. Aris Munandar, SH., M.Hum.">
						<option value="Dr. Eduardus Bayo Sili, SH., M.Hum.">
						<option value="Dr. H. Hirsanuddin, SH., M.Hum.">
						<option value="Dr. H. Kaharudin, SH., MH.">
						<option value="Dr. H. Lalu Parman, SH., M.Hum.">
						<option value="Dr. Hj. Rina Khairani Pancaningrum, SH., LL.M.">
						<option value="Dr. Lalu Wira Pria Suhartana, SH., MH.">
						<option value="Dr. Minollah, SH., MH.">
						<option value="Dr. Muh. Risnain, SH., MH.">
						<option value="Dr. Muhaimin, SH., M.Hum.">
						<option value="Dr. Rr. Cahyowati, SH., MH.">
						<option value="Dr. Ufran, SH., MH.">
						<option value="Dr. Widodo Dwi Putro, SH., M.Hum.">
						<option value="Dr. Zunnuraeni, SH., MH.">
						<option value="Dwi Martini, SH., MH.">
						<option value="Eka Jaya Subadi, SH., MH.">
						<option value="Erlies Septiana Nurbani, SH.LLM">
						<option value="Fatahullah, SH., MH.">
						<option value="H .Israfil, SH., M.Hum.">
						<option value="H. Fatahullah, SH., MH.">
						<option value="H. Lalu Adnan Ibrahim, SH., M.Hum.">
						<option value="H. Moh. Saleh, SH., M.Hum.">
						<option value="H. Sofwan, SH., M.Hum.">
						<option value="H. Supardan Mansyur, SH., MH.">
						<option value="H. Zaenal Arifin, SH., M.Hum.">
						<option value="H. Zaeni Asyhadie, SH., M.Hum.">
						<option value="H. A. Khair, SH., MH.,">
						<option value="Haeratun, S.Ag, SH., MH.">
						<option value="Haeruman Jayadi, SH., MH.">
						<option value="Hasan Asy'ari, SH., MH.">
						<option value="Hj. Mualifah, SH., MH.">
						<option value="I Gusti Agung Wisudawan, SH., MH.">
						<option value="Idi Amin, SH., MH.">
						<option value="Ita Surayya, SH., MH.">
						<option value="Johannes Johny Koynja, S.H., MH.">
						<option value="Joko Jumadi, SH., MH.">
						<option value="Kafrawi, SH., M.Si.">
						<option value="Khairus Febryan Fitrahadi, SH.MH">
						<option value="Laely Wulandari, SH.MH">
						<option value="Lalu Guna Nugraha, SH.,MH">
						<option value="Lalu Hadi Adha, SH., MH.">
						<option value="Lalu Muhammad Hayyanul Haq, SH., LLM., Ph.D.">
						<option value="Lalu Saipudin, SH., MH.">
						<option value="Lewis Grindulu, SH., MH.">
						<option value="M. Faisal, SH., MH.">
						<option value="M. Hotibul Islam, SH., M.Hum.">
						<option value="M. Saleh, SH., MH.">
						<option value="M. Yazid Fathoni, SH., MH.">
						<option value="Mohammad Irfan, SH., M.Hum.">
						<option value="Muhammad Jailani, SH., MH.">
						<option value="Muhammad Zainuddin, SH., MH.">
						<option value="Musakir Salat, SH., MH.">
						<option value="Nanda Ivan Natsir, SH., MH.">
						<option value="Prof. Dr. Amiruddin, SH., M.Hum.">
						<option value="Prof. Dr. Arba, SH., M.Hum">
						<option value="Prof. Dr. H. Djumardin, SH., M.Hum.">
						<option value="Prof. Dr. H. Gatot Dwi Hendro Wibowo, SH., M.Hum.">
						<option value="Prof. Dr. H. M. Galang Asmara, SH., M.Hum.">
						<option value="Prof. Dr. H. Salim HS, SH., MS.">
						<option value="Prof. Dr. H. Sudiarto, SH., M.Hum.">
						<option value="Prof. Dr. H. Zainal Asikin, SH., SU.">
						<option value="Prof. Dr. Hj. Rodliyah, SH., MH.">
						<option value="Prof. Dr. Kurniawan, SH., M.Hum.">
						<option value="Prof. Dr. Muhammad Sood, SH., MH.">
						<option value="Prof. Dr.H. Lalu Husni, SH., M.Hum.">
						<option value="Rahmawati Kusuma, SH., MH.">
						<option value="Ridwan, SH., MH.">
						<option value="Rusnan, SH., M.Hum.">
						<option value="Sahruddin, SH., MH.">
						<option value="Sarkawi, SH., MH.">
						<option value="Shinta Andriyani, SH., M.Kn.">
						<option value="Sri Hariati, M.Si.">
						<option value="Syamsul Hidayat, SH., MH.">
						<option value="Wiwiek Wahyuningsih, SH., M.Kn.">
						<option value="Yudhi Setiawan, SH., M.Hum.">
					</datalist>
				</div>
				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Dosen Penguji</label>
					<input type=text name="penguji_ke2" list="urut_uji" placeholder="--" id="penguji_ke2" size="1">
					<datalist id="urut_uji">
						<option value="1">
						<option value="2">
						<option value="3">
						<option value="4">
						<option value="5">
						<option value="6">
						<option value="7">
						<option value="8">
					</datalist>
					<input type=text name="nama_dosen2" list="nama" placeholder="--" id="nama_dosen2" size="50">
					<datalist id="nama">
						<option value="AD. Basniwati, SH., MH.">
						<option value="Ahmad Zuhairi, SH., MH.">
						<option value="Ari Rahmad Hakim Budiawan F., SH., M.Hum.">
						<option value="Arief Rahman, SH., M.Hum.">
						<option value="Budi Sutrisno, SH., M.Hum.">
						<option value="Dewi Sartika, SH., MH.">
						<option value="Diangsa Wagian, M.Hum.">
						<option value="Diman Ade Mulada, SH.,M.H">
						<option value="Diva Pitaloka, SH., MH.">
						<option value="Dr .Chrisdianto Eko Purnomo, SH., MH.">
						<option value="Dr. Abdul Atsar, SH., MH.">
						<option value="Dr. Any Suryani Hamzah, SH, MH.">
						<option value="Dr. Aris Munandar, SH., M.Hum.">
						<option value="Dr. Eduardus Bayo Sili, SH., M.Hum.">
						<option value="Dr. H. Hirsanuddin, SH., M.Hum.">
						<option value="Dr. H. Kaharudin, SH., MH.">
						<option value="Dr. H. Lalu Parman, SH., M.Hum.">
						<option value="Dr. Hj. Rina Khairani Pancaningrum, SH., LL.M.">
						<option value="Dr. Lalu Wira Pria Suhartana, SH., MH.">
						<option value="Dr. Minollah, SH., MH.">
						<option value="Dr. Muh. Risnain, SH., MH.">
						<option value="Dr. Muhaimin, SH., M.Hum.">
						<option value="Dr. Rr. Cahyowati, SH., MH.">
						<option value="Dr. Ufran, SH., MH.">
						<option value="Dr. Widodo Dwi Putro, SH., M.Hum.">
						<option value="Dr. Zunnuraeni, SH., MH.">
						<option value="Dwi Martini, SH., MH.">
						<option value="Eka Jaya Subadi, SH., MH.">
						<option value="Erlies Septiana Nurbani, SH.LLM">
						<option value="Fatahullah, SH., MH.">
						<option value="H .Israfil, SH., M.Hum.">
						<option value="H. Fatahullah, SH., MH.">
						<option value="H. Lalu Adnan Ibrahim, SH., M.Hum.">
						<option value="H. Moh. Saleh, SH., M.Hum.">
						<option value="H. Sofwan, SH., M.Hum.">
						<option value="H. Supardan Mansyur, SH., MH.">
						<option value="H. Zaenal Arifin, SH., M.Hum.">
						<option value="H. Zaeni Asyhadie, SH., M.Hum.">
						<option value="H. A. Khair, SH., MH.,">
						<option value="Haeratun, S.Ag, SH., MH.">
						<option value="Haeruman Jayadi, SH., MH.">
						<option value="Hasan Asy'ari, SH., MH.">
						<option value="Hj. Mualifah, SH., MH.">
						<option value="I Gusti Agung Wisudawan, SH., MH.">
						<option value="Idi Amin, SH., MH.">
						<option value="Ita Surayya, SH., MH.">
						<option value="Johannes Johny Koynja, S.H., MH.">
						<option value="Joko Jumadi, SH., MH.">
						<option value="Kafrawi, SH., M.Si.">
						<option value="Khairus Febryan Fitrahadi, SH.MH">
						<option value="Laely Wulandari, SH.MH">
						<option value="Lalu Guna Nugraha, SH.,MH">
						<option value="Lalu Hadi Adha, SH., MH.">
						<option value="Lalu Muhammad Hayyanul Haq, SH., LLM., Ph.D.">
						<option value="Lalu Saipudin, SH., MH.">
						<option value="Lewis Grindulu, SH., MH.">
						<option value="M. Faisal, SH., MH.">
						<option value="M. Hotibul Islam, SH., M.Hum.">
						<option value="M. Saleh, SH., MH.">
						<option value="M. Yazid Fathoni, SH., MH.">
						<option value="Mohammad Irfan, SH., M.Hum.">
						<option value="Muhammad Jailani, SH., MH.">
						<option value="Muhammad Zainuddin, SH., MH.">
						<option value="Musakir Salat, SH., MH.">
						<option value="Nanda Ivan Natsir, SH., MH.">
						<option value="Prof. Dr. Amiruddin, SH., M.Hum.">
						<option value="Prof. Dr. Arba, SH., M.Hum">
						<option value="Prof. Dr. H. Djumardin, SH., M.Hum.">
						<option value="Prof. Dr. H. Gatot Dwi Hendro Wibowo, SH., M.Hum.">
						<option value="Prof. Dr. H. M. Galang Asmara, SH., M.Hum.">
						<option value="Prof. Dr. H. Salim HS, SH., MS.">
						<option value="Prof. Dr. H. Sudiarto, SH., M.Hum.">
						<option value="Prof. Dr. H. Zainal Asikin, SH., SU.">
						<option value="Prof. Dr. Hj. Rodliyah, SH., MH.">
						<option value="Prof. Dr. Kurniawan, SH., M.Hum.">
						<option value="Prof. Dr. Muhammad Sood, SH., MH.">
						<option value="Prof. Dr.H. Lalu Husni, SH., M.Hum.">
						<option value="Rahmawati Kusuma, SH., MH.">
						<option value="Ridwan, SH., MH.">
						<option value="Rusnan, SH., M.Hum.">
						<option value="Sahruddin, SH., MH.">
						<option value="Sarkawi, SH., MH.">
						<option value="Shinta Andriyani, SH., M.Kn.">
						<option value="Sri Hariati, M.Si.">
						<option value="Syamsul Hidayat, SH., MH.">
						<option value="Wiwiek Wahyuningsih, SH., M.Kn.">
						<option value="Yudhi Setiawan, SH., M.Hum.">
					</datalist>
				</div>
				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Dosen Penguji</label>
					<input type=text name="penguji_ke3" list="urut_uji" placeholder="--" id="penguji_ke3" size="1">
					<datalist id="urut_uji">
						<option value="1">
						<option value="2">
						<option value="3">
						<option value="4">
						<option value="5">
						<option value="6">
						<option value="7">
						<option value="8">
					</datalist>
					<input type=text name="nama_dosen3" list="nama" placeholder="--" id="nama_dosen3" size="50">
					<datalist id="nama">
						<option value="AD. Basniwati, SH., MH.">
						<option value="Ahmad Zuhairi, SH., MH.">
						<option value="Ari Rahmad Hakim Budiawan F., SH., M.Hum.">
						<option value="Arief Rahman, SH., M.Hum.">
						<option value="Budi Sutrisno, SH., M.Hum.">
						<option value="Dewi Sartika, SH., MH.">
						<option value="Diangsa Wagian, M.Hum.">
						<option value="Diman Ade Mulada, SH.,M.H">
						<option value="Diva Pitaloka, SH., MH.">
						<option value="Dr .Chrisdianto Eko Purnomo, SH., MH.">
						<option value="Dr. Abdul Atsar, SH., MH.">
						<option value="Dr. Any Suryani Hamzah, SH, MH.">
						<option value="Dr. Aris Munandar, SH., M.Hum.">
						<option value="Dr. Eduardus Bayo Sili, SH., M.Hum.">
						<option value="Dr. H. Hirsanuddin, SH., M.Hum.">
						<option value="Dr. H. Kaharudin, SH., MH.">
						<option value="Dr. H. Lalu Parman, SH., M.Hum.">
						<option value="Dr. Hj. Rina Khairani Pancaningrum, SH., LL.M.">
						<option value="Dr. Lalu Wira Pria Suhartana, SH., MH.">
						<option value="Dr. Minollah, SH., MH.">
						<option value="Dr. Muh. Risnain, SH., MH.">
						<option value="Dr. Muhaimin, SH., M.Hum.">
						<option value="Dr. Rr. Cahyowati, SH., MH.">
						<option value="Dr. Ufran, SH., MH.">
						<option value="Dr. Widodo Dwi Putro, SH., M.Hum.">
						<option value="Dr. Zunnuraeni, SH., MH.">
						<option value="Dwi Martini, SH., MH.">
						<option value="Eka Jaya Subadi, SH., MH.">
						<option value="Erlies Septiana Nurbani, SH.LLM">
						<option value="Fatahullah, SH., MH.">
						<option value="H .Israfil, SH., M.Hum.">
						<option value="H. Fatahullah, SH., MH.">
						<option value="H. Lalu Adnan Ibrahim, SH., M.Hum.">
						<option value="H. Moh. Saleh, SH., M.Hum.">
						<option value="H. Sofwan, SH., M.Hum.">
						<option value="H. Supardan Mansyur, SH., MH.">
						<option value="H. Zaenal Arifin, SH., M.Hum.">
						<option value="H. Zaeni Asyhadie, SH., M.Hum.">
						<option value="H. A. Khair, SH., MH.,">
						<option value="Haeratun, S.Ag, SH., MH.">
						<option value="Haeruman Jayadi, SH., MH.">
						<option value="Hasan Asy'ari, SH., MH.">
						<option value="Hj. Mualifah, SH., MH.">
						<option value="I Gusti Agung Wisudawan, SH., MH.">
						<option value="Idi Amin, SH., MH.">
						<option value="Ita Surayya, SH., MH.">
						<option value="Johannes Johny Koynja, S.H., MH.">
						<option value="Joko Jumadi, SH., MH.">
						<option value="Kafrawi, SH., M.Si.">
						<option value="Khairus Febryan Fitrahadi, SH.MH">
						<option value="Laely Wulandari, SH.MH">
						<option value="Lalu Guna Nugraha, SH.,MH">
						<option value="Lalu Hadi Adha, SH., MH.">
						<option value="Lalu Muhammad Hayyanul Haq, SH., LLM., Ph.D.">
						<option value="Lalu Saipudin, SH., MH.">
						<option value="Lewis Grindulu, SH., MH.">
						<option value="M. Faisal, SH., MH.">
						<option value="M. Hotibul Islam, SH., M.Hum.">
						<option value="M. Saleh, SH., MH.">
						<option value="M. Yazid Fathoni, SH., MH.">
						<option value="Mohammad Irfan, SH., M.Hum.">
						<option value="Muhammad Jailani, SH., MH.">
						<option value="Muhammad Zainuddin, SH., MH.">
						<option value="Musakir Salat, SH., MH.">
						<option value="Nanda Ivan Natsir, SH., MH.">
						<option value="Prof. Dr. Amiruddin, SH., M.Hum.">
						<option value="Prof. Dr. Arba, SH., M.Hum">
						<option value="Prof. Dr. H. Djumardin, SH., M.Hum.">
						<option value="Prof. Dr. H. Gatot Dwi Hendro Wibowo, SH., M.Hum.">
						<option value="Prof. Dr. H. M. Galang Asmara, SH., M.Hum.">
						<option value="Prof. Dr. H. Salim HS, SH., MS.">
						<option value="Prof. Dr. H. Sudiarto, SH., M.Hum.">
						<option value="Prof. Dr. H. Zainal Asikin, SH., SU.">
						<option value="Prof. Dr. Hj. Rodliyah, SH., MH.">
						<option value="Prof. Dr. Kurniawan, SH., M.Hum.">
						<option value="Prof. Dr. Muhammad Sood, SH., MH.">
						<option value="Prof. Dr.H. Lalu Husni, SH., M.Hum.">
						<option value="Rahmawati Kusuma, SH., MH.">
						<option value="Ridwan, SH., MH.">
						<option value="Rusnan, SH., M.Hum.">
						<option value="Sahruddin, SH., MH.">
						<option value="Sarkawi, SH., MH.">
						<option value="Shinta Andriyani, SH., M.Kn.">
						<option value="Sri Hariati, M.Si.">
						<option value="Syamsul Hidayat, SH., MH.">
						<option value="Wiwiek Wahyuningsih, SH., M.Kn.">
						<option value="Yudhi Setiawan, SH., M.Hum.">
					</datalist>
				</div>
				<div class=form-group-row>
					<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Dosen Penguji</label>
					<input type=text name="penguji_ke4" list="urut_uji" placeholder="--" id="penguji_ke4" size="1">
					<datalist id="urut_uji">
						<option value="1">
						<option value="2">
						<option value="3">
						<option value="4">
						<option value="5">
						<option value="6">
						<option value="7">
						<option value="8">
					</datalist>
					<input type=text name="nama_dosen4" list="nama" placeholder="--" id="nama_dosen4" size="50">
					<datalist id="nama">
						<option value="AD. Basniwati, SH., MH.">
						<option value="Ahmad Zuhairi, SH., MH.">
						<option value="Ari Rahmad Hakim Budiawan F., SH., M.Hum.">
						<option value="Arief Rahman, SH., M.Hum.">
						<option value="Budi Sutrisno, SH., M.Hum.">
						<option value="Dewi Sartika, SH., MH.">
						<option value="Diangsa Wagian, M.Hum.">
						<option value="Diman Ade Mulada, SH.,M.H">
						<option value="Diva Pitaloka, SH., MH.">
						<option value="Dr .Chrisdianto Eko Purnomo, SH., MH.">
						<option value="Dr. Abdul Atsar, SH., MH.">
						<option value="Dr. Any Suryani Hamzah, SH, MH.">
						<option value="Dr. Aris Munandar, SH., M.Hum.">
						<option value="Dr. Eduardus Bayo Sili, SH., M.Hum.">
						<option value="Dr. H. Hirsanuddin, SH., M.Hum.">
						<option value="Dr. H. Kaharudin, SH., MH.">
						<option value="Dr. H. Lalu Parman, SH., M.Hum.">
						<option value="Dr. Hj. Rina Khairani Pancaningrum, SH., LL.M.">
						<option value="Dr. Lalu Wira Pria Suhartana, SH., MH.">
						<option value="Dr. Minollah, SH., MH.">
						<option value="Dr. Muh. Risnain, SH., MH.">
						<option value="Dr. Muhaimin, SH., M.Hum.">
						<option value="Dr. Rr. Cahyowati, SH., MH.">
						<option value="Dr. Ufran, SH., MH.">
						<option value="Dr. Widodo Dwi Putro, SH., M.Hum.">
						<option value="Dr. Zunnuraeni, SH., MH.">
						<option value="Dwi Martini, SH., MH.">
						<option value="Eka Jaya Subadi, SH., MH.">
						<option value="Erlies Septiana Nurbani, SH.LLM">
						<option value="Fatahullah, SH., MH.">
						<option value="H .Israfil, SH., M.Hum.">
						<option value="H. Fatahullah, SH., MH.">
						<option value="H. Lalu Adnan Ibrahim, SH., M.Hum.">
						<option value="H. Moh. Saleh, SH., M.Hum.">
						<option value="H. Sofwan, SH., M.Hum.">
						<option value="H. Supardan Mansyur, SH., MH.">
						<option value="H. Zaenal Arifin, SH., M.Hum.">
						<option value="H. Zaeni Asyhadie, SH., M.Hum.">
						<option value="H. A. Khair, SH., MH.,">
						<option value="Haeratun, S.Ag, SH., MH.">
						<option value="Haeruman Jayadi, SH., MH.">
						<option value="Hasan Asy'ari, SH., MH.">
						<option value="Hj. Mualifah, SH., MH.">
						<option value="I Gusti Agung Wisudawan, SH., MH.">
						<option value="Idi Amin, SH., MH.">
						<option value="Ita Surayya, SH., MH.">
						<option value="Johannes Johny Koynja, S.H., MH.">
						<option value="Joko Jumadi, SH., MH.">
						<option value="Kafrawi, SH., M.Si.">
						<option value="Khairus Febryan Fitrahadi, SH.MH">
						<option value="Laely Wulandari, SH.MH">
						<option value="Lalu Guna Nugraha, SH.,MH">
						<option value="Lalu Hadi Adha, SH., MH.">
						<option value="Lalu Muhammad Hayyanul Haq, SH., LLM., Ph.D.">
						<option value="Lalu Saipudin, SH., MH.">
						<option value="Lewis Grindulu, SH., MH.">
						<option value="M. Faisal, SH., MH.">
						<option value="M. Hotibul Islam, SH., M.Hum.">
						<option value="M. Saleh, SH., MH.">
						<option value="M. Yazid Fathoni, SH., MH.">
						<option value="Mohammad Irfan, SH., M.Hum.">
						<option value="Muhammad Jailani, SH., MH.">
						<option value="Muhammad Zainuddin, SH., MH.">
						<option value="Musakir Salat, SH., MH.">
						<option value="Nanda Ivan Natsir, SH., MH.">
						<option value="Prof. Dr. Amiruddin, SH., M.Hum.">
						<option value="Prof. Dr. Arba, SH., M.Hum">
						<option value="Prof. Dr. H. Djumardin, SH., M.Hum.">
						<option value="Prof. Dr. H. Gatot Dwi Hendro Wibowo, SH., M.Hum.">
						<option value="Prof. Dr. H. M. Galang Asmara, SH., M.Hum.">
						<option value="Prof. Dr. H. Salim HS, SH., MS.">
						<option value="Prof. Dr. H. Sudiarto, SH., M.Hum.">
						<option value="Prof. Dr. H. Zainal Asikin, SH., SU.">
						<option value="Prof. Dr. Hj. Rodliyah, SH., MH.">
						<option value="Prof. Dr. Kurniawan, SH., M.Hum.">
						<option value="Prof. Dr. Muhammad Sood, SH., MH.">
						<option value="Prof. Dr.H. Lalu Husni, SH., M.Hum.">
						<option value="Rahmawati Kusuma, SH., MH.">
						<option value="Ridwan, SH., MH.">
						<option value="Rusnan, SH., M.Hum.">
						<option value="Sahruddin, SH., MH.">
						<option value="Sarkawi, SH., MH.">
						<option value="Shinta Andriyani, SH., M.Kn.">
						<option value="Sri Hariati, M.Si.">
						<option value="Syamsul Hidayat, SH., MH.">
						<option value="Wiwiek Wahyuningsih, SH., M.Kn.">
						<option value="Yudhi Setiawan, SH., M.Hum.">
					</datalist>
				</div>
				
				<div class=form-group>
					<button type=submit name="submit" class=btn-primary>
						Simpan Data
					</button>
					
				</div>
			</form>
		</div>
	</div>

	<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript">$('.datepicker').datepicker();</script>
</div>
</body>
</html>

