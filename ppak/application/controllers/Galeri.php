<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
    public function index()
	{
        $data['login_button'] = '<a href="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=159925294652-bq4j3u0v7j5jakffcjmfhq1koo08k13b.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Fpkkmbfmipaunnes.web.id%2F&state&scope=email%20profile&approval_prompt=auto" class="masuk"><span>Masuk</span></a>';
        $data['masuk'] = $this->session->userdata('loggedin');
        $data['title']="Galeri";
		$this->load->view('head',$data);
        $this->load->view('navbar2',$data);
        $this->load->view('galeri');
        $this->load->view('footer');
        $this->load->view('js');
	}
}
?>
