<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_inventory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_inventory','inventory');
	}

	public function index()
	{
		$data['inventory'] = $this->inventory->get();
		$this->load->view('include/header');
		$this->load->view('inventory/index',$data);
		$this->load->view('include/footer');
	}

	public function insert()
	{
		$this->load->view('inventory/insert');
	}

	public function save()
	{
        $no_inv = $this->input->post('no_inv');
		$nama_inv = $this->input->post('nama_inv');
		$jumlah = $this->input->post('jumlah');
		$satuan = $this->input->post('satuan');
		$harga_beli = $this->input->post('harga_beli');
		$keterangan = $this->input->post('keterangan');

		$object = array(
            'no_inv' => $no_inv,
			'nama_inv' => $nama_inv,
			'jumlah' => $jumlah,
			'satuan' => $satuan,
			'harga_beli' => md5($harga_beli),
			'keterangan' => $keterangan,
		);

		$save = $this->inventory->insert($object);
		if ($save) {
			redirect('inventory','refresh');
		}
	}

	public function edit($id)
	{
		$data['inventory'] = $this->inventory->get($id);
		$this->load->view('inventory/insert',$data);
	}

	public function update($id)
	{
        $no_inv = $this->input->post('no_inv');
		$nama_inv = $this->input->post('nama_inv');
		$jumlah = $this->input->post('jumlah');
		$satuan = $this->input->post('satuan');
		$harga_beli = $this->input->post('harga_beli');
		$keterangan = $this->input->post('keterangan');

		$object = array(
            'no_inv' => $no_inv,
			'nama_inv' => $nama_inv,
			'jumlah' => $jumlah,
			'satuan' => $satuan,
			'harga_beli' => md5($harga_beli),
			'keterangan' => $keterangan,
		
		);

		// echo json_encode($object);
		$update = $this->inventory->update($id,$object);
		if ($update) {
			redirect('inventory','refresh');
		}
	}

	public function delete($id)
	{
		$delete = $this->inventory->delete($id);
		if ($delete) {
			redirect('inventory','refresh');
		}
	}

}

/* End of file C_pegawai.php */
/* Location: ./application/controllers/C_pegawai.php */