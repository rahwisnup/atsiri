<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH.'controllers/controller_pengguna.php';
require_once APPPATH.'controllers/controller_tanaman.php';

class Controller_admin extends controller_pengguna {
    private $def_lat;
    private $def_lng;

	function __construct() {
        parent::__construct();
        $this->load->model('entity_admin');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('entity_member');
        $this->load->model('entity_pengguna');

        $this->load->helper(array('form','url'));
        // Load Config Map
        $this->load->config('map');
        // Set lokasi latitude dan longitude
        $this->def_lat=$this->config->item('default_lat');
        $this->def_lng=$this->config->item('default_lng');
        
        //Load library googlemap
        //Sumber Library http://biostall.com/codeigniter-google-maps-v3-api-library
        $this->load->library('googlemaps');
        if($this->check_session_level()!='admin')
        {
            redirect(base_url('controller_pengguna/login'));
        }

    }
	
	public function index(){
		$this->get_kategori_tanaman();
	}

	public function get_list_member(){
		$member = $this->entity_admin->get_member();
		$data = array(
			'member' => $member,
			'perulangan' => count($member)
			);
		//print_r($member);
		$this->load->view('admin/member',$data);
	}

    
    public function get_list_pemilik(){

        $data_baru = new controller_tanaman();
        //ini untuk data tabel nya 
        $result = $data_baru->list_pemiliknya();
        $data = array(
            'data_pemilik' => $result,
            'perulangan' => count($result)
            );

        if($this->input->post()){
            $pemilik = array(
                'nama_pemilik' => $this->input->post('nama_pemilik'),
                'alamat_pemilik' => $this->input->post('alamat_pemilik'),
                'no_rumah' => $this->input->post('no_rumah'),
                'no_telepon' => $this->input->post('no_telepon'),
                'no_handphone' => $this->input->post('no_handphone'),
                'status' => $this->input->post('status'),
                );
            $data_baru->tambah_pemilik($pemilik);  
        }

        $this->load->view('admin/pemilik', $data);
    }



    public function get_list_info_lahan(){
        $data_baru = new controller_tanaman();

        //untuk list info lahan nya
        $result = $data_baru->list_info_lahannya();

        $data = array(
            'data_info_lahan' => $result,
            'perulangan' => count($result)
            );

        //untuk lahan
        $result_id_lahan = $this->entity_admin->get_id_lahan();
            foreach ($result_id_lahan as $key) {
                $id = $key -> id_lahan;
            }
        $data['lahan'] = $this->entity_admin->get_lahan();
        $data['pemilik'] = $this->entity_admin->get_pemilik();


        if($this->input->post()){
            $info_lahan = array(
                'jenis_tanah' => $this->input->post('jenis_tanah'),
                'curah_hujan' => $this->input->post('curah_hujan'),
                'unsur_hara' => $this->input->post('unsur_hara'),
                'bahan_organik' => $this->input->post('bahan_organik'),
                'ketinggian_tempat' => $this->input->post('ketinggian_tempat'),
                'asal_benih' => $this->input->post('asal_benih'),
                'id_lahan' => $this->input->post('lahan'),
                );
            
            $data_baru->tambah_info_lahan($info_lahan);  
        }
        //$this->load->view('admin/lahan');
        $this->load->view('admin/info_lahan', $data);
    }

    public function get_list_lahan(){
        $data_baru = new controller_tanaman();

        $result = $data_baru->list_lahannya();

        $data = array(
            'data_lahan' => $result,
            'perulangan' => count($result)
            );
        
        //untuk pemilik
        $data['pemilik'] = $this->entity_admin->get_pemilik();
        $result_id_pemilik = $this->entity_admin->get_id_pemilik();
            foreach ($result_id_pemilik as $key) {
                $id = $key -> id_pemilik;
            }
            
        //untuk provinsi
        $data['provinsi'] = $this->entity_admin->get_provinsi();
        
        $result_id_provisni = $this->entity_admin->get_id_provinsi();
            foreach ($result_id_provisni as $key) {
                $id = $key -> id_provinsi;
            }

        //untuk kabupaten
        $data['kabupaten'] = $this->entity_admin->get_kabupaten();
        $result_id_provisni = $this->entity_admin->get_id_kabupaten();
            foreach ($result_id_provisni as $key) {
                $id = $key -> id_kabupaten;
        }

        //untuk tanaman
        $result_id_tanaman = $this->entity_admin->get_id_tanaman();
            foreach ($result_id_tanaman as $key) {
                $id = $key -> id_tanaman;
            }
        $data['tanaman'] = $this->entity_admin->get_tanaman();

        if($this->input->post()){
            //$id = $this->input->get('id_pemilik');
            $lahan = array(
                'luas' => $this->input->post('luas'),
                'alamat_lahan' => $this->input->post('alamat_lahan'),
                'lat' => $this->input->post('lat'),
                'long' => $this->input->post('long'),
                'nama_pengelola' => $this->input->post('nama_pengelola'),
                'alamat_pengelola' => $this->input->post('alamat_pengelola'),
                'no_telp_pengelola' => $this->input->post('no_telp_pengelola'),
                'id_tanaman' => $this->input->post('tanaman'),
                'id_pemilik' => $this->input->post('pemilik'),
                'id_provinsi' => $this->input->post('provinsi'),
                'id_kabupaten' => $this->input->post('kabupaten'),
                );
            
            $data_baru->tambah_lahan($lahan);  
        }
        $this->load->view('admin/lahan',$data);
    }

