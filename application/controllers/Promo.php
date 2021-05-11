<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    
    // Cek apakah user sudah login
    $this->cekLogin();

    // Cek apakah user login 
    // sebagai mitra
    $this->isMitra();

    // Load model Promo
    $this->load->model('model_promo');
  }

  public function index()
  {
    // Data untuk page index
    $data['pageTitle'] = 'Promo';
    $data['promo'] = $this->model_promo->get_where(array('mitra' => $this->session->userdata('nama')))->result();
    $data['pageContent'] = $this->load->view('promo/promoList', $data, TRUE);

    // Jalankan view template/layout
    $this->load->view('template/layout', $data);
  }

  public function add()
  {
    // Jika form di submit jalankan blok kode ini
    if ($this->input->post('submit-promo')) {
      
      // Mengatur validasi data promo,
      // # required = tidak boleh kosong
      // # min_length[5] = promo harus terdiri dari minimal 5 karakter
      //   tidak boleh sama dengan record yg sudah ada pada tabel promo
      $this->form_validation->set_rules('promo', 'Promo', 'required|min_length[5]');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('mitra', 'Mitra', 'required');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('harga_awal', 'Harga Awal', 'required');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('harga_promo', 'Harga Promo', 'required');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

      // Mengatur pesan error validasi data
      $this->form_validation->set_message('required', '%s tidak boleh kosong!');
      $this->form_validation->set_message('min_length', '%s minimal %d karakter!');

      // Jika foto diganti jalankan blok kode ini
      if (!empty($_FILES['foto2']['name'])) {
        // Konfigurasi library upload codeigniter
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['file_name'] = $this->input->post('foto');

        // Load library upload
        $this->load->library('upload', $config);
        
        // Jika terdapat error pada proses upload maka exit
        if ( ! $this->upload->do_upload('foto2')) {
            exit($this->upload->display_errors());
        }
        else{
          $data['foto2'] = $this->upload->data()['file_name'];
        }
      }

      // Jalankan validasi jika semuanya benar maka lanjutkan
      if ($this->form_validation->run() === TRUE) {

        $data = array(
          'promo' => $this->input->post('promo'),
          'mitra' => $this->input->post('mitra'),
          'harga_awal' => $this->input->post('harga_awal'),
          'harga_promo' => $this->input->post('harga_promo'),
          'deskripsi' => $this->input->post('deskripsi'),
          'foto' => $this->input->post('foto')
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
    if ($this->input->post('submit-promo')) {
      
      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('harga_awal', 'Harga Awal', 'required');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('harga_promo', 'Harga Promo', 'required');

      // Mengatur validasi data password,
      // # required = tidak boleh kosong
      // # min_length[5] = password harus terdiri dari minimal 5 karakter
      $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

      // Mengatur pesan error validasi data
      $this->form_validation->set_message('required', '%s tidak boleh kosong!');
      $this->form_validation->set_message('min_length', '%s minimal %d karakter!');

      // Jika foto diganti jalankan blok kode ini
      if (!empty($_FILES['foto2']['name'])) {
        // Konfigurasi library upload codeigniter
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['file_name'] = $this->input->post('foto');

        // Load library upload
        $this->load->library('upload', $config);
        
        // Jika terdapat error pada proses upload maka exit
        if (!$this->upload->do_upload('foto2')) {
            exit($this->upload->display_errors());
        }
        else{
          $data['foto2'] = $this->upload->data()['file_name'];
        }
      }

      // Jalankan validasi jika semuanya benar maka lanjutkan
      if ($this->form_validation->run() === TRUE) {

        $data = array(
          'harga_awal' => $this->input->post('harga_awal'),
          'harga_promo' => $this->input->post('harga_promo'),
          'deskripsi' => $this->input->post('deskripsi'),
          'foto' => $this->input->post('foto')
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