<?php


	class m_user extends CI_Model
	{
		private $table = 'tb_user';


		public function cek_login($input_id, $input_pasword)
		{
			$this->db->where('user_operator', $input_id);
			$this->db->where('password_operator', $input_pasword);
			return $this->db->get($this->table);
		}

		public function getAll()
		{
			return $this->db->get($this->table)->result();
		}

		public function create($object)
		{
			return $this->db->insert($this->table, $object);
		}

		public function delete($input_id)
		{

			$this->db->delete($this->table, ['user_operator' => $input_id]);
		}

		public function getWhere($input_id)
		{
			return $this->db->get_where($this->table, ['user_operator' => $input_id])->row_object();
		}

		public function update($data, $where, $table)
		{
			$this->db->where($where);
			$this->db->update($table, $data);
		}

	}

