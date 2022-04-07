<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	class jadwal	extends	CI_Controller
	{
		function __construct()
		{
			parent::__construct();

			$this->load->model('m_jadwal');
		}

		public function index()
		{
			$data['data'] = $this->db->get('jadwal')->result();
			$this->load->view('v_jadwal', $data);
		}

		public function simpan()
		{
			$data [1]=
				[
   				'nim' => $this->input->post('nim'),
				'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
				'nama_prodi' => $this->input->post('nama_prodi'),
				'jenis_ujian' => $this->input->post('jenis_ujian'),
				'tempat_ujian' => $this->input->post('tempat_ujian'),
				'tanggal_ujian' => $this->input->post('tanggal_ujian'),
				'jam_mulai' => $this->input->post('jam_mulai'),
				'jam_selesai' => $this->input->post('jam_selesai'),
				'nama_dosen' => $this->input->post('nama_dosen1'),
				'penguji_ke' => $this->input->post('penguji_ke1')
				];
			$data [2]=
				[
					'nim' => $this->input->post('nim'),
					'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
					'nama_prodi' => $this->input->post('nama_prodi'),
					'jenis_ujian' => $this->input->post('jenis_ujian'),
					'tempat_ujian' => $this->input->post('tempat_ujian'),
					'tanggal_ujian' => $this->input->post('tanggal_ujian'),
					'jam_mulai' => $this->input->post('jam_mulai'),
					'jam_selesai' => $this->input->post('jam_selesai'),
					'nama_dosen' => $this->input->post('nama_dosen2'),
					'penguji_ke' => $this->input->post('penguji_ke2')
				];
			$data [3]=
				[
					'nim' => $this->input->post('nim'),
					'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
					'nama_prodi' => $this->input->post('nama_prodi'),
					'jenis_ujian' => $this->input->post('jenis_ujian'),
					'tempat_ujian' => $this->input->post('tempat_ujian'),
					'tanggal_ujian' => $this->input->post('tanggal_ujian'),
					'jam_mulai' => $this->input->post('jam_mulai'),
					'jam_selesai' => $this->input->post('jam_selesai'),
					'nama_dosen' => $this->input->post('nama_dosen3'),
					'penguji_ke' => $this->input->post('penguji_ke3')
				];
			$data [4]=
				[
					'nim' => $this->input->post('nim'),
					'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
					'nama_prodi' => $this->input->post('nama_prodi'),
					'jenis_ujian' => $this->input->post('jenis_ujian'),
					'tempat_ujian' => $this->input->post('tempat_ujian'),
					'tanggal_ujian' => $this->input->post('tanggal_ujian'),
					'jam_mulai' => $this->input->post('jam_mulai'),
					'jam_selesai' => $this->input->post('jam_selesai'),
					'nama_dosen' => $this->input->post('nama_dosen4'),
					'penguji_ke' => $this->input->post('penguji_ke4')
				];
			/*$data [5]=
				[
					'nim' => $this->input->post('nim'),
					'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
					'nama_prodi' => $this->input->post('nama_prodi'),
					'jenis_ujian' => $this->input->post('jenis_ujian'),
					'tempat_ujian' => $this->input->post('tempat_ujian'),
					'tanggal_ujian' => $this->input->post('tanggal_ujian'),
					'jam_mulai' => $this->input->post('jam_mulai'),
					'jam_selesai' => $this->input->post('jam_selesai'),
					'nama_dosen' => $this->input->post('nama_dosen5'),
					'penguji_ke' => $this->input->post('penguji_ke5')
				];
			$data [6]=
				[
					'nim' => $this->input->post('nim'),
					'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
					'nama_prodi' => $this->input->post('nama_prodi'),
					'jenis_ujian' => $this->input->post('jenis_ujian'),
					'tempat_ujian' => $this->input->post('tempat_ujian'),
					'tanggal_ujian' => $this->input->post('tanggal_ujian'),
					'jam_mulai' => $this->input->post('jam_mulai'),
					'jam_selesai' => $this->input->post('jam_selesai'),
					'nama_dosen' => $this->input->post('nama_dosen6'),
					'penguji_ke' => $this->input->post('penguji_ke6')
				];
			$data [7]=
				[
					'nim' => $this->input->post('nim'),
					'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
					'nama_prodi' => $this->input->post('nama_prodi'),
					'jenis_ujian' => $this->input->post('jenis_ujian'),
					'tempat_ujian' => $this->input->post('tempat_ujian'),
					'tanggal_ujian' => $this->input->post('tanggal_ujian'),
					'jam_mulai' => $this->input->post('jam_mulai'),
					'jam_selesai' => $this->input->post('jam_selesai'),
					'nama_dosen' => $this->input->post('nama_dosen7'),
					'penguji_ke' => $this->input->post('penguji_ke7')
				];
			$data [8]=
				[
					'nim' => $this->input->post('nim'),
					'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
					'nama_prodi' => $this->input->post('nama_prodi'),
					'jenis_ujian' => $this->input->post('jenis_ujian'),
					'tempat_ujian' => $this->input->post('tempat_ujian'),
					'tanggal_ujian' => $this->input->post('tanggal_ujian'),
					'jam_mulai' => $this->input->post('jam_mulai'),
					'jam_selesai' => $this->input->post('jam_selesai'),
					'nama_dosen' => $this->input->post('nama_dosen8'),
					'penguji_ke' => $this->input->post('penguji_ke8')
				];*/

			$this->m_jadwal->create($data);
			redirect('jadwal/index', 'refresh');
		}

	}

