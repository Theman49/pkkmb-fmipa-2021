<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Kelompok_model extends CI_Model{
    public function getKelompok($user)
    {
        $hasil = $this->db->where('email', $user)->limit(1)->get('siswa');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    } 
}