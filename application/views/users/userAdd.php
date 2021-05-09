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
              <input id="nama_depan" name="nama_depan" type="text" value="<?php echo set_value('nama_depan'); ?>">
              <label for="nama_depan" class="">Nama Depan</label>
          </div>
          <div class="input-field col s12 m6">
              <input id="nama_belakang" name="nama_belakang" type="text" value="<?php echo set_value('nama_belakang'); ?>">
              <label for="nama_belakang" class="">Nama Belakang</label>
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
                  <option value="administrator">Administrator</option>
                  <option value="mitra">Mitra</option>
                  <option value="pelanggan">Pelanggan</option>
              </select>
              <label>Pilih Level</label>
          </div>
          <div class="input-field col s12 m6">
              <select id="active" name="active">
                  <option value="1">Ya</option>
                  <option value="0">Tidak</option>
              </select>
              <label>Active</label>
          </div>
          <div class="input-field col s12 right-align">
              <button type="submit" name="submit" value="add_user" class="btn red lighten-2 waves-effect waves-green">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>