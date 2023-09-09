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
          <li class="active">
          <a href="#" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
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
          
           <li> 
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
                    <h2 class="page-title">Dashboard</h2>
                    <br>
                    <br>
                    <br>

 <!--------------------------------------- INPUT KEYWORD BERDASARKAN MEREK, KATEGORI, TIPE-------------------------------------------- -->

                 
             </div>
          </div>
          </div>
<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->


<!-- -----------------------------------------------PESAN TAMBAH DATA, HAPUS DATA--------------------------------------------------- -->
         <?php echo $this->session->flashdata('pesan') ?>
         <?php echo $this->session->flashdata('pesanlogout') ?>
          
<!----------------------------------------------------------------------------------------------------------------------------------  -->
         

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
                               <a href="<?php echo base_url().'dashboard/simpan_produk'; ?>" data-target="#tambah" class="btn btn-primary" data-toggle="modal">
                               <i class="material-icons">&#xE147;</i>
                               <span>Tambah Admin</span>
                               </a>
                               
                             </div>
                         </div>
                       </div>
                      <script type="text/javascript"></script>

<!--------------------------------- UNTUK MEMANGGIL JUMLAH DATA BERDASARKAN PENCARIAN DARI CONTROLLER ---------------------------------->
<br>


     <div class="content">
        <div class="row">
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats" style="border-radius: 20px;box-shadow: 7px 7px 10px;" >
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <img src="../assets/gambar/money2.png" width="80px" height="80px">
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">&nbsp &nbsp &nbsp Penjualan</p>
                      <p class="card-title">&nbsp &nbsp  Rp. <?php echo number_format( $sum_jumlah->total_harga,0,',','.');  ?>   <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="<?php echo base_url().'dashboard/transaksi' ?>">  
                  Cek Detail
                  <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats" style="border-radius: 20px;box-shadow: 7px 7px 10px;" >
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <img src="../assets/gambar/produk.png" width="80px" height="80px" >
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">&nbsp &nbspProduk</p>
                      <p class="card-title"> &nbsp &nbsp  &nbsp &nbsp <?php echo $count; ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
               <div class="stats">
                 <a href="<?php echo base_url().'dashboard/raket' ?>">  
                  Cek Detail
                  <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats" style="border-radius: 20px; box-shadow: 7px 7px 10px;" >
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <img src="../assets/gambar/network.png" width="80px" height="80px" >
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Transaksi</p>
                      <p class="card-title"> &nbsp &nbsp &nbsp &nbsp<?php echo $total_rows; ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="<?php echo base_url().'dashboard/transaksi' ?>">  
                  Cek Detail
                  <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          </div>
        </div> 
        <br>
<!-- Pop Up confirm logout -->
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
  
    
    <!--jquery Bootstrap -->
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
  
  </html>


