<?php

class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('tb_mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan'),
        ];

        $this->db->insert('tb_mahasiswa', $data);
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_mahasiswa');
    }

    public function getMahasiswaByID($id)
    {
        return $this->db->get_where('tb_mahasiswa', ['id' => $id])->row_array();
    }
}
