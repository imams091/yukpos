<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	var $title = "TTD";

	function __construct()
	{
		parent::__construct();
        $this->load->model('supplier_m', 'supplier');
	}
    
	public function index()
	{
		check_login_session();

        $data['title'] = $this->title;
        $data['row'] = $this->supplier->get()->result();
		$this->template->load('_template', 'tandatangan/supplier_data', $data);
    }
    
    public function add()
    {
		check_login_session();

		$supplier = new stdClass();
		$supplier->id_ttd = null;
		$supplier->nim = null;
		$supplier->nama = null;
		$supplier->jurusan = null;
		$supplier->kategori = null;
		$supplier->tanggal = null;
		$supplier->penandatangan = null;
		$supplier->ket = null;
		$supplier->semeseter = null;
		$supplier->tahun = null;
		$data = array(
            'title' => $this->title,
            'page' => 'Tambah',
			'row' => $supplier
		);
        $this->template->load('_template', 'tandatangan/supplier_form', $data);   
    }

	public function edit($id)
	{
		check_login_session();

		if($id != null) {
			$query = $this->supplier->get($id);
			if($query->num_rows() > 0)
			{	
				$supplier = $query->row();
				$data = array
				(
                    'title' => $this->title,
                    'page' => 'edit',
                    'row' => $supplier
                );
		        $this->template->load('_template', 'tandatangan/supplier_form', $data);  
			}
			else{
				echo "<script>alert('Data tidak ditemukan');
				window.location='".site_url('supplier')."';</script>";
			}
		} else {
			echo "<script>window.location='".site_url('supplier')."';</script>";
		}
	}

    public function process()
	{
		check_login_session();

		if(isset($_POST['Tambah'])) {
            $data = $this->input->post(null, TRUE);
            $this->supplier->add($data);
		} else if(isset($_POST['edit'])) {
            $data = $this->input->post(null, TRUE);
            $this->supplier->edit($data);
		}

		if($this->db->affected_rows() == 1) {
			echo "<script>alert('Data berhasil disimpan');
			window.location='".site_url('supplier')."';</script>";
		} else {
			redirect('supplier');
		}
	}

    public function del($id)
	{
		check_login_session();

		$_id = $this->db->get_where('tb_ttd',['id_ttd' => $id])->row();
		$query = $this->db->delete('tb_ttd',['id_ttd'=>$id]);
		

		if($query) {
			unlink('upload/qrcode/ttd-'.$_id->id_ttd.'.png');
			echo "<script>alert('Data berhasil dihapus');
			window.location='".site_url('supplier')."';</script>";
		} else {
			echo "<script>window.location='".site_url('supplier')."';</script>";
		}
		


	}

	function qrcode($id){
		$data['title'] = $this->title;
		$data['row'] = $this->supplier->get($id)->row();
		$this->template->load('_template', 'tandatangan/qrcode', $data);
	}
}
