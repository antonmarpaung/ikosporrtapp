<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <style type="text/css">
  	

  </style>
  <body>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  	<br/><br/>
    <h1><center>LAPORAN TRANSAKSI IKOSPORT</center></h1>
    <br/><br/>
    <div class="tengah">
    <div class="table-responsive col-md-9">
	<table class="table table-bordered col-md-9" >
		<thead class="table">
		<tr>
			<th>No.</th>
			<th>Merk Produk</th>
			<th>Kategori Produk</th>
			<th>Tipe Produk</th>
			<th>Tanggal Order</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Total Harga</th>
		</tr>
	</thead>
		<tbody>
		<?php $no = 1; ?>
		<?php foreach($transaksi as $t) {?>

		<tr>
			<td><?= $no++ ?></td>
			<td><?= $t->merek_produk ?></td>
			<td><?= $t->kategori_produk ?></td>
			<td><?= $t->tipe_produk ?></td>
			<td><?php echo date('d/m/Y', strtotime($t->tgl_order_produk)); ?></td>
			
			<td><?= "Rp " .number_format("$t->harga_produk", 0, ",", "."); ?></td>
			<td><?= $t->jumlah_produk ?></td>
			<td><?="Rp " .number_format("$t->total_harga", 0, ",", "."); ?></td>
		</tr>
		</tbody>
	<?php } ?>
	</table>
</div>
</div>
	<script type="text/javascript">
		window.print();
	</script>

	

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>