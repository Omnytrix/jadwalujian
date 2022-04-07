<?php

	class login	extends	CI_Controller
	{
		public function index()
		{
			$this->load->view('v_login');
		}
		public function	proses()
		{
			$input_id = $this->input->post('txtusername');
			$input_password = ($this->input->post('txtpassword'));

			$this->load->model('m_user');
			$cek = $this->m_user->cek_login($input_id, $input_password);

			if ($cek->num_rows() > 0) {
				//jika sesuai maka ambil data tersebut
				$isi = $cek->row_object();
				$data_session = [
					'user_operator' => $isi->nama,
				];

				//masukkan data pengguna ke dalam session
				$this->session->set_userdata($data_session);
				redirect('jadwal/index');
			} else {
				//echo 'username dan password salah';
				$this->session->set_flashdata('Pesan', 'Username/Password Salah!!!	 ');
				redirect('login/index');
			}
		}

		public function	logout()
		{
			$this->session->sess_destroy();
			redirect('view/v_front');
		}
	}
