<?php
defined('BASEPATH') or exit('No direct script access allowed');

class monitoring extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('monitoring_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman monitoring";
        $data['monitoring'] = $this->monitoring_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("monitoring/vw_monitoring", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman tambah monitoring";
        $this->load->view("layout/header", $data);
        $this->load->view("monitoring/vw_tambah_monitoring", $data);
        $this->load->view("layout/footer");
    }

    public function insert(){
        $data = [
            'judul' => $this->input->post('judul'),
            'client' => $this->input->post('client'),
            'project_leader' => $this->input->post('proder'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_berakhir' => $this->input->post('tanggal_berakhir'),
            'progress' => $this->input->post('progress')
        ];
        $this->monitoring_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success"
        role="alert">Data monitoring Berhasil Ditambah!</div>');
        redirect('monitoring');
    }
    public function detail($id)
    {       
        $data['judul'] = "Halaman Detail monitoring";
        $data['monitoring'] =  $this->monitoring_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("monitoring/vw_detail_monitoring", $data);
        $this->load->view("layout/footer", $data);
    }
    public function hapus($id)
    {
        $this->monitoring_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data monitoring Berhasil Dihapus!</div>');
        redirect('monitoring');
    }

    function edit($id)
    {
    
        $data['judul'] = "Halaman Edit monitoring";
        $data['monitoring'] = $this->monitoring_model->getById($id);
        
        $this->load->view("layout/header", $data);
        $this->load->view("monitoring/vw_ubah_monitoring", $data);
        $this->load->view("layout/footer");     
        
    }
    function update()
    {
        $data = [
            'judul' => $this->input->post('judul'),
            'client' => $this->input->post('client'),
            'project_leader' => $this->input->post('proder'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_berakhir' => $this->input->post('tanggal_berakhir'),
            'progress' => $this->input->post('progress')
        ];
        $id = $this->input->post('id');
        $this->monitoring_model->update(['id' => $id], $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success"
        role="alert">Data monitoring Berhasil DiUbah!</div>');
        redirect('monitoring');
    }
}
