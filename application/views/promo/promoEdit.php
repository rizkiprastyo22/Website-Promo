<!-- <main style="background-image: url('img/bg1.png');"> -->
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content red lighten-2 white-text">
        <span class="card-title"><?php echo $pageTitle; ?></span>
      </div>
      <div class="card-content">
        <form class="row" id="edit-promo-form" method="post" action="" enctype="multipart/form-data">
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
              <input id="mitra" disabled name="mitra" type="text" value="<?php echo $promo->mitra; ?>">
              <label for="mitra" class="">Mitra</label>
          </div>
          <div class="input-field col s12 m6">
              <input id="promo" disabled name="promo" type="text" value="<?php echo $promo->promo; ?>">
              <label for="promo" class="">Promo</label>
          </div>
          <div class="input-field col s12 m6">
              <input id="harga_awal" name="harga_awal" type="number" value="<?php echo $promo->harga_awal; ?>">
              <label for="harga_awal" class="">Harga Awal</label>
          </div>
          <div class="input-field col s12 m6">
              <input id="harga_promo" name="harga_promo" type="number" value="<?php echo $promo->harga_promo; ?>">
              <label for="harga_promo" class="">Harga Promo</label>
          </div>
          <div class="input-field col s12 m6">
              <input id="deskripsi" name="deskripsi" type="text" value="<?php echo $promo->deskripsi; ?>">
              <label for="deskripsi" class="">Deskripsi</label>
          </div>
          <div class="input-field file-field col s12 m6">
                <div class="btn red lighten-2">
                  <span>Foto Makanan</span>
                  <input type="file" name="foto2">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="foto" type="text" accept="image/png, image/jpeg" value="<?php echo $promo->foto; ?>">
                </div>
          </div>
          <div class="col s12 m6 left-align">
            Format Upload Gambar: <br><span style="color:blue;">nama mitra_promo_foto keberapa</span><br>(Misal: Hemat Warrior_Nasi Gulai_8)<br><span style="color:red;">*nilai foto keberapa harus +1 dari file sebelumnya</span>
          </div>
          <div class="input-field col s12 right-align">
              <button type="submit" name="submit-promo" value="<?php echo $promo->id; ?>" class="btn red lighten-2 waves-effect waves-green">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- </main> -->