
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

  </head>
  <body>
  


<div class="wrapper">
     
      <div class="body-overlay"></div>
     
     <!-------sidebar--design------------>
     
     <div id="sidebar">
        <div class="sidebar-header">
          <h2>IKO SPORT</h2>
        </div>
        <ul class="list-unstyled component m-0">
          <li class="">
          <a href="<?php echo base_url(). 'dashboard/dashboard' ?>" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
          </li>
          
          <li class="dropdown">
          <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
          <i class="material-icons">library_books</i>Daftar Barang
          </a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu1">
             <li><a href="<?php echo base_url(). 'dashboard/raket' ?>">   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Produk</a></li>
             
          </ul>
          </li>
          
          
           <li class="dropdown">
          <a href="<?php echo base_url().'dashboard/transaksi'; ?>"><i class="material-icons">apps</i>Transaksi
          </a>
          <li class="dropdown">
          <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
          class="dropdown-toggle">
          <i class="fa-solid fa-circle-user fa-xl"></i>Akun
          </a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu2">
            <li class="active"><a href="<?php echo base_url(). 'dashboard/admin' ?>">
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Data Admin &nbsp <i class="fa-sharp fa-solid fa-users"></i>
</a></li>
             <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Keluar &nbsp <i class="fa-solid fa-right-from-bracket fa-xl"></i>
</a></li>
 
           
          </ul>
          </li>
         
          
          
          
          
           
<!-- Button Keluar -->


        
        </ul>
     </div>
     
      <div id="content">
<!-- Button Keluar End -->


         
          <!------top-navbar-start-----------> 
             
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
                    <h4 class="page-title">Data Produk</h4>
                    <ol class="breadcrumb">
                      
                     
                    </ol>
                 </div>
                 
                 
             </div>
          </div>
          <!------top-navbar-end-----------> 
          
          <!--                              -->
           <!------main-content-start-----------> 
              
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
                               <a href="<?php echo base_url().'dashboard/simpan_admin'; ?>" data-target="#tambah" class="btn btn-primary" data-toggle="modal">
                               <i class="material-icons">&#xE147;</i>
                               <span>Tambah Admin</span>
                               </a>
                               
                             </div>
                         </div>
                       </div>
                      
                       <table class="table table-striped table-hover">
                          <thead class="table">
                             <tr>
                              <th><b>No</b></th>
                             <th>Nama Admin</th>
                             <th>Username Admin</th>
                             <th>Password</th>
                             <th></th>
                             </tr>
                          </thead>
                          
                          <tbody>
                              <?php 
                              $no = 1;
                              foreach($admin as $a){
                            
                                ?>
                              
                            <tr>
                                <th><?php echo $no++; ?></th>
                                <th><?php echo $a->admin_nama; ?></th>
                                <th><?php echo $a->username_admin; ?></th>
                                <th><?php echo $a->password_admin; ?></th>
                                <td>
                                 <a  href="<?php echo base_url().'dashboard/edit_admin/'.$a->id_admin; ?>"> <i class="fa-solid fa-pen-to-square"></i></a> &nbsp
                                 <a href="#"  data-target="#delete<?=$a->id_admin;?>" class="delete" data-toggle="modal"> <i class="fa-sharp fa-solid fa-trash"></i></a>             
                                </td>
                            </tr>
                          </tbody>
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

                    <!-- Edit Modal -->
                 <?php foreach ($admin as $a): {
                    
                 } ?>
               <div class="modal fade" tabindex="-1" id="edit<?=$a->id_admin;?>" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
      <div class="modal-header">
        <h5 class="modal-title">Edit admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Nama Admin</label>
             <input type="text" class="form-control"  name="admin_nama" id="admin nama" value="<?php echo $a->admin_nama ?>">
        </div>
         <div class="form-group">
            <label>Username Admin</label>
             <input type="text" class="form-control"  name="username_admin" id="username admin" value="<?php echo $a->username_admin ?>">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control"   name="password_admin" id="password admin" value="<?php echo $a->password_admin ?>">
        </div>
      </div>
      <div class="modal-footer">
            <input type="reset" class="btn btn-light" value="Batal">
           <a href="<?php echo base_url().'dashboard/update_admin'; ?>"> <button type="submit" class="btn btn-warning" value="Edit"></button></a>
      </div>

    </div>
  </div>
</div>         
               <?php endforeach ?>
                
                                       <!----Modal Tambah--------->
                                        
        <div class="modal fade" tabindex="-1" id="tambah" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <form action="<?php echo site_url('Dashboard/simpan_admin')?>" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title">Tambah admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Nama Admin</label>
            <input type="text" class="form-control" required name="admin_nama" id="admin_nama">
        </div>
        <div class="form-group">
            <label>Username Admin</label>
            <input type="text" class="form-control" required name="username_admin" id="username_admin">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" required name="password_admin" id="password_admin" minlength="5" oninvalid="this.setCustomValidity('Masukkan minimal 8 karakter')" oninput="this.setCustomValidity('')">
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

 
                           <!----delete-modal start--------->
            <?php foreach($admin as $a) :?>


        <div class="modal fade" tabindex="-1" id="delete<?=$a->id_admin;?>" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda Yakin Ingin Menghapus Data <b><?php echo $a->admin_nama?> </b>dengan tipe <b><?php echo $a->username_admin; ?>?</b></p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
       <a href="<?php echo base_url().'dashboard/admin_hapus/'.$a->id_admin; ?>"> <button type="button" class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

                       <!----Modal Beli--------->
                
                   
                       
                       
                    
                       
                       
                    






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


