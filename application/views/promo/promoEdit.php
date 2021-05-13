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
              <label for="mitra" class="">ID Mitra</label>
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
              <label for="deskripsi" class="">Deskripsi Singkat (1 kalimat):</label>
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
            Format Upload Gambar (tanpa spasi): <br><span style="color:blue;">KodeMitra_InisialPromo_FotoKeberapa</span><br>(Misal: HW_NG_8)<br><span style="color:red;">*nilai foto keberapa harus +1 dari file sebelumnya</span>
          </div>
          <div class="input-field col s6 m6 l6 left-align">
            <br><br><a href="#modal4"><button name="batal" class="btn light blue lighten-2 waves-effect waves-green">Kembali</button></a>
          </div>
          <div class="input-field col s6 m6 l6 right-align">
            <br><br><button type="submit" name="submit-promo" value="<?php echo $promo->id; ?>" class="btn red lighten-2 waves-effect waves-green">Simpan</button>
          </div>
        </form>
        <!-- Modal Structure -->
        <div id="modal4" class="modal center-align" style="width:320px;">
          <div class="modal-content red lighten-2 white-text">
            <h4 style="font-size: 1.5rem;">Konfirmasi kembali</h4>
          </div>
          <div class="modal-content">
            <p style="font-size: 1.2rem;">Apakah kamu yakin mau kembali?</p>
          </div>
          <div class="modal-footer">
            <a href="<?php echo base_url('promo'); ?>" class="modal-close waves-effect waves-green btn-flat">Yakin</a>
            <a href="" class="modal-close waves-effect waves-green btn-flat">Tidak Jadi</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- </main> -->