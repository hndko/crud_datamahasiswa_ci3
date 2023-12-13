<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    // Jika banyak controller yang butuh database, kita bisa menggunakan config autoload.php

    // Jika semua method membutuhkan database pakai construct();
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->database();
    // }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // Jika hanya method tertentu panggil didalamnya saja
        // $this->load->database();

        $data['judul'] = "Dashboard Admin";
        $data['nama'] = "Data Mahasiswa";
        $data['res_mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['no'] = '1';
        $this->load->view("template/header", $data);
        $this->load->view("template/navbar");
        $this->load->view("template/sidebar");
        $this->load->view("dashboard/index", $data);
        $this->load->view("template/footer");
    }

    public function tambah()
    {
        $data['judul'] = "Dashboard Admin | Tambah Data";
        $data['nama'] = "Form Tambah Data Mahasiswa";

        // Validation Form
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("template/header", $data);
            $this->load->view("template/navbar");
            $this->load->view("template/sidebar");
            $this->load->view("dashboard/tambah", $data);
            $this->load->view("template/footer");
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            redirect('dashboard');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Dashboard Admin | Edit Data";
        $data['nama'] = "Form Edit Data Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaByID($id);
        $data['jurusan'] = ['Informatika', 'Sastra Inggris', 'Bahasa Indonesia'];

        // Validation Form
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("template/header", $data);
            $this->load->view("template/navbar");
            $this->load->view("template/sidebar");
            $this->load->view("dashboard/edit", $data);
            $this->load->view("template/footer");
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            redirect('dashboard');
        }
    }

    public function delete($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        redirect('dashboard');
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['result'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['no'] = '1';

        $this->load->view("dashboard/laporan_pdf", $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);

        // Render the HTML as PDF
        $this->dompdf->render();

        // Output the generated PDF to Browser
        $this->dompdf->stream("Laporan Data Mahasiswa.pdf", ['Attachment' => 0]);
    }
}
