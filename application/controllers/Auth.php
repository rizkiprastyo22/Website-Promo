<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
  public function cekAkun()
  {
    // Memanggil model users
    $this->load->model('model_users');

    // Mengambil data dari form login dengan method POST
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    // Jalankan function cekAkun pada model_users
    $query = $this->model_users->cekAkun($username, $password);
    
    // Jika query gagal maka return false
    if (!$query) {
      
      // Mengatur pesan error validasi data
      $this->form_validation->set_message('cekAkun', 'Username atau password yang Anda masukkan salah!');
      return FALSE;
    
    // Jika berhasil maka set user session dan return true
    } else {

      // data user dalam bentuk array
      $userData = array(
        'id' => $query->id,
        'nama' => $query->nama,
        'username' => $query->username,
        'level' => $query->level,
        'logged_in' => TRUE
      );
			
      // set session untuk user
      $this->session->set_userdata($userData);

      return TRUE;
    }
  }

  public function login()
  {
    // Jika user telah login, redirect ke base_url
    if ($this->session->userdata('logged_in')) redirect(base_url());

    // Jika form di submit jalankan blok kode ini
    if ($this->input->post('submit')) {
      
      // Mengatur validasi data username,
      // required = tidak boleh kosong
      $this->form_validation->set_rules('username', 'Username', 'required');

      // Mengatur validasi data password,
      // required = tidak boleh kosong
      // callback_cekAkun = menjalankan function cekAkun()
      $this->form_validation->set_rules('password', 'Password', 'required|callback_cekAkun');
			
      // Mengatur pesan error validasi data
      $this->form_validation->set_message('required', '%s tidak boleh kosong!');

      // Jalankan validasi jika semuanya benar maka redirect ke controller dashboard
      if ($this->form_validation->run() === TRUE) {
        redirect('dashboard');
      } 
    }
    
    // Jalankan view auth/login.php
    $this->load->view('auth/login');
  }
  
  public function signup()
  {

    // Memanggil model users
    $this->load->model('model_users');

    // Jika user telah login, redirect ke base_url
    if ($this->session->userdata('logged_in')) redirect(base_url());

    // Jika form di submit jalankan blok kode ini
    if ($this->input->post('submit')) {
      
      // Mengatur validasi data nama,
      // required = tidak boleh kosong
      $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');

      // Mengatur validasi data username,
      // required = tidak boleh kosong
      $this->form_validation->set_rules('username', 'Email', 'required|min_length[5]|is_unique[users.username]');

      // Mengatur validasi data password,
      // required = tidak boleh kosong
      // callback_cekAkun = menjalankan function cekAkun()
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

      // Mengatur validasi data konfirmasi_password,
      // # required = tidak boleh kosong
      // # matches = nilai konfirmasi_password harus sama dengan password_baru
      $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi password', 'required|matches[password]');

      // Mengatur validasi data password,
      // required = tidak boleh kosong
      // callback_cekAkun = menjalankan function cekAkun()
      $this->form_validation->set_rules('aggreement', 'Persetujuan syarat dan ketentuan', 'required');
			
      // Mengatur pesan error validasi data
      $this->form_validation->set_message('required', '%s tidak boleh kosong!');
      $this->form_validation->set_message('min_length', '%s minimal %d karakter!');
      $this->form_validation->set_message('is_unique', '%s sudah terdaftar!');
      $this->form_validation->set_message('matches', '{field} tidak sama dengan {param}.');

      // Jalankan validasi jika semuanya benar maka lanjutkan
      if ($this->form_validation->run() === TRUE) {

        $data = array(
          'nama' => $this->input->post('nama'),
          'username' => $this->input->post('username'),
          'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
          'level' => 'pelanggan'
        );

        // Jalankan function insert pada model_users
        $query = $this->model_users->insert($data);

        // cek jika query berhasil
        if ($query) $message = array('status' => true, 'message' => 'Berhasil membuat akun Anda, Silakan login');
        else $message = array('status' => true, 'message' => 'Gagal membuat akun Anda');

        // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        // refresh page
        redirect('auth/login', 'refresh');
      }
    }

    // Jalankan view auth/login.php
    $this->load->view('auth/login');
  }
    
  public function logout()
  {
    // Hapus semua data pada session
    $this->session->sess_destroy();

    // redirect ke halaman login	
    redirect('auth/login');
  }
}