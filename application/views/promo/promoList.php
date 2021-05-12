<!-- <main style="background-image: url('<?php echo base_url('img/bg1.png'); ?>');"> -->
<div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content red lighten-2 white-text">
          <span class="card-title">Data Promo</span>
          <a href="<?php echo base_url('promo/add'); ?>" class="btn-floating right halfway-fab waves-effect waves-light green lighten-2 tooltipped" data-position="top" data-tooltip="Tambah Data"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <?php if($message = $this->session->flashdata('message')): ?>
            <div class="col s12">
              <div class="card-panel <?php echo ($message['status']) ? 'green' : 'red'; ?>">
                <span class="white-text"><?php echo $message['message']; ?></span>
              </div>
            </div>
          <?php endif; ?>
          <table class="bordered highlight">
              <thead>
                  <tr>
                  <th>No</th>
                  <th>Promo</th>
                  <!-- <th>Deskripsi</th> -->
                  <th class="center-align">Harga Awal</th>
                  <th class="center-align">Harga Promo</th>
                  <th class="center-align">Pilihan</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $no = 0; foreach($promo as $row): 
                    $harga_awal = number_format($row->harga_awal);
                    $harga_promo = number_format($row->harga_promo);
                    ?>
                    <tr>
                      <td><?php echo ++$no; ?></td>
                      <td><?php echo $row->promo; ?></td>
                      <td class="center-align">Rp. <?php echo $harga_awal; ?></td>
                      <td class="center-align">Rp. <?php echo $harga_promo; ?></td>
                      <td class="center-align">
                        <a href="<?php echo base_url('promo/edit/' . $row->id); ?>" class="btn-floating halfway-fab waves-effect waves-light tooltipped red lighten-2" data-position="top" data-tooltip="Edit Data"><i class="material-icons">edit</i></a>
                        <a href="#modal1" class="btn-floating halfway-fab waves-effect waves-light tooltipped red lighten-2" data-position="top" data-tooltip="Delete Data"><i class="material-icons">delete</i></a>
                        <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                          <div class="modal-content red lighten-2 white-text">
                            <h4 style="font-size: 1.5rem;">Konfirmasi Delete Promo</h4>
                          </div>
                          <div class="modal-content">
                            <p style="font-size: 1.2rem;">Apakah kamu yakin mau menghapus promo "<?php echo $row->promo; ?>"?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="<?php echo base_url('promo/delete/' . $row->id); ?>" class="modal-close waves-effect waves-green btn-flat">Yakin</a>
                            <a href="" class="modal-close waves-effect waves-green btn-flat">Tidak Jadi</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
<!-- </main> -->