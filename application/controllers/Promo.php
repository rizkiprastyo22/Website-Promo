<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    
    // Cek apakah user sudah login
    $this->cekLogin();

    // Cek apakah user login 
    // sebagai administrator
    $this->isAdmin();

    // Load model Promo
    $this->load->model('model_promo');
  }

  public function index()
  {
    // Data untuk page index
    $data['pageTitle'] = 'Promo';
    $data['promo'] = $this->model_promo->get()->result();
    $data['pageContent'] = $this->load->view('promo/promoList', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function add()
  {
    // Jika form di submit jalankan blok kode ini
    if ($this->input->post('submit')) {
      
      // Mengatur validasi data promo,
      // # required = tidak boleh kosong
      // # min_length[5] = promo harus terdiri dari minimal 5 karakter
      //   tidak boleh sama dengan record yg sudah ada pada tabel promo
      $this->form_validation->set_rules('promo', 'Promo', 'required|min_length[5]');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('harga_awal', 'harga_awal', 'required');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('harga_promo', 'harga_promo', 'required');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

      // Mengatur pesan error validasi data
      $this->form_validation->set_message('required', '%s tidak boleh kosong!');
      $this->form_validation->set_message('min_length', '%s minimal %d karakter!');

      // Jalankan validasi jika semuanya benar maka lanjutkan
      if ($this->form_validation->run() === TRUE) {

        $data = array(
          'promo' => $this->input->post('promo'),
          'harga_awal' => $this->input->post('harga_awal'),
          'harga_promo' => $this->input->post('harga_promo'),
          'deskripsi' => $this->input->post('deskripsi')
        );

        // Jalankan function insert pada model_promo
        $query = $this->model_promo->insert($data);

        // cek jika query berhasil
        if ($query) $message = array('status' => true, 'message' => 'Berhasil menambahkan promo');
        else $message = array('status' => true, 'message' => 'Gagal menambahkan promo');

        // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        // refresh page
        redirect('promo/add', 'refresh');
			} 
    }
    
    // Data untuk page promo/add
    $data['pageTitle'] = 'Tambah Data Promo';
    $data['pageContent'] = $this->load->view('promo/promoAdd', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function edit($id = null)
  {
    // Jika form di submit jalankan blok kode ini
    if ($this->input->post('submit')) {
      
      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('harga_awal', 'harga_awal', 'required');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('harga_promo', 'harga_promo', 'required');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

      // Mengatur pesan error validasi data
      $this->form_validation->set_message('required', '%s tidak boleh kosong!');
      $this->form_validation->set_message('min_length', '%s minimal %d karakter!');

      // Jalankan validasi jika semuanya benar maka lanjutkan
      if ($this->form_validation->run() === TRUE) {

        $data = array(
          'harga_awal' => $this->input->post('harga_awal'),
          'harga_promo' => $this->input->post('harga_promo'),
          'deskripsi' => $this->input->post('deskripsi')
        );

        // Jalankan function insert pada model_promo
        $query = $this->model_promo->update($id, $data);

        // cek jika query berhasil
        if ($query) $message = array('status' => true, 'message' => 'Berhasil memperbarui promo');
        else $message = array('status' => true, 'message' => 'Gagal memperbarui promo');

        // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        // refresh page
        redirect('promo/edit/'.$id, 'refresh');
			} 
    }
    
    // Ambil data promo dari database
    $promo = $this->model_promo->get_where(array('id' => $id))->row();

    // Jika data promo tidak ada maka show 404
    if (!$promo) show_404();

    // Data untuk page promo/add
    $data['pageTitle'] = 'Edit Data Promo';
    $data['promo'] = $promo;
    $data['pageContent'] = $this->load->view('promo/promoEdit', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function delete($id)
  {
    // Ambil data promo dari database
    $promo = $this->model_promo->get_where(array('id' => $id))->row();

    // Jika data promo tidak ada maka show 404
    if (!$promo) show_404();

    // Jalankan function delete pada model_promo
    $query = $this->model_promo->delete($id);

    // cek jika query berhasil
    if ($query) $message = array('status' => true, 'message' => 'Berhasil menghapus promo');
    else $message = array('status' => true, 'message' => 'Gagal menghapus promo');

    // simpan message sebagai session
    $this->session->set_flashdata('message', $message);

    // refresh page
    redirect('promo', 'refresh');
  }
}