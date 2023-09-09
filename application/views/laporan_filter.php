<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<title></title>
	<style type="text/css">
		.tengah{
			margin-left: 380px;
		}
		.print {
			margin-left: 375px;
		}
	</style>
</head>
<body>
	<br>
<div class="page-header">
	

</div>

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
</div>

    </form>
<div class="print">
 <div class="btn-group">
	<a href="<?php echo base_url().'dashboard/laporan_print/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>">
		<button type="button" class="btn btn-primary"><i class="fa-solid fa-print"></i> PRINT</button></a></div>

</div>
<br>
<br>
<div class="tengah">

<div class="table-responsive col-md-9">
	<table border="1" class="table table-striped table-hover table-bordered " id="table-datable" >
		
		<thead>
			<tr>
				<th>No</th>
				<th>Merek Produk</th>
				<th>Kategori Produk</th>
				<th>Tipe Produk</th>
				<th>tgl. Transaksi</th>
				<th>Jumlah Produk</th>
				<th>Total Harga</th>
				
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach($laporan as $l){

			 ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $l->merek_produk	; ?></td>
				<td><?php echo $l->kategori_produk; ?></td>
				<td><?php echo $l->tipe_produk; ?></td>
				<td><?php echo date('d/m/Y', strtotime($l->tgl_order_produk)); ?></td>
				<td><?php echo $l->jumlah_produk; ?></td>
				<td><?php echo $l->total_harga; ?></td>
			</tr>
			<?php } ?>
		</tbody>

	</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>


