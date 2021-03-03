<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'My Portofolio';
        $this->load->view('halaman', $data);
    }
}
