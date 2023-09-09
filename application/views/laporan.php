	

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  	<br>
    <center><h1>Laporan</h1></center>
<form action="<?php echo base_url(). 'dashboard/laporan' ?>" method="post">

	</div>
	<div class=" mb-4 mx-auto col-md-4">
		<label>Dari Tanggal</label>
  <input type="date" class="form-control col-md-3" placeholder="Username" aria-label="Username" name="dari"><br>
  <label>Sampai Tangal</label>
  <input type="date" class="form-control" placeholder="Server" aria-label="Server" name="sampai">
  <br>
  <input type="submit" name="cari" value="CARI" class="btn btn-primary btn-sm">
   	<a href="<?php echo base_url(). 'dashboard/transaksi' ?>"><input type="button" name="kembali" value="KEMBALI" class="btn btn-primary btn-sm"></a>
</div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>