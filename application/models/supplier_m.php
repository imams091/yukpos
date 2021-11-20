<?php
class Supplier_m extends CI_Model {

	var $table = "tb_ttd";

	public function get($id = null)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		if($id != null) {
			$this->db->where('id_ttd', $id);
		}
		$this->db->order_by('nim', 'asc');
		$query = $this->db->get();
		return $query;
	}
	
	public function add($data)
	{
		$params = array(
			'nim' => $data['nim'],
            'nama' => $data['nama'],
			'jurusan' => $data['jurusan'],
			'kategori' => $data['kategori'],
			'tanggal' => $data['tanggal'],
			'penandatangan' => $data['penandatangan'],
			'ket' => $data['ket'],
			'semester' => $data['semester'],
			'tahun' => $data['tahun']
            //'description' => $data['desc'] == '' ? null : $data['desc']
		);
        $this->db->insert($this->table, $params);
	}



	public function edit($data)
	{
        $params = array(
			'id_ttd' => $data['id_ttd'],
			'nim' => $data['nim'],
            'nama' => $data['nama'],
			'jurusan' => $data['jurusan'],
			'kategori' => $data['kategori'],
			'tanggal' => $data['tanggal'],
			'penandatangan' => $data['penandatangan'],
			'ket' => $data['ket'],
			'semester' => $data['semester'],
			'tahun' => $data['tahun']
		);
		$this->db->where('tb_ttd', $data['id_ttd']);
        $this->db->update($this->table, $params);
	}
	

	public function del($id)
	{
		$this->db->where('id_ttd', $id);
        $this->db->delete($this->table);
	}

}