<?php

class Rapor extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['judul'] = 'BERANDA';
        $this->load->view('templates/header', $data);
        $this->load->view('rapor/index', $data);
        $this->load->view('templates/footer');
    }
}