    public function get_list_tanaman() {     
        $data_baru = new controller_tanaman();
        //ini untuk data tabel nya 
        $result = $data_baru->list_tanamannya();
        $data = array(
            'data_tanaman' => $result,
            'perulangan' => count($result)
            );

        //untuk kategori
        $data['kategori'] = $this->entity_admin->get_kategori();
        $result_id_kategori = $this->entity_admin->get_id_kategori();
            foreach ($result_id_kategori as $key) {
                $id = $key -> id_kategori;
            }

        if($this->input->post()){
            $tanaman = array(
                'nama_tanaman' => $this->input->post('nama_tanaman'),
                'id_kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                );
            if(!empty($_FILES['foto']['name'])){
                        $dir_to_save = "gambar_tanaman/";
                        $nama_foto =  date("Ymd-His");
                        if (!is_dir($dir_to_save)){
                                mkdir($dir_to_save);
                            }
                            $config['upload_path'] = $dir_to_save;
                            $config['allowed_types'] = 'gif|jpg|png';
                            $this->load->library('upload', $config);
                            $path=$config['upload_path'].$nama_foto."-".$_FILES['foto']['name'];
                            copy($_FILES['foto']['tmp_name'],$path);
                            $pathfile =$nama_foto."-".$_FILES['foto']['name'];

                            $tanaman['gambar']= $pathfile;

                    }
            $data_baru->tambah_tanaman($tanaman);  
        }

        $this->load->view('admin/tanaman', $data);
    }

    public function get_list_panen(){
        $data_baru = new controller_tanaman();
        //untuk list lahan nya
        $result = $data_baru->list_panennya();

        $data = array(
            'data_panen' => $result,
            'perulangan' => count($result)
            );

        //untuk lahan
        $result_id_lahan = $this->entity_admin->get_id_lahan();
            foreach ($result_id_lahan as $key) {
                $id = $key -> id_lahan;
            }
        $data['lahan'] = $this->entity_admin->get_lahan();

        $date = date("Y-m-d H:i:s");
        
        if($this->input->post()){
            $panen = array(
                'tanggal_panen' => $this->input->post('tanggal_panen'),
                'luas_panen' => $this->input->post('luas_panen'),
                'jumlah_panen' => $this->input->post('jumlah_panen'),
                'id_lahan' => $this->input->post('lahan'),
                );
            $data_baru->tambah_panen($panen);  
        }

        $this->load->view('admin/panen', $data);
    }

    public function get_list_karakteristik_lahan(){
        $data_baru = new controller_tanaman();
        //untuk list lahan nya
        $result = $data_baru->list_karakteristik_lahannya();

        $data = array(
            'data_karakteristik_lahan' => $result,
            'perulangan' => count($result)
            );

        //untuk lahan
        $result_id_lahan = $this->entity_admin->get_id_lahan();
            foreach ($result_id_lahan as $key) {
                $id = $key -> id_lahan;
            }
        $data['lahan'] = $this->entity_admin->get_lahan();
        
        if($this->input->post()){
            $karakteristik_lahan = array(
                'jenis_tanah' => $this->input->post('jenis_tanah'),
                'curah_hujan' => $this->input->post('curah_hujan'),
                'unsur_hara' => $this->input->post('unsur_hara'),
                'id_lahan' => $this->input->post('lahan'),
                );
            $data_baru->tambah_karakteristik_lahan($karakteristik_lahan);  
        }

        $this->load->view('admin/karakteristik_lahan', $data);
    }

    public function get_list_tanam(){
        $data_baru = new controller_tanaman();
        //untuk list lahan nya
        $result = $data_baru->list_tanamnya();

        $data = array(
            'data_tanam' => $result,
            'perulangan' => count($result)
            );

        //untuk lahan
        $result_id_lahan = $this->entity_admin->get_id_lahan();
            foreach ($result_id_lahan as $key) {
                $id = $key -> id_lahan;
            }
        $data['lahan'] = $this->entity_admin->get_lahan();
        // $data['lahan'] = $this->entity_admin->get_provinsi();

        $date = date("Y-m-d H:i:s");
        
        if($this->input->post()){
            $tempoTanggal = $this->input->post('tanggal_tanam');
            // $tempTanggal = explode('/',$tempoTanggal);
            // $tempTanggal = implode('-',array($tempTanggal[2],$tempTanggal[1],$tempTanggal[0]));
            echo "".$tempoTanggal;
            // echo "".$tempTanggal;
            $tanam = array(
                'tanggal_tanam' => $tempoTanggal,
                'luas_tanam' => $this->input->post('luas_tanam'),
                'id_lahan' => $this->input->post('lahan'),
                );
            $data_baru->tambah_tanam($tanam);  
        }

        $this->load->view('admin/tanam', $data);
    }

    public function get_list_provinsi(){
        $data_baru = new controller_tanaman();
        //ini untuk data tabel nya 
        $result = $data_baru->list_provinsinya();
        $data = array(
            'data_provinsi' => $result,
            'perulangan' => count($result)
            );

        if($this->input->post()){
            $provinsi = array(
                'nama_provinsi' => $this->input->post('nama_provinsi'),
                );
            $data_baru->tambah_provinsi($provinsi);  
        }

        $this->load->view('admin/provinsi', $data);
    }

    public function get_list_kabupaten(){
        $data_baru = new controller_tanaman();
        $result = $data_baru->list_kabupatennya();
        $data = array(
            'data_kabupaten' => $result,
            'perulangan' => count($result)
            );

        $data['provinsi'] = $this->entity_admin->get_provinsi();

        $result_id_provisni = $this->entity_admin->get_id_provinsi();
            foreach ($result_id_provisni as $key) {
                $id = $key -> id_provinsi;
            }

        if($this->input->post()){
            $kabupaten = array(
                'id_provinsi' => $this->input->post('provinsi'),
                'nama_kabupaten' => $this->input->post('nama_kabupaten'),
                );
            
            $data_baru->tambah_kabupaten($kabupaten);  
        }
        $this->load->view('admin/kabupaten',$data);

    }

    public function get_kategori_tanaman(){
        $data_baru = new controller_tanaman();
        $result = $data_baru->list_kategorinya();
        $data = array(
            'data_kategori' => $result,
            'perulangan' => count($result)
            );
        if($this->input->post()){
            $kategori = array(
                'nama_kategori' => $this->input->post('nama_kategori'),
                );
            $data_baru->tambah_kategori($kategori);  
        }
        $this->load->view('admin/kategori', $data);
    }

    public function edit_data_tanaman($id=''){
        $tanaman = new controller_tanaman();
        if($_POST){
            $data_tanaman = array(
                'nama_tanaman' => $this->input->post('nama_tanaman'),
                'id_kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                );
            if(!empty($_FILES['foto']['name'])){
                        $dir_to_save = "gambar_tanaman/";
                        $nama_foto =  date("Ymd-His");
                        if (!is_dir($dir_to_save)){
                                mkdir($dir_to_save);
                            }
                            $config['upload_path'] = $dir_to_save;
                            $config['allowed_types'] = 'gif|jpg|png';
                            $this->load->library('upload', $config);
                            $path=$config['upload_path'].$nama_foto."-".$_FILES['foto']['name'];
                            copy($_FILES['foto']['tmp_name'],$path);
                            $pathfile =$nama_foto."-".$_FILES['foto']['name'];

                            $data_tanaman['gambar']= $pathfile;

                    }
            $tanaman->edit_tanaman($id, $data_tanaman); 
        }
        $deskripsi= $tanaman->deskripsi_tanaman($id);
        $data = array(
            'deskripsi' => $deskripsi,
            //'nama' => $result[0]['nama_tanaman'],
            );
        //untuk kategori
        $data['kategori'] = $this->entity_admin->get_kategori();
        $result_id_kategori = $this->entity_admin->get_id_kategori();
            foreach ($result_id_kategori as $key) {
                $id = $key -> id_kategori;
            }
        $this->load->view("admin/edit_tanaman", $data);
    }

    public function edit_data_kategori($id=''){
        $kategori = new controller_tanaman();
        if($_POST){
            $data_kategori = array(
                'nama_kategori' => $this->input->post('nama_kategori'),
                );
            $kategori->edit_kategori($id, $data_kategori); 
        }
        $deskripsi= $kategori->deskripsi_kategori($id);
        $data = array(
            'deskripsi' => $deskripsi,
            );
        $this->load->view("admin/edit_kategori", $data);
    }

    public function edit_data_pemilik($id=''){
        $pemilik = new controller_tanaman();
        if($_POST){
            $data_pemilik = array(
                'nama_pemilik' => $this->input->post('nama_pemilik'),
                'alamat_pemilik' => $this->input->post('alamat_pemilik'),
                'no_rumah' => $this->input->post('no_rumah'),
                'no_telepon' => $this->input->post('no_telepon'),
                'no_handphone' => $this->input->post('no_handphone'),
                'status' => $this->input->post('status'),
                );
            $pemilik->edit_pemilik($id, $data_pemilik); 
        }
        $deskripsi= $pemilik->deskripsi_pemilik($id);
        $data = array(
            'deskripsi' => $deskripsi,
            );
        $this->load->view("admin/edit_pemilik", $data);

    }

    public function edit_data_lahan($id=''){
        $lahan = new controller_tanaman();
        if($this->input->post()){
            $data_lahan = array(                
                'luas' => $this->input->post('luas'),
                'alamat_lahan' => $this->input->post('alamat_lahan'),
                'lat' => $this->input->post('lat'),
                'long' => $this->input->post('long'),
                'nama_pengelola' => $this->input->post('nama_pengelola'),
                'alamat_pengelola' => $this->input->post('alamat_pengelola'),
                'no_telp_pengelola' => $this->input->post('no_telp_pengelola'),
                'id_tanaman' => $this->input->post('tanaman'),
                'id_pemilik' => $this->input->post('pemilik'),
                'id_provinsi' => $this->input->post('provinsi'),
                'id_kabupaten' => $this->input->post('kabupaten'),
                );
            $lahan->edit_lahan($id, $data_lahan); 
        }

        //untuk memberikan deskripsi sebelumnbbya dari data
        $deskripsi= $lahan->deskripsi_lahan($id);
        $data = array(
            'deskripsi' => $deskripsi,
            );
        
        //untuk pemilik
        $data['pemilik'] = $this->entity_admin->get_pemilik();
        $result_id_pemilik = $this->entity_admin->get_id_pemilik();
            foreach ($result_id_pemilik as $key) {
                $id = $key -> id_pemilik;
            }
            
        //untuk provinsi
        $data['provinsi'] = $this->entity_admin->get_provinsi();
        
        $result_id_provisni = $this->entity_admin->get_id_provinsi();
            foreach ($result_id_provisni as $key) {
                $id = $key -> id_provinsi;
            }

        //untuk kabupaten
        $data['kabupaten'] = $this->entity_admin->get_kabupaten();
        $result_id_provisni = $this->entity_admin->get_id_kabupaten();
            foreach ($result_id_provisni as $key) {
                $id = $key -> id_kabupaten;
        }

        //untuk tanaman
        $result_id_tanaman = $this->entity_admin->get_id_tanaman();
            foreach ($result_id_tanaman as $key) {
                $id = $key -> id_tanaman;
            }
        $data['tanaman'] = $this->entity_admin->get_tanaman();

        $this->load->view("admin/edit_lahan", $data);
    }

    public function edit_data_panen($id=''){
        $panen = new controller_tanaman();
        if($_POST){
            $data_panen = array(
                'tanggal_panen' => $this->input->post('tanggal_panen'),
                'luas_panen' => $this->input->post('luas_panen'),
                'jumlah_panen' => $this->input->post('jumlah_panen'),
                'id_lahan' => $this->input->post('lahan'),
                );
            $panen->edit_panen($id, $data_panen); 
        }
        $deskripsi= $panen->deskripsi_panen($id);
        $data = array(
            'deskripsi' => $deskripsi,
            //'nama' => $result[0]['nama_tanaman'],
            );
        //untuk lahan
        $data['lahan'] = $this->entity_admin->get_lahan();
        $result_id_lahan = $this->entity_admin->get_id_lahan();
            foreach ($result_id_lahan as $key) {
                $id = $key -> id_lahan;
            }
        $this->load->view("admin/edit_panen", $data);
    }

    public function edit_data_tanam($id=''){
        $tanam = new controller_tanaman();
        if($_POST){
            $data_tanam = array(
                'tanggal_tanam' => $this->input->post('tanggal_tanam'),
                'luas_tanam' => $this->input->post('luas_tanam'),
                'id_lahan' => $this->input->post('lahan'),
                );
            $tanam->edit_tanam($id, $data_tanam); 
        }
        $deskripsi= $tanam->deskripsi_tanam($id);
        $data = array(
            'deskripsi' => $deskripsi,
            //'nama' => $result[0]['nama_tanaman'],
            );
        //untuk lahan
        $data['lahan'] = $this->entity_admin->get_lahan();
        $result_id_lahan = $this->entity_admin->get_id_lahan();
            foreach ($result_id_lahan as $key) {
                $id = $key -> id_lahan;
            }
        $this->load->view("admin/edit_tanam", $data);
    }

    public function edit_data_karakteristik_lahan($id=''){
        $karakteristik = new controller_tanaman();
        if($_POST){
            $data_karakteristik = array(
               'jenis_tanah' => $this->input->post('jenis_tanah'),
                'curah_hujan' => $this->input->post('curah_hujan'),
                'unsur_hara' => $this->input->post('unsur_hara'),
                'id_lahan' => $this->input->post('lahan'),
                );
            $karakteristik->edit_karakteristik($id, $data_karakteristik); 
        }
        $deskripsi= $karakteristik->deskripsi_karakteristik($id);
        $data = array(
            'deskripsi' => $deskripsi,
            //'nama' => $result[0]['nama_tanaman'],
            );
        //untuk lahan
        $data['lahan'] = $this->entity_admin->get_lahan();
        $result_id_lahan = $this->entity_admin->get_id_lahan();
            foreach ($result_id_lahan as $key) {
                $id = $key -> id_lahan;
            }
        $this->load->view("admin/edit_karakteristik", $data);
    }


    public function edit_data_info_lahan($id=''){
        $info_lahan  = new controller_tanaman();

        //untuk mengambil data inputan
        if($this->input->post()){
            $data_info_lahan = array(                
                'jenis_tanah' => $this->input->post('jenis_tanah'),
                'curah_hujan' => $this->input->post('curah_hujan'),
                'unsur_hara' => $this->input->post('unsur_hara'),
                'bahan_organik' => $this->input->post('bahan_organik'),
                'ketinggian_tempat' => $this->input->post('ketinggian_tempat'),
                'asal_benih' => $this->input->post('asal_benih'),
                'id_lahan' => $this->input->post('lahan'),
                );
            $info_lahan->edit_info_lahan($id, $data_info_lahan); 
        }
        //untuk memberikan deskripsi sebelumnbbya dari data
        $deskripsi= $info_lahan->deskripsi_info_lahan($id);
        $data = array(
            'deskripsi' => $deskripsi,
            );

        //untuk lahan
        $data['lahan'] = $this->entity_admin->get_lahan();
        $result_id_lahan = $this->entity_admin->get_id_lahan();
            foreach ($result_id_lahan as $key) {
                $id = $key -> id_lahan;
            }
        $this->load->view("admin/edit_info_lahan", $data);
    }

    public function edit_data_kabupaten($id=''){
        $kabupaten = new controller_tanaman();
        if($this->input->post()){
            $data_kabupaten = array(                
                'nama_kabupaten' => $this->input->post('nama_kabupaten'),
                'id_provinsi' => $this->input->post('provinsi'),
                );
            $kabupaten->edit_kabupaten($id, $data_kabupaten); 
        }

        //untuk memberikan deskripsi sebelumnbbya dari data
        $deskripsi= $kabupaten->deskripsi_kabupaten($id);
        $data = array(
            'deskripsi' => $deskripsi,
            );
            
        //untuk provinsi
        $data['provinsi'] = $this->entity_admin->get_provinsi();
        
        $result_id_provisni = $this->entity_admin->get_id_provinsi();
            foreach ($result_id_provisni as $key) {
                $id = $key -> id_provinsi;
            }

        $this->load->view("admin/edit_kabupaten", $data);
    }

    public function get_list_reportPemilik(){
       $data_baru = new controller_tanaman();

        //untuk list lahan nya
        $result = $data_baru->list_reportPemiliknya();


        $data = array(
            'data_pemilik' => $result,
            'perulangan' => count($result),
            );

        $this->load->view('admin/reportPemilikAdmin',$data);
    }

    public function get_list_reportLokasi(){
        $data_baru = new controller_tanaman();
        //untuk list lahan nya
        $resultBali = $data_baru->list_reportLokasiBalinya();
        $resultJatim = $data_baru->list_reportLokasiJatimnya();
        $resultJateng = $data_baru->list_reportLokasiJatengnya();
        $resultJabar = $data_baru->list_reportLokasiJabarnya();
        $resultSulteng = $data_baru->list_reportLokasiSultengnya();

        $data = array(
            'data_lokasi_bali' => $resultBali,
            'data_lokasi_jatim' => $resultJatim,
            'data_lokasi_jateng' => $resultJateng,
            'data_lokasi_jabar' => $resultJabar,
            'data_lokasi_sulteng' => $resultSulteng,
            'perulangan_bali' => count($resultBali),
            'perulangan_jatim' => count($resultJatim),
            'perulangan_jateng' => count($resultJateng),
            'perulangan_jabar' => count($resultJabar),
            'perulangan_sulteng' => count($resultSulteng),
            );
        $this->load->view('admin/reportLokasiAdmin',$data);
    }
    public function get_list_reportKategori(){
       $data_baru = new controller_tanaman();

        //untuk list lahan nya
        $resultNilam = $data_baru->list_reportKategoriNilamnya();
        $resultSerehWangi = $data_baru->list_reportKategoriSerehWanginya();
        $resultSidikalang = $data_baru->list_reportKategoriSidikalangnya();


        $data = array(
            'data_kategoriNilam' => $resultNilam,
            'perulanganNilam' => count($resultNilam),
            'data_kategoriSerehWangi' => $resultSerehWangi,
            'perulanganSerehWangi' => count($resultSerehWangi),
            'data_kategoriSidikalang' => $resultSidikalang,
            'perulanganSidikalang' => count($resultSidikalang),
            );

        $this->load->view('admin/reportKategoriAdmin',$data);
    }

	public function delete_data_tanaman($id){
        $tanaman = new controller_tanaman();
        $result = $tanaman->delete_tanaman($id);
        redirect(base_url()."controller_admin/get_list_tanaman");
    }
    public function delete_data_lahan($id){
        $lahan = new controller_tanaman();
        $result = $lahan->delete_lahan($id);
        redirect(base_url()."controller_admin/get_list_lahan");
    }
    public function delete_data_karakteristik_lahan($id){
        $tanaman = new controller_tanaman();
        $result = $tanaman->delete_karakteristik_lahan($id);
        redirect(base_url()."controller_admin/get_list_karakteristik_lahan");
    }
    public function delete_data_info_lahan($id){
        $info_lahan = new controller_tanaman();
        $result = $info_lahan->delete_info_lahan($id);
        redirect(base_url()."controller_admin/get_list_info_lahan");
    }
    public function delete_data_pemilik($id){
        $pemilik = new controller_tanaman();
        $result = $pemilik->delete_pemilik($id);
        redirect(base_url()."controller_admin/get_list_pemilik");
    }
    public function delete_data_provinsi($id){
        $provinsi = new controller_tanaman();
        $result = $provinsi->delete_provinsi($id);
        redirect(base_url()."controller_admin/get_list_provinsi");
    }
    public function delete_data_kabupaten($id){
        $kabupaten = new controller_tanaman();
        $result = $kabupaten->delete_kabupaten($id);
        redirect(base_url()."controller_admin/get_list_kabupaten");
    }
    public function delete_data_kategori($id){
        $kategori = new controller_tanaman();
        $result = $kategori->delete_kategori($id);
        redirect(base_url()."controller_admin/get_kategori_tanaman");
    }
    public function delete_data_panen($id){
        $panen = new controller_tanaman();
        $result = $panen->delete_panen($id);
        redirect(base_url()."controller_admin/get_list_panen");
    }
    public function delete_data_tanam($id){
        $tanam = new controller_tanaman();
        $result = $tanam->delete_tanam($id);
        redirect(base_url()."controller_admin/get_list_tanam");
    }
}

/* End of file controller_admin.php */
/* Location: ./application/controllers/controller_admin.php */
				