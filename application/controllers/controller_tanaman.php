<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class controller_tanaman extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			$this->load->model('entity_tanaman');
		}
	

		public function tambah($data)
		{
			$this->entity_tanaman->add_tanaman($data);
		}
		public function tambah_lahan($data)
		{
			$this->entity_tanaman->add_lahan($data);
		}
		public function tambah_karakteristik_lahan($data)
		{
			$this->entity_tanaman->add_karakteristik_lahan($data);
		}
		public function tambah_karakteristik($data)
		{
			$this->entity_tanaman->add_karakteristik($data);
		}
		public function tambah_pemilik($data)
		{
			$this->entity_tanaman->add_pemilik($data);
		}
		public function tambah_kategori($data)
		{
			$this->entity_tanaman->add_kategori($data);
		}
		public function tambah_info_lahan($data)
		{
			$this->entity_tanaman->add_info_lahan($data);
		}
		public function tambah_tanam($data)
		{
			$this->entity_tanaman->add_tanam($data);
		}
		public function tambah_panen($data)
		{
			$this->entity_tanaman->add_panen($data);
		}
		public function tambah_provinsi($data)
		{
			$this->entity_tanaman->add_provinsi($data);
		}
		public function tambah_kabupaten($data)
		{
			$this->entity_tanaman->add_kabupaten($data);
		}
		public function tambah_tanaman($data)
		{
			$this->entity_tanaman->add_tanaman($data);
		}
		public function tambah_informasi($data)
		{
			$this->entity_tanaman->add_informasi($data);
		}
		public function get_id_tanaman($id, $alamat)
		{
			$id_tanaman = $this->entity_tanaman->getID($id, $alamat);
			return $id_tanaman[0]['id'];
		}
		public function Upload_gambar_tanaman($data)
		{
			$this->entity_tanaman->upload_gambar($data);
		}
		public function get_list_tanaman($id)
		{
			$result = $this->entity_tanaman->list_tanaman($id);
			return $result;
		}
		public function deskripsi_tanaman($id){
			$result = $this->entity_tanaman->get_deskripsi_tanaman($id);
			return $result;
		}
		public function deskripsi_lahan($id){
			$result = $this->entity_tanaman->get_deskripsi_lahan($id);
			return $result;
		}
		public function deskripsi_info_lahan($id){
			$result = $this->entity_tanaman->get_deskripsi_info_lahan($id);
			return $result;
		}
		public function deskripsi_pemilik($id){
			$result = $this->entity_tanaman->get_deskripsi_pemilik($id);
			return $result;
		}
		public function deskripsi_kabupaten($id){
			$result = $this->entity_tanaman->get_deskripsi_kabupaten($id);
			return $result;
		}
		public function deskripsi_kategori($id){
			$result = $this->entity_tanaman->get_deskripsi_kategori($id);
			return $result;
		}
		public function deskripsi_panen($id){
			$result = $this->entity_tanaman->get_deskripsi_panen($id);
			return $result;
		}
		public function deskripsi_tanam($id){
			$result = $this->entity_tanaman->get_deskripsi_tanam($id);
			return $result;
		}
                public function edit_karakteristik($id, $data){
        	$this->entity_tanaman->update_karakteristik($id, $data);
    	        }
                public function deskripsi_karakteristik($id){
			$result = $this->entity_tanaman->get_deskripsi_karakteristik($id);
			return $result;
		}
		public function get_gambar_tanaman($id)
		{
			$result = $this->entity_tanaman->get_gambar($id);
			return $result;
		}
		public function delete_tanaman($id){
			if($this->entity_tanaman->hapus_tanaman($id)){
				return true;
			} else {
				return false;
			}
		}
                public function delete_karakteristik_lahan($id){
			if($this->entity_tanaman->hapus_karakteristik_lahan($id)){
				return true;
			} else {
				return false;
			}
		}
		public function delete_lahan($id){
			if($this->entity_tanaman->hapus_lahan($id)){
				return true;
			} else {
				return false;
			}
		}
		public function delete_info_lahan($id){
			if($this->entity_tanaman->hapus_info_lahan($id)){
				return true;
			} else {
				return false;
			}
		}
		public function delete_pemilik($id){
			if($this->entity_tanaman->hapus_pemilik($id)){
				return true;
			} else {
				return false;
			}
		}
		public function delete_provinsi($id){
			if($this->entity_tanaman->hapus_provinsi($id)){
				return true;
			} else {
				return false;
			}
		}
		public function delete_kabupaten($id){
			if($this->entity_tanaman->hapus_kabupaten($id)){
				return true;
			} else {
				return false;
			}
		}
		public function delete_kategori($id){
			if($this->entity_tanaman->hapus_kategori($id)){
				return true;
			} else {
				return false;
			}
		}
		public function delete_panen($id){
			if($this->entity_tanaman->hapus_panen($id)){
				return true;
			} else {
				return false;
			}
		}
		public function delete_tanam($id){
			if($this->entity_tanaman->hapus_tanam($id)){
				return true;
			} else {
				return false;
			}
		}
		public function edit_tanaman($id, $data){
        	$this->entity_tanaman->update($id, $data);
    	}
    	public function edit_lahan($id, $data){
        	$this->entity_tanaman->update_lahan($id, $data);
    	}
    	public function edit_info_lahan($id, $data){
        	$this->entity_tanaman->update_info_lahan($id, $data);
    	}
    	public function edit_pemilik($id, $data){
        	$this->entity_tanaman->update_pemilik($id, $data);
    	}
    	public function edit_kabupaten($id, $data){
        	$this->entity_tanaman->update_kabupaten($id, $data);
    	}
    	public function edit_kategori($id, $data){
        	$this->entity_tanaman->update_kategori($id, $data);
    	}
    	public function edit_panen($id, $data){
    		$this->entity_tanaman->update_panen($id, $data);
    	}
    	public function edit_tanam($id, $data){
    		$this->entity_tanaman->update_tanam($id, $data);
    	}
    	public function get_cari_tanaman($data)
    	{
    		return $this->entity_tanaman->get_tanaman($data);
    	}
		public function list_tanamannya()
		{
			return $this->entity_tanaman->list_tanaman();
		}
		public function get_list(){
    		return $this->entity_tanaman->list_tanaman_semua();
    	}
		public function list_lahannya(){
			return $this->entity_tanaman->list_lahan();
		}
		public function list_karakteristik_lahannya(){
			return $this->entity_tanaman->list_karakteristik_lahan();
		}
		public function list_reportLokasiBalinya(){
			return $this->entity_tanaman->list_reportLokasiBali();
		}
		public function list_reportLokasiJatimnya(){
			return $this->entity_tanaman->list_reportLokasiJatim();
		}
		public function list_reportLokasiJatengnya(){
			return $this->entity_tanaman->list_reportLokasiJateng();
		}
		public function list_reportLokasiJabarnya(){
			return $this->entity_tanaman->list_reportLokasiJabar();
		}
                public function list_reportLokasiSultengnya(){
			return $this->entity_tanaman->list_reportLokasiSulteng();
		}



		public function list_reportKategoriNilamnya(){
			return $this->entity_tanaman->list_reportKategoriNilam();
		}
		public function list_reportKategoriSerehWanginya(){
			return $this->entity_tanaman->list_reportKategoriSerehWangi();
		}
                public function list_reportKategoriSidikalangnya(){
			return $this->entity_tanaman->list_reportKategoriSidikalang();
		}


		public function list_reportPemiliknya(){
			return $this->entity_tanaman->list_reportPemilik();
		}




		public function list_lahanBali(){
			return $this->entity_tanaman->list_lahanBalinya();
		}
		public function list_lahanJabar(){
			return $this->entity_tanaman->list_lahanJabarnya();
		}
		public function list_lahanJateng(){
			return $this->entity_tanaman->list_lahanJatengnya();
		}
		public function list_lahanJatim(){
			return $this->entity_tanaman->list_lahanJatimnya();
		}
		public function list_info_lahannya(){
			return $this->entity_tanaman->list_info_lahan();
		}
		public function list_pemiliknya(){
			return $this->entity_tanaman->list_pemilik();
		}
		public function list_provinsinya(){
			return $this->entity_tanaman->list_provinsi();
		}
		public function list_kabupatennya(){
			return $this->entity_tanaman->list_kabupaten();
		}
		public function list_kategorinya(){
			return $this->entity_tanaman->list_kategori();
		}
		public function list_panennya(){
			return $this->entity_tanaman->list_panen();
		}
		public function list_tanamnya(){
			return $this->entity_tanaman->list_tanam();
		}






		public function update_status($id, $data)
		{
			return $this->entity_tanaman->update($id,$data);
		}
	
	/* End of file controller_tanaman.php */
	/* Location: ./application/controllers/controller_tanaman.php */
}
	