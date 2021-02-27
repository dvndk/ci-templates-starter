<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        // Landing Page
        $this->load->view('welcome_message');
    }

    public function sample()
    {
        $data['title'] = 'Sample Page';
        // lokasi path content terletak di: application/views/
        $data['contents'] = 'sample/content';
        $this->load->view('layouts/sample', $data);
    }

    public function sample_dashboard()
    {
        if (!$this->ion_auth->logged_in()) {
			redirect('auth');
		} else if (!$this->ion_auth->is_admin()) {
			show_error('Hanya Administrator yang diberi hak untuk mengakses halaman ini, <a href="' . base_url('dashboard') . '">Kembali ke menu awal</a>', 403, 'Akses Terlarang');
		} else {
            $data['user'] = $this->ion_auth->user()->row();
            $data['title'] = 'Sample Dashboard Page';
            // lokasi path content terletak di: application/views/
            $data['contents'] = 'sample/content';
            $this->load->view('layouts/dashboard', $data);
        }
    }
}
