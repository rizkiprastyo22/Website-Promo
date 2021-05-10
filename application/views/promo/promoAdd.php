<!-- <main style="background-image: url('img/bg1.png');"> -->
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content red lighten-2 white-text">
        <span class="card-title"><?php echo $pageTitle; ?></span>
      </div>
      <div class="card-content">
        <form class="row" id="add-promo-form" method="post" action="">
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
              <input id="promo" name="promo" type="text" value="<?php echo set_value('promo'); ?>">
              <label for="promo" class="">Promo</label>
          </div>
          <div class="input-field col s12 m6">
              <input id="mitra" name="mitra" type="text" value="<?php echo set_value('mitra'); ?>">
              <label for="mitra" class="">mitra</label>
          </div>
          <div class="input-field col s12 m6">
              <input id="harga_awal" name="harga_awal" type="number" value="<?php echo set_value('harga_awal'); ?>">
              <label for="harga_awal" class="">Harga Awal</label>
          </div>
          <div class="input-field col s12 m6">
              <input id="harga_promo" name="harga_promo" type="number" value="<?php echo set_value('harga_promo'); ?>">
              <label for="harga_promo" class="">Harga Promo</label>
          </div>
          <div class="input-field col s12 m6">
              <input id="deskripsi" name="deskripsi" type="text" value="<?php echo set_value('deskripsi'); ?>">
              <label for="deskripsi" class="">Deskripsi</label>
          </div>
          <div class="input-field col s12 m6">
              <!-- <label for="foto" class="">Foto</label> -->
              <input id="foto" name="foto" type="file" accept="image/png, image/jpeg" value="<?php echo set_value('foto'); ?>">
          </div>
          <div class="input-field col s12 right-align">
              <button type="submit" name="submit" value="add_promo" class="btn red lighten-2 waves-effect waves-green">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- </main> -->