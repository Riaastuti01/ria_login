<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {

        $data['nama_trainer'] = $this->db->get('nama_trainer')->result();
        $this->load->view('user/index', $data); //memanggil kelas lain diview

    }
    public function tambah_hal()
    {
        $this->load->view('user/tambah_hal_mhs');
    }
    public function tambah_edit()
    {
        $this->load->view('user/tambah_edit_mhs');
    }
    public function create()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $data = $this->input->post();

            $this->db->insert('nama_trainer', $data);
            redirect('user');
        } else {
            $this->load->view('user/create');
        }
    }
    public function update($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $data = $this->input->post();


            $this->db->where('id', $id);
            $this->db->update('nama_trainer', $data);

            redirect('user'); //halaman
        } else {
            $data['item'] = $this->db->get_where('nama_trainer', ['id' => $id])->row();
            $this->load->view('user/update', $data);
        }
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('nama_trainer');

        redirect('user');
    }
}
