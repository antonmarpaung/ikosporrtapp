<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>IKOSPORT</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!----css3---->
        <link rel="stylesheet" href="../css/custom.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    


        
        <!--google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    
       <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">


</style>
  </head>
  <body>

  


<div class="wrapper">
     
      <div class="body-overlay"></div>
     
<!-----------------------------------------------------------sidebar--------------------------------------------------------------------->
     
     <div id="sidebar">
        <div class="sidebar-header">
          <h2>IKO SPORT</h2>
        </div>
        <ul class="list-unstyled component m-0">
          <li class="#">
          <a href="<?php echo base_url(). 'dashboard/dashboard' ?>" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
          </li>
          
          <li class="dropdown">
          <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
          <i class="material-icons">library_books</i>Daftar Produk
          </a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu1">
             <li><a href="<?php echo base_url().'dashboard/raket' ?>">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Produk</a></li>
             
          </ul>
          </li>
          
           <li class="active"> 
          <a href="<?php echo base_url().'dashboard/transaksi'; ?>"><i class="material-icons">apps</i>Transaksi
          </a>
          <li class="dropdown">
          <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
          <i class="fa-solid fa-circle-user fa-xl"></i>Akun
          </a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu2">
            <li><a href="<?php echo base_url(). 'dashboard/admin' ?>">
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Data Admin &nbsp <i class="fa-sharp fa-solid fa-users"></i>
</a></li>

</a></li>
             <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Keluar &nbsp <i class="fa-solid fa-right-from-bracket fa-xl"></i>
</a></li>
           
          </ul>
          </li>
          
          
         
          
          
          
          
           
<!-- Button Keluar -->

</div>

</li>
        
        </ul>
     </div>
     
      <div id="content">
<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->


         
<!------------------------------------------------------------NAVBAR 1-------------------------------------------------------------------> 
             
          <div class="top-navbar">
             <div class="xd-topbar">
                 <div class="row">
                     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <span class="material-icons text-white">apps</span>
                        </div>
                     </div>
                     
                     <div class="col-md-5 col-lg-3 order-3 order-md-2">
                         <div class="xp-searchbar">
                            
                         </div>
                     </div>
                     
                     
                     <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                         <div class="xp-profilebar text-right">
              
                                  </ul>
                               </li>
                               
                               
                               </ul>
                            </nav>
                         </div>
                     </div>
                     
                 </div>
                 
                 <div class="xp-breadcrumbbar text-center">
                    <h4 class="page-title">Data Transaksi</h4>

 <!--------------------------------------- INPUT KEYWORD BERDASARKAN MEREK, KATEGORI, TIPE-------------------------------------------- -->
<div class="search">
                    <div class="row">
                        <div class="col-md-5">
                            <form action="<?php echo base_url().'dashboard/transaksi' ?>" method="post">
                    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Cari Data.."  aria-describedby="button-addon2" name="keyword" autocomplete="off" autofocus> &nbsp &nbsp
  <input class="btn btn-outline-primary" type="submit" name="submit">
</div></div></div></form>
                    <ol class="breadcrumb">
                      
                 
                    </ol>
                 </div>
             </div>
          </div>
          </div>
<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->


<!-- -----------------------------------------------PESAN TAMBAH DATA, HAPUS DATA--------------------------------------------------- -->
         <?php echo $this->session->flashdata('pesan') ?>
         <?php echo $this->session->flashdata('pesanlogout') ?>
 <!------------------------------------------------------NAVBAR 2-------------------------------------------------------------> 
              
              <div class="main-content">
                 <div class="row">
                    <div class="col-md-12">
                       <div class="table-wrapper">
                        
                       <div class="table-title">
                         <div class="row">
                             <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                
                                <h2 class="ml-lg-2">Welcome Admin,-</h2>
                             </div>

                             <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">

                                <a href="<?php echo base_url().'dashboard/print';?>" class="btn btn-primary btn-sm "><i class="fas fa-print"></i> Print</a>
                                <a href="<?php echo base_url().'dashboard/laporan';?>" class="btn btn-primary btn-sm "><i class="fas fa-print"></i> Laporan</a>
                             </div>
                             
                         </div>
                       </div>
                      <script type="text/javascript"></script>



<!------------------------------------------------------ HEADER TABLE ------------------------------------------------------------------>

                       <table class="table table-striped table-hover">
                          <thead class="table">
                             <tr>
                              <th><b>No</b></th>
                             <th>Merk Produk</th>
                             <th>Kategori Produk</th>
                             <th>Tipe Produk</th>
                             <th>Tanggal Order</th>
                             <th>&nbsp &nbsp Harga</th>
                             <th> Jumlah Produk</th>
                             <th> &nbsp Total Harga</th>
                             
                             <th>&nbsp &nbsp &nbsp Aksi</th>
                             <th></th>
                             </tr>
                          </thead>
