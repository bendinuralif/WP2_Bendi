<?php
class Mahasiswa extends CI_Controller
{
    public function index()

    {
        $this->load->view('view-form-Mahasiswa');
    }

    public function cetak()
    {
         {

        $data = [
            'nama' => $this->input->post('nama'),
            'kode' => $this->input->post('kode'),   
            'kelas' => $this->input->post('kelas'),
            'tgl' => $this->input->post('tgl'),
            'tempat' => $this->input->post('tempat'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        ];

        $this->load->view('view-data-Mahasiswa', $data);
        }
    }
}