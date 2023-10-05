<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
		$this->load->library('form_validation');
		$this->load->library('session');
    }

    public function login()
    {
		$data['title'] = "Masuk";

		$this->load->view('head', $data);
        $this->load->view('login');
        $this->load->view('js');
    }
    

    public function proses_login()
    {
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', $errors);
			$this->session->set_flashdata('input', $this->input->post());
			redirect('auth/login'); // LOGIN
		
		} else {
	
			$nama = htmlspecialchars($this->input->post('nama'));
			$nim = htmlspecialchars($this->input->post('nim'));
	
			// CEK KE DATABASE BERDASARKAN NAMA
			$cek_login = $this->auth_model->cek_login($nim);  
				
			if(($cek_login == FALSE)and($nama != $cek_login->nama)){
                $this->session->set_flashdata('msg', 'Nama atau nim yang kamu masukkan salah, coba lagi 😊');
                redirect('auth/login');
			} 
            // else if($nama != $cek_login->nama){
            //     $this->session->set_flashdata('msg', 'Nama yang kamu masukkan salah, coba lagi :)');
            //     redirect('auth/login');
			// 		
			// } else if($cek_login == FALSE){
            //     $this->session->set_flashdata('msg', 'Nim yang kamu masukkan salah, coba lagi :)');
            //     redirect('auth/login');  
            // }
            else {
                    $this->session->set_userdata('loggedin', TRUE);
                    $this->session->set_userdata('id_user', $cek_login->id_user);
					$this->session->set_userdata('nama', $cek_login->nama);
					$this->session->set_userdata('nim', $cek_login->nim);
				redirect('beranda');
			}
		}
    }
    
    public function proses_login_2($login_registre = '', $login_create = 'none')
    {
        // Validasi Form username dan password harus disi
        $this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
        	$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', $errors);
			$this->session->set_flashdata('input', $this->input->post());
			redirect('auth/login'); // LOGIN
        } 
        else {

                // Mengambil data siswa berdasarkan email / NIM yang di inputkan di form login
                $user = $this->db->get_where('siswa', ['email' => $this->input->post('email')])->row();
                if (!$user) {
                    $user = $this->db->get_where('siswa', ['nim' => $this->input->post('email')])->row();
                }
                // $user = $this->auth_model->cek_login($password);
                // Mengecek Jika data siswanya ada maka lanjut ke verifikasi passsword
                if ($user) {
                    // Pengecekan password
                    // Jika Password ada maka siapkan data session dan alihkan kehalaman siswa
                    // if (password_verify($this->input->post('password'), $user->password)) {
                    if ($this->input->post('password') === $user->password) {
                        $data = [
                            'email' => $user->email,
                            'nama' => $user->nama_siswa,
                            'role' => $user->role,
                            'nim' => $user->nim
                        ];
                        $user_data = array(
					      'login_oauth_uid' => $user->id_siswa,
					      'first_name'  => $user->nama_siswa,
					      'last_name'   => "",
					      'nim'			=> $user->nim,
					      'email_address'  => $user->email,
					      'kelompok'	=> $user->kelompok,
					      'profile_picture' => base_url('assets/POTO/logo-shadow.png'),

					      // 'created_at'  => $current_datetime
					     );
                        // $this->session->set_userdata($data);
                        $this->session->set_userdata('user_data', $user_data);
                        $this->session->set_userdata($data);
                        // redirect('students');
                    	header('Location: https://pkkmbfmipaunnes.web.id/informasi');

                        // Jika Password salah maka siapkan alert salah dan alihkan kehalaman login
                    } else {
                        // $this->session->set_flashdata(
                        //     'pesan',
                        //     '<script>
                        //         Swal.fire(
                        //         "Oopss!",
                        //         "Wrong Password!",
                        //         "error"
                        //         )
                        //     </script>'
                        // );
                        $this->session->set_flashdata(
                            'pesan',"Wrong Email/password!"
                        );
                        redirect('auth/login');
                    }
                } 
                else {
                    // Jika data siswanya tidak ada maka siapkan alert data tidak ada dan alihkan kehalaman login
                    // $this->session->set_flashdata(
                    //     'pesan',
                    //     '<script>
                    //         Swal.fire(
                    //         "Oopss!",
                    //         "Akun Tidak Ada!",
                    //         "error"
                    //         )
                    //     </script>'
                    // );
                    $this->session->set_flashdata(
                            'pesan',"Wrong Email/password!"
                        );
                    redirect('auth/login');
                }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
		redirect('beranda');
    }
}