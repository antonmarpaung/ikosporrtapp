<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
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
    </style>
    <h3>Laporan Transaksi Rental Mobil</h3>
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
    <table class="table-data">
        <thead>
            <tr>
               <th>No</th>
                <th>Tanggal</th>
                <th>Kostumer</th>
                <th>Mobil</th>
                <th>Tgl. <RP></RP>Rental</th> 
                <th>Tgl. Kembali</th>
                <th>Harga</th>
                <th>Denda / Hari</th>
                <th>Tgl. Dikembalikan</th>
                <th>Total Denda</th>
                <th>Status</th>
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
                <td><?php echo $l->jumlah_produk; ?></td>
                <td><?php echo "Rp. ".number_format($l->total_harga); ?></td>
            </tr>
        <?php
    } 
    ?>
    </tbody>
</table>

<script type="text/javascript"> 
    window.print();
</script>
</body>
</html>