<!----------------------------------------------------------CONTENT TABLE  -------------------------------------------------------------->
                          
                          <tbody>
                            <?php if(empty($transaksi)): ?>
                                <tr>
                                    <td colspan="10">
                                        <div class="alert alert-danger" role="alert">
                                          <center>   Data Tidak Ditemukan!!</center></div>
                                         </td>
                                </tr><?php endif; ?>
                              <?php 
                              $no = 1;
                              foreach($transaksi as $t){
                            
                                ?>
                                
                            <tr>
                                <th><?php echo $no++; ?></th>
                                <th>&nbsp &nbsp &nbsp<?php echo $t['merek_produk']; ?></th>
                                <th>&nbsp &nbsp &nbsp &nbsp<?php echo $t['kategori_produk']; ?> </th>
                                <th><?php echo $t['tipe_produk']; ?></th>
                                <td><?php echo date('d F Y',strtotime($t['tgl_order_produk'])); ?></td>
                                <th>Rp. <?php echo number_format( $t['harga_produk'],0,',','.');?></th>
                                <th>&nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $t['jumlah_produk']; ?></th>

                                  <th>Rp. <?php echo number_format( $t['total_harga'],0,',','.'); ?></th>
                                <td>
             
             &nbsp &nbsp &nbsp &nbsp<a href="#"  data-target="#delete<?=$t['nomor_transaksi'];?>" class="delete" data-toggle="modal"> <i class="fa-sharp fa-solid fa-trash"></i></a>
             
          </td>
          <td></td>
                            </tr>
                           
                          </tbody>
                     
                     <script>
// -------------------------------------------------------------------------------------------------------------------------------------//

//----------------------------------------------STOCK HANYA BISA DI ISI OLEH ANGKA------------------------------------------//
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }
    </script>
<!-- -------------------------------------------------------------------------------------------------------------- -->

            </div>
              </div>
            </div>
                </div>

                           <?php 
                        }
                             ?> 
                       </table>
                  
                       </div>
                    </div>

                   
               
                
<!-------------------------------------------------------------Modal Tambah-------------------------------------------------------------->
                                        
        <div class="modal fade" tabindex="-1" id="tambah" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <form action="<?php echo site_url('Dashboard/simpan_produk')?>" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Raket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Merk Produk</label>
            <input type="text" class="form-control" required name="merek_produk" id="merek_produk">
        </div>
        <div class="form-group">
            <label>Kategori Produk</label> 
            <input type="text" class="form-control" required name="kategori_produk" id="kategori_produk">
        </div>
        <div class="form-group">
            <label>Tipe Raket</label>
            <input type="text" class="form-control" required name="tipe_produk" id="tipe_produk">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" required name="harga_produk" id="harga_produk" onkeypress="return hanyaAngka(event)">
        </div>
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" class="form-control" name="gambar_produk" required id="gambar_produk">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
      </div>
      </form>
    </div>
  </div>
</div>
 
<!------------------------------------------------------delete-modal start------------------------------------------------------------>
            <?php foreach($transaksi as $t) :?>


        <div class="modal fade" tabindex="-1" id="delete<?=$t['nomor_transaksi'];?>" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda Yakin Ingin Menghapus Data <b><?php echo $t['merek_produk']?> </b>dengan tipe <b><?php echo $t['tipe_produk']; ?>?</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <a href="<?php echo base_url().'dashboard/transaksi_hapus/'.$t['nomor_transaksi']; ?>"> <button type="button" class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

                      


<!------------------------------------------------------- MODAL LOGOUT ------------------------------------------------------------------>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI</h5>
        
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin keluar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batalkan</button>
        <a href="<?php echo base_url().'Login/logout'?>">  <button type="button" class="btn btn-primary">Yakin</button></a>
      </div>
    </div>
  </div>
</div>  
</div>
  
    
<!-------------------------------------------------------------------jquery Bootstrap ---------------------------------------------------->
   <script src="../js/jquery-3.3.1.slim.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
       $(document).ready(function(){
          $(".xp-menubar").on('click',function(){
            $("#sidebar").toggleClass('active');
            $("#content").toggleClass('active');
          });
          
          $('.xp-menubar,.body-overlay').on('click',function(){
             $("#sidebar,.body-overlay").toggleClass('show-nav');
          });
          
       });
  </script>
  
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
  
  </html