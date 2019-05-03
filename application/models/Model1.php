<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model1 extends CI_Model{
	public function __construct() {
			parent::__construct();
		}	
	
	public function tampil_data()
	{
	    $sql = "SELECT * FROM asik2018";
		$tampil = $this->db->query($sql);
		return $tampil->result();
	}

	public function cek($username,$password){
        $this->db->where("username",$username);
        $this->db->where("password",$password);
        return $this->db->get("tabel_users");
    }


	
	function tambah_data($username,$password) {
			$data = array(
				'id' => '',
				'username' => $username,
				'password' => $password
				
				
				);
			$this->db->insert('tabel_users', $data);
		}

	function m_settanggal($settanggal) {
			$data = array(
				'id' => '',
				'settanggal' => $settanggal
				
				
				);
			$this->db->insert('tabel_settanggal', $data);
		}
	function kirim_pesan($nama,$pesan,$email,$notelp) {
			$data = array(
				'id' => '',
				'nama' => $nama,
				'pesan' => $pesan,
				'email' => $email,
				'notelp' => $notelp
				
				
				
				);
			$this->db->insert('tabel_pesan', $data);
		}
	function hapus($id) {
			$this->db->where('id', $id);
			$this->db->delete('tabel_users');
		}
	function hapus_pesan($id) {
			$this->db->where('id', $id);
			$this->db->delete('tabel_pesan');
		}

	function hapus_settanggal($id) {
			$this->db->where('id', $id);
			$this->db->delete('tabel_settanggal');
		}
		
	function getById($id) {
			return $this->db->get_where('tabel_users', array('id' => $id))->row();
		}
	function update($id) {
		$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			
			
			
			
			$data = array(
				'id' => $id,
				'username' => $username,
				'password' => $password
				
			
				);
				
			$this->db->where('id', $id);
			$this->db->update('tabel_users', $data);
		}
		public function cariOrang()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * FROM tabel_siswa INNER JOIN tabel_nilai ON tabel_siswa.no_ujian=tabel_nilai.no_ujian where tabel_siswa.no_ujian = '$cari'");
		return $data->result();
	}

	function get_siswa_list($limit, $start) {
			$query = $this->db->get('asik2018',$limit,$start);
			return $query;
		}

	function get_pesan_list($limit, $start) {
			$query = $this->db->get('tabel_pesan',$limit,$start);
			return $query;
		}

	function get_view_users() {
			$query = $this->db->get('tabel_users');
			return $query;
		}

	function get_view_listdata() {
			$sql = "SELECT * FROM tabel_siswa INNER JOIN tabel_nilai on tabel_siswa.no_ujian = tabel_nilai.no_ujian" ;
			$tampil = $this->db->query($sql);
			return $tampil;
		}

	function get_view_settanggal() {
			$sql = "SELECT * FROM tabel_settanggal";
			$tampil = $this->db->query($sql);
			return $tampil->result();
		}

	function get_view_settanggal2() {
			$query = $this->db->get('tabel_settanggal');
			return $query;
		}

	public function upload_file($filename){
		$this->load->library('upload'); // Load librari upload
		
		$config['upload_path'] = './excel/';
		$config['allowed_types'] = 'xlsx';
		$config['max_size']	= '2048';
		$config['overwrite'] = true;
		$config['file_name'] = $filename;
	
		$this->upload->initialize($config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
	public function insert_multiple($data){
		$this->db->insert_batch('tabel_siswa', $data);
	}
	public function insert_multiple2($data){
		$this->db->insert_batch('tabel_nilai', $data);
	}

	function push(){
		$this->db->truncate('tabel_siswa');

	}
	function push2(){
		$this->db->truncate('tabel_nilai');

	}
	

}