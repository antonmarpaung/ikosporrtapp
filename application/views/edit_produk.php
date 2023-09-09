<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<div class="card card-register col-md-3 ms-auto mt-4" style="margin-right:530px;">
        <div class="card-header">
        <center><h3>Edit Produk</h3></center>

            <div class="card-body">
                <?php foreach ($produk as $t) { ?>

              <form action="<?php echo site_url('dashboard/update_raket')?>" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                    <input type="hidden" class="form-control" id="" name="id_produk" value="<?php echo $t->id_produk ?>">
                </div>

                <br>

                <div class="form-group">
                    <label for="merkproduk">Merk Produk</label>
                    <input type="text" class="form-control" id="Merk produk" name="merek_produk" value="<?php echo $t->merek_produk ?>" required>
                </div>

                <br>

                <div class="form-group">
                    <label for="kategoriproduk">Kategori Produk</label>
                    <input type="text" class="form-control" id="Kategori produk" name="kategori_produk" value="<?php echo $t->kategori_produk ?>" required>
                </div>

                <br>

                <div class="form-group">
                    <label for="tipeproduk">Tipe Produk</label>
                    <input type="text" class="form-control" id="tipe produk" name="tipe_produk" value="<?php echo $t->tipe_produk ?>">
                </div>

                <div class="form-group">
                    <label for="hargaproduk">Harga</label>
                    <input type="text" class="form-control" id="harga produk" name="harga_produk" value="<?php echo $t->harga_produk ?>" onkeypress="return hanyaAngka(event)">
                </div>
                <div class="form-group">
                    <label for="hargaproduk">Stok</label>
                    <input type="text" class="form-control" id="harga produk" name="stok" value="<?php echo $t->stok ?>" onkeypress="return hanyaAngka(event)">
                </div>

                <br>

                <div class="form-group">
                    <label for="gambarproduk">Gambar Saat Ini</label><br>
                    <img src='<?= base_url()?>assets/gambar/<?=$t->gambar_produk;?>' width="150" height="100">
                </div>

                <br>

                <div class="form-group">
                    <label for="gambarraket">Upload gambar baru</label><br>
                    <input type="file" name="gambar_produk" class="form-control">
                </div>

                <br>

                <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Edit">
               <a href="<?php echo base_url().'dashboard/raket' ?>"> <input type="button" class="btn btn-danger" value="Batal"></a>
                </div>
              </form>
         <?php } ?>
            </div>
        </div>
        </div>
        <script>

        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>