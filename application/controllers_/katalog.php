<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Katalog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		session_start();
	}
	
	function index()
	{
		echo "<meta http-equiv='refresh' content='0; url=".base_url()."katalog/lihat'>";
	}

	function lihat()
	{
		$data['menu'] = $this->sandal_model->menu_kategori('0','0');
		$data['judul'] = "Download Katalog Produk - Nama Toko Online Anda, Nama Toko Online Anda Termurah dan Terlengkap di Indonesia - Nama Toko Online Anda";
		$data['slide_atas'] = $this->sandal_model->tampil_slide_produk(10);
		$data['slide_laris'] = $this->sandal_model->tampil_slide_produk_terlaris_kiri(3);
		$data['slide_baru'] = $this->sandal_model->tampil_produk(5);
		$data['slide_rekomendasi'] = $this->sandal_model->tampil_slide_produk(6);
		$data['intermezzo'] = $this->sandal_model->tampil_semua_berita(5,0);
		$data['testimonial'] = $this->sandal_model->tampil_testimonial(10,0);
		$data['banner'] = $this->sandal_model->tampil_banner();
		
		$session=isset($_SESSION['username_grosir_sandal']) ? $_SESSION['username_grosir_sandal']:'';
		if($session!=""){
			$pecah=explode("|",$session);
			$data["nama"]=$pecah[1];
		}
		
		$page=$this->uri->segment(3);
      	$limit=8;
		if(!$page):
		$offset = 0;
		else:
		$offset = $page;
		endif;	
		
		$data['katalog'] = $this->sandal_model->tampil_katalog($limit,$offset);
		$tot_hal = $this->sandal_model->hitung_isi_1tabel('tbl_katalog','');
		
		$config['base_url'] = base_url() . 'katalog/lihat/';
        	$config['total_rows'] = $tot_hal->num_rows();
        	$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
	    	$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
       		$this->pagination->initialize($config);
		$data["paginator"] =$this->pagination->create_links();
		
		$this->load->view('web/bg_top',$data);
		$this->load->view('web/bg_left',$data);
		$this->load->view('web/bg_katalog',$data);
		$this->load->view('web/bg_right');
		$this->load->view('web/bg_bottom');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
