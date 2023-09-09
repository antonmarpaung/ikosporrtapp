<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>
    <body>
<style type="text/css">
        .table-data{
            width: 100%;
            border-collapse: collapse;
        }

            .table-data tr th,
            .table-data tr td{ 
                border:1px solid black;
            font-size: 10pt;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
    <center><h3>LAPORAN IKOSPORT</h3></center>
    <table>
        <tr>
            <td>Dari Tgl</td>
            <td>:</td>
            <td><?php echo date('d/m/Y', strtotime($_GET['dari'])); ?></td>
        </tr>
        <tr>
            <td>Sampai Tgl</td>
            <td>:</td>
            <td><?php echo date('d/m/Y', strtotime($_GET['sampai'])); ?></td>
        </tr>
    </table>

    <br/>
    <table class="table table-striped">
        <thead>
            <tr>
               <th>No</th>
                <th>Merek Produk</th>
                <th>Kategori Produk</th>
                <th>Tipe Produk</th>
                <th>tgl. Transaksi</th>
                <th width="20">Jumlah Produk</th>
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
                <td><?php echo $l->merek_produk; ?></td>
                <td><?php echo $l->kategori_produk; ?></td>
                <td><?php echo $l->tipe_produk; ?></td>
                <td><?php echo date('d-m-Y', strtotime($l->tgl_order_produk)); ?></td>
              <center>  <td><?php echo $l->jumlah_produk; ?></td></center>
                <td><?php echo "Rp. ".number_format($l->total_harga); ?></td>
            </tr>
        <?php
    } 
    ?>
    </tbody>
</table>
<div class="no-print">
    <a href="<?php echo base_url(). 'dashboard/transaksi' ?>"><button type="button" class="btn btn-primary">Kembali</button></a>

<script type="text/javascript"> 
    window.print();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>