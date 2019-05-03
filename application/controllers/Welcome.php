<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {	
	public function __construct() {
			parent::__construct();
			
			$this->load->model('model1');
		}

	public function index()
	{

		$this->load->view('countdown');
	}

	

	public function about()
	{
		
        
        $this->load->view('about');
        
	}
	public function contact()
	{
		
        
        $this->load->view('contact');
        
	}
	public function panduan()
	{
		
        
        $this->load->view('panduan');
        
	}


	public function cari() 
	{
		$data['list'] = $this->model1->get_view_settanggal();
		$this->load->view('search',$data);
	}
 
	public function hasil()
	{
		$data2['cari'] = $this->model1->cariOrang();
		$this->load->view('result', $data2);
	}

	
	
	function kirim_pesan(){
			$nama = $this->input->post('nama');
			$pesan = $this->input->post('pesan');
			$email = $this->input->post('email');
			$notelp = $this->input->post('notelp');
			$this->Model1->kirim_pesan($nama,$pesan,$email,$notelp);
			redirect('Welcome/contact');	
	}
	
	
		
	
}
