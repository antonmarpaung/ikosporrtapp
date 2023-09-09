<div id="layoutSidenav_content">
   
    <div class="card card-register mx-3 mt-3">
        <div class="card-header">
        <a href="<?php echo site_url('Dashboard/raket')?>"><i class="fas fa-angle-left"></i> Kembali</a></div>
            <div class="card-body">
              <form action="<?php echo site_url('Dashboard/simpan_raket')?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="merkraket">Merk raket</label>
                    <input type="text" class="form-control" id="merek_raket" name="merek_raket" required>
                </div>

                <br>

                <div class="form-group">
                    <label for="tiperaket">Tipe raket</label>
                    <input class="form-control" id="tipe_raket" name="tipe_raket"> </input>
                </div>

                <br>

                <div class="form-group">
                    <label for="hargaraket">Harga</label>
                    <input type="text" class="form-control" id="harga_raket" name="harga_raket" required>
                </div>

                <br>

                <div class="form-group">
                    <label for="gambarraket">Gambar Raket</label>
                    <input type="file" name="gambar_raket" class="form-control">
                </div>

                <br>
                
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="reset" class="btn btn-light">Batal</button>
              </form>
            </div>
        </div>
        </div>
    </div>
    
</div>