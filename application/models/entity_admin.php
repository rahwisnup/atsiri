<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class entity_admin extends CI_Model {

	public $variable;

	public function __construct(){
		parent::__construct();
		
	}
    
    public function get_id_pemilik(){
            $this ->db->select('id_pemilik');
            $this->db->from('pemilik');
            $result = $this->db->get();
            return $result -> result();
    }
    public function get_pemilik(){
        $hasil = $this->db->get('pemilik');
            if ($hasil->num_rows() > 0) {
                return $hasil ->result();
            }
            else{
                return 0;
            }
    }

    public function get_id_provinsi(){
            $this ->db->select('id_provinsi');
            $this->db->from('provinsi');
            $result = $this->db->get();
            return $result -> result();
    }

    public function get_provinsi(){
        $hasil = $this->db->get('provinsi');
            if ($hasil->num_rows() > 0) {
                return $hasil ->result();
            }
            else{
                return 0;
            }
    }

    public function get_id_kabupaten(){
            $this ->db->select('id_kabupaten');
            $this->db->from('kabupaten');
            $result = $this->db->get();
            return $result -> result();
    }

    public function get_id_kategori(){
            $this ->db->select('id_kategori');
            $this->db->from('kategori');
            $result = $this->db->get();
            return $result -> result();
    }

    public function get_id_tanaman(){
            $this ->db->select('id_tanaman');
            $this->db->from('tanaman');
            $result = $this->db->get();
            return $result -> result();
    }

    public function get_kabupaten(){
        $hasil = $this->db->get('kabupaten');
            if ($hasil->num_rows() > 0) {
                return $hasil ->result();
            }
            else{
                return 0;
            }
    }

    public function get_kategori(){
        $hasil = $this->db->get('kategori');
            if ($hasil->num_rows() > 0) {
                return $hasil ->result();
            }
            else{
                return 0;
            }
    }
    public function get_tanaman(){
        $hasil = $this->db->get('tanaman');
            if ($hasil->num_rows() > 0) {
                return $hasil ->result();
            }
            else{
                return 0;
            }
    }

    public function get_id_lahan(){
            $this ->db->select('id_lahan');
            $this->db->from('lahan');
            $result = $this->db->get();
            return $result -> result();
    }

    public function get_lahan(){
        $hasil = $this->db->get('lahan');
            if ($hasil->num_rows() > 0) {
                return $hasil ->result();
            }
            else{
                return 0;
            }
    }
	public function get_member()
	{
		$query =  $this->db->query("select * from user a, member b where a.id=b.id_user and level='admin' Order by tanggal_daftar desc");
    	return $query->result_array();
	}
}

/* End of file entity_admin.php */
/* Location: ./application/models/entity_admin.php */