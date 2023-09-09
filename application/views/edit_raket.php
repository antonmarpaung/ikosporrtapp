<div id="layoutSidenav_content">
   
    <div class="card card-register mx-3 mt-3">
        <div class="card-header">
        <a href="<?php echo site_url('dashboard/raket/')?>"><i class="fas fa-angle-left"></i> Kembali</a></div>

            <div class="card-body">
                <?php foreach ($raket as $a) { ?>

              <form action="<?php echo site_url('dashboard/update_raket')?>" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                    <input type="hidden" class="form-control" id="" name="no_raket" value="<?php echo $a->no_raket ?>">
                </div>

                <br>

                <div class="form-group">
                    <label for="merkraket">Merk raket</label>
                    <input type="text" class="form-control" id="Merk raket" name="merek_raket" value="<?php echo $a->merek_raket ?>" required>
                </div>

                <br>

                <div class="form-group">
                    <label for="tiperaket">Tipe raket</label>
                    <textarea class="form-control" id="tiperaket" name="tipe_raket"><?php echo $a->tipe_raket ?></textarea>
                </div>

                <br>

                <div class="form-group">
                    <label for="hargaraket">Harga</label>
                    <input type="text" class="form-control" id="hargaraket" name="harga_raket" value="<?php echo $a->harga_raket ?>">
                </div>

                <br>

                <div class="form-group">
                    <label for="gambarraket">Gambar Saat Ini</label><br>
                    <img src='<?= base_url()?>assets/gambar/<?=$a->gambar_raket;?>' width="150" height="100">
                </div>

                <br>

                <div class="form-group">
                    <label for="gambarraket">Upload gambar baru</label><br>
                    <input type="file" name="gambar_raket" class="form-control">
                </div>

                <br>

                <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Edit">
                <input type="reset" class="btn btn-light" value="Batal"></a>
                </div>
              </form>
         <?php } ?>
            </div>
        </div>
        </div>
    </div>