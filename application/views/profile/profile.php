<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content red lighten-2 white-text">
        <span class="card-title"><?php echo $pageTitle; ?></span>
      </div>
      <div class="card-content">
        <div class="row">
          <div class="col s12">
            <ul class="tabs tabs-fixed-width">
              <li class="tab col s3"><a class="active" href="#basic-tab">Ubah Foto Profil</a></li>
              <li class="tab col s3"><a href="#password-tab">Ubah Password</a></li>
            </ul>
          </div>
          <div id="basic-tab" class="col s12">
            <form class="row" id="basic-form" method="post" action="" style="margin-top: 20px;" enctype="multipart/form-data">
              <?php if(validation_errors()): ?>
                <div class="col s12">
                  <div class="card-panel red">
                    <span class="white-text"><?php echo validation_errors('<p>', '</p>'); ?></span>
                  </div>
                </div>
              <?php endif; ?>
              <?php if($message = $this->session->flashdata('message_profile')): ?>
                <div class="col s12">
                  <div class="card-panel <?php echo ($message['status']) ? 'green' : 'red'; ?>">
                    <span class="white-text"><?php echo $message['message']; ?></span>
                  </div>
                </div>
              <?php endif; ?>
              <div class="input-field file-field col s12 m6">
                <div class="btn red lighten-2">
                  <span>Upload Foto</span>
                  <input type="file" name="avatar">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
              <div class="input-field col s12 right-align">
                  <button type="submit" name="submit-information" value="true" class="btn amber waves-effect waves-green">Simpan</button>
              </div>
            </form>
          </div>
          
          <div id="password-tab" class="col s12">
            <form class="row" id="password-form" method="post" action="" style="margin-top: 20px;">
              <?php if(validation_errors()): ?>
                <div class="col s12">
                  <div class="card-panel red">
                    <span class="white-text"><?php echo validation_errors('<p>', '</p>'); ?></span>
                  </div>
                </div>
              <?php endif; ?>
              <?php if($message = $this->session->flashdata('message_password')): ?>
                <div class="col s12">
                  <div class="card-panel <?php echo ($message['status']) ? 'green' : 'red'; ?>">
                    <span class="white-text"><?php echo $message['message']; ?></span>
                  </div>
                </div>
              <?php endif; ?>
              <div class="input-field col s12">
                  <input id="password_lama" name="password_lama" type="password">
                  <label for="password_lama" class="">Password Lama</label>
              </div>
              <div class="input-field col s12">
                  <input id="password_baru" name="password_baru" type="password">
                  <label for="password_baru" class="">Password Baru</label>
              </div>
              <div class="input-field col s12">
                  <input id="konfirmasi_password" name="konfirmasi_password" type="password">
                  <label for="konfirmasi_password" class="">Konfirmasi Password</label>
              </div>
              <div class="input-field col s12 right-align">
                  <button type="submit" name="submit-password" value="true" class="btn amber waves-effect waves-green">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>