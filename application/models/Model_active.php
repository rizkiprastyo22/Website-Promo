<?php
  class Model_active extends CI_Model {

    public function get()
    {
      // Jalankan query
      $query = $this->db
      ->from('promo')
      ->join('users', 'users.id = promo.mitra')
      ->where('active', 'aktif')
      ->get();

      // Return hasil query
      return $query->result();
    }
  }