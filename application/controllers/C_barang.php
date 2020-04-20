<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang','barang');
	}

	public function index()
	{
		
		$data['barang'] = $this->barang->get();
		$this->load->view('include/header');
		$this->load->view('barang/index',$data);
		$this->load->view('include/footer');
	}

	public function insert()
	{
		$this->load->view('barang/insert');
	}

	public function save()
	{
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$ongkos_seleb = $this->input->post('ongkos_seleb');
		$bahan_seleb = $this->input->post('bahan_seleb');
		$ongkos_crom = $this->input->post('ongkos_crom');
		$bahan_crom = $this->input->post('bahan_crom');
		$ongkos_hapus_cat = $this->input->post('ongkos_hapus_cat');
		$marketing = $this->input->post('marketing');
		$listrik = $this->input->post('listrik');
		$pengepakan_barang = $this->input->post('pengepakan_barang');
		$bonus = $this->input->post('bonus');
		$peralatan = $this->input->post('peralatan');
		$omset_pabrik = $this->input->post('omset_pabrik');
		$total_harga = $this->input->post('total_harga');
		
		$object = array(
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'ongkos_seleb' => $ongkos_seleb,
			'bahan_seleb' => $bahan_seleb,
			'ongkos_crom' => $ongkos_crom,
			'bahan_crom' => $bahan_crom,
			'ongkos_hapus_cat' => $ongkos_hapus_cat,
			'marketing' => $marketing,
			'listrik' => $listrik,
			'pengepakan_barang' => $pengepakan_barang,
			'bonus' => $bonus,
			'peralatan' => $peralatan,
			'omset_pabrik' => $omset_pabrik,
			'total_harga' => $total_harga
		);

		$save = $this->barang->insert($object);
		if ($save) {
			redirect('barang','refresh');
		}
	}

	public function edit($id)
	{
		$data['barang'] = $this->barang->get($id);
		$this->load->view('barang/insert',$data);
	}

	public function cek($id)
	{
		$data['barang'] = $this->barang->get($id);
		$this->load->view('barang/insert',$data);
	}

	public function update($id)
	{
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$ongkos_seleb = $this->input->post('ongkos_seleb');
		$bahan_seleb = $this->input->post('bahan_seleb');
		$ongkos_crom = $this->input->post('ongkos_crom');
		$bahan_crom = $this->input->post('bahan_crom');
		$ongkos_hapus_cat = $this->input->post('ongkos_hapus_cat');
		$marketing = $this->input->post('marketing');
		$listrik = $this->input->post('listrik');
		$pengepakan_barang = $this->input->post('pengepakan_barang');
		$bonus = $this->input->post('bonus');
		$peralatan = $this->input->post('peralatan');
		$omset_pabrik = $this->input->post('omset_pabrik');
		$total_harga = $this->input->post('total_harga');
		
		$object = array(
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'ongkos_seleb' => $ongkos_seleb,
			'bahan_seleb' => $bahan_seleb,
			'ongkos_crom' => $ongkos_crom,
			'bahan_crom' => $bahan_crom,
			'ongkos_hapus_cat' => $ongkos_hapus_cat,
			'marketing' => $marketing,
			'listrik' => $listrik,
			'pengepakan_barang' => $pengepakan_barang,
			'bonus' => $bonus,
			'peralatan' => $peralatan,
			'omset_pabrik' => $omset_pabrik,
			'total_harga' => $total_harga
		);

		$update = $this->barang->update($id,$object);
		if ($update) {
			redirect('barang','refresh');
		}
	}

	public function delete($id)
	{
		$delete = $this->barang->delete($id);
		if ($delete) {
			redirect('barang','refresh');
		}
	}

}

/* End of file C_barang.php */
/* Location: ./application/controllers/C_barang.php */