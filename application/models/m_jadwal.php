<?php

	class m_jadwal extends CI_Model
	{
		private $table = 'jadwal';
		public function getAll()
		{
			return $this->db->get($this->table)->result();
		}

		public function create($object)
		{
			return $this->db->insert_batch($this->table, $object);
		}

		public function update($data,$where, $table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	}

