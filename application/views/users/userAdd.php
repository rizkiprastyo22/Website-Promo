<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content red lighten-2 white-text">
        <span class="card-title"><?php echo $pageTitle; ?></span>
      </div>
      <div class="card-content">
        <form class="row" id="add-user-form" method="post" action="">
          <?php if(validation_errors()): ?>
            <div class="col s12">
              <div class="card-panel red">
                <span class="white-text"><?php echo validation_errors('<p>', '</p>'); ?></span>
              </div>
            </div>
          <?php endif; ?>
          <?php if($message = $this->session->flashdata('message')): ?>
            <div class="col s12">
              <div class="card-panel <?php echo ($message['status']) ? 'green' : 'red'; ?>">
                <span class="white-text"><?php echo $message['message']; ?></span>
              </div>
            </div>
          <?php endif; ?>
          <div class="input-field col s12 m6">
              <input id="nama" name="nama" type="text" value="<?php echo set_value('nama'); ?>">
              <label for="nama" class="">Nama Lengkap</label>
          </div>
          <div class="input-field col s12 m6">
              <input id="username" name="username" type="text" value="<?php echo set_value('username'); ?>">
              <label for="username" class="">Email</label>
          </div>
          <div class="input-field col s12 m6">
              <input id="password" name="password" type="password" value="<?php echo set_value('password'); ?>">
              <label for="password" class="">Password</label>
          </div>
          <div class="input-field col s12 m6">
              <select id="level" name="level">
                  <option value="mitra">Mitra</option>
                  <!-- <option value="administrator">Administrator</option>
                  <option value="pelanggan">Pelanggan</option> -->
              </select>
              <label>Pilih Level</label>
          </div>
          <div class="input-field col s12">
              <select id="active" name="active">
                  <option value="aktif">Aktif</option>
                  <option value="tidak aktif">Tidak Aktif</option>
              </select>
              <label>Status Akun</label>
          </div>
          <div class="input-field col s6 m6 l6 left-align">
            <br><br><a href="#modal5"><button name="batal" class="btn light blue lighten-2 waves-effect waves-green">Kembali</button></a>
          </div>
          <div class="input-field col s6 m6 l6 right-align">
            <br><br><button type="submit" name="submit" value="add_user" class="btn red lighten-2 waves-effect waves-green">Simpan</button>
          </div>
        </form>
        <div id="modal5" class="modal center-align" style="width:320px;">
          <div class="modal-content red lighten-2 white-text">
            <h4 style="font-size: 1.5rem;">Konfirmasi kembali</h4>
          </div>
          <div class="modal-content">
            <p style="font-size: 1.2rem;">Apakah kamu yakin mau kembali?</p>
          </div>
          <div class="modal-footer">
            <a href="<?php echo base_url('users'); ?>" class="modal-close waves-effect waves-green btn red lighten-2">Yakin</a>
            <a href="" class="modal-close waves-effect waves-green btn-flat">Tidak Jadi</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>