<?php
	defined('BASEPATH') OR exit("No direct script access allowed");

	class Penugasan extends CI_Controller {
		public function __construct()
    {
        parent::__construct();
        $this->load->model('kelompok_model');
		$this->load->model('folderidmodel');
		$this->load->library('session');
		$this->load->library('form_validation');
    }
		public function index(){
		    if(!isset($_SESSION['user_data'])){
                $this->session->set_flashdata('lgn', 'Silahkan login terlebih dahulu ya.. 😊');
                redirect('informasi');
            }
			// $tugas = $this->folderidmodel->getTable('folder');
			$user_data = $this->session->userdata('user_data');
			$email = $user_data['email_address'];
			$data['nama'] = $user_data['first_name']. " ". $user_data['last_name'];
			$data['noKelompok'] = $this->kelompok_model->getKelompok($email);
        	$data['title']="List Penugasan";
			$data['tugas'] = $this->folderidmodel->getTable('folder');
			$this->load->view('head',$data);
	        // $this->load->view('navbar2', array($data, 'tugas'=>$tugas));
			$this->load->view('navbar2',$data);
	        $this->load->view('list-penugasan',$data);
	        $this->load->view('footer');
	        $this->load->view('js');
		}

		public function deskripsi_penugasan(){
			$namaTugas = $_GET['namaTugas'];
			$jenisTugas = $_GET['jenisTugas'];
			$data['tugas'] = $this->folderidmodel->getIdFolder($namaTugas,$jenisTugas);
        	$data['title']="Deskripsi Penugasan";
			$this->load->view('head',$data);
	        $this->load->view('navbar2', $data);
	        $this->load->view('deskripsi-penugasan',$data);
	        $this->load->view('footer');
	        $this->load->view('js');
		}
		public function deskripsi_penugasan_papermob(){
			$namaTugas = $_GET['namaTugas'];
			$jenisTugas = $_GET['jenisTugas'];
			$data['tugas'] = $this->folderidmodel->getIdFolder($namaTugas,$jenisTugas);
        	$data['title']="Deskripsi Penugasan";
			$this->load->view('head',$data);
	        $this->load->view('navbar2', $data);
	        $this->load->view('deskripsi-penugasan-papermob',$data);
	        $this->load->view('footer');
	        $this->load->view('js');
		}
	}

?>