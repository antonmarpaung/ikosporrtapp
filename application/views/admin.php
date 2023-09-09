<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

	<script src="sweetalert2.min.js"></script>
	<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"
      id="theme-styles"
    />

	<!-- Font Google -->
	<link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- UI kit -->
	<link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<!-- lin aos -->

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!--  -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<!-- link sweetalert -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

<!-- font awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome.min.css"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9adbc2840f.js" crossorigin="anonymous"></script>

	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<style>
 

  @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');

.sidebar{
	position: fixed;
	width: 200px;
	height: 100%;
	margin-top: -30px;
	font-family: 'Ubuntu', sans-serif;
	left: 0px;
	background: #1b1b1b;
	
}

.logout{
	margin-top: 62px;
	
}
	

.text{
	margin-right: 0px;
}



.sidebar .text{
color: white;
margin-left: -80px;
font-size: 20px;
font-weight: 600;
line-height: 65px;
text-align: center;
background: #646464;
letter-spacing: 1px;
}
nav ul{
	background:  #323232;
	height: 100%;
	width: 100%;
	list-style: none;
	
}

nav ul li{
	line-height: 60px;
	border-bottom: 1px solid rgba(255, 255, 255, 0.1);
	border-top: 1px solid rgba(255, 255, 255, 0.1);
	margin-left: -40px;
	font-family: 'Ubuntu', sans-serif;
}
nav ul li a{
	color: white;
	text-decoration: none;
	font-size: 14px;
	padding-left: 40px;
	font-weight: 500;
	display: block;
	width: 100%;
	border-left-color: 3px solid transparent;
}
nav ul li a:hover{
	color: #ffe96d;
	background: #1e1e1e;
	border-left-color: cyan;
}
nav ul ul{
	position: static;
	border-bottom: none;
	display: none;
}
nav ul .feat-show.show{
	display: block;
	
}
.cardi{
	
	margin-top: 30px;
	margin-left: 260px;
}
.cardi2{
	
	margin-top: -143px;
	margin-left: 350px;
}
.cardi3{
	
	margin-top: -143px;
	margin-left: 350px;
}

nav ul .serv-show.show1{
	display: block;
	
	
}



nav ul ul li a{
	font-size: 14px;
	color:#e6e6e6 ;
	font-family: 'Ubuntu', sans-serif;
	padding-left: 80px;

}
nav ul ul li a span{
	position: absolute;
	top: 50%;
	right: 20px;
	transform: translateY(-50%);
	font-size: 22px;
	transition: transform 0.4s;	
}
nav ul ul li a:hover span{
	transform: translateY(-50%) rotate(-180deg);
}
.sidebar.show{
	left: 0px;
}
.text1{
	margin-top: 20px;
}

.keluarboot{
	margin-left: 40px;
	
}
.bawah{
	
	margin-top: 64px;
}


</style>
</head>
<body>

<nav class="sidebar">

            <div class="text"><span> <img src="../assets/img/#.png" width="70px" height="70px"></span>IKO SPORT

            </div>

    <ul>
        <li><a href="#"><i class="fa-solid fa-house"></i><b><font color="#808080"> Dasboard</font></b></a></li>
       
        <li>
				
            <a href="#" class="serv-btn"><i class="fa-solid fa-book"></i> Daftar Barang
			<span class="fas fa-caret-down first"></span>   
            
            </a>
			<ul class="serv-show">
                
                <li><a href="<?php echo base_url().'Dashboard/raket' ?>"> <i class="fas fa-list"></i> Raket</a></li>
				<li><a href="#"> <i class="fas fa-list"></i> Sepatu</a></li>
				<li><a href="#"> <i class="fas fa-list"></i> Bola</a></li>
				<li><a href="#"> <i class="fas fa-list"></i> Jersey</a></li>
            </ul>
			
        </li>
        <li><a href="pelanggan/pelanggan1.php"><i class="fa-sharp fa-solid fa-users"></i> Transaksi</a></li>
        <li><a href="TambahAdmin.php"><i class="fa-sharp fa-solid fa-user-secret"></i> Laporan Penjualan</a></li>
        <li><a href="#"><i class="fa-solid fa-people-group"></i> Info Tim Kami</a></li>
		
		<br>	
		<br>
		<br>
		<br>
		<br>
		<br>

<div class="bawah">
<li>
<!-- Button Keluar -->
<div class="keluarboot">
<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Keluar <i class="fa-solid fa-right-from-bracket"></i>
</a></div></div>

</li>


    </ul>

</nav>
</div>
<div class = "cardi">	
<div class="card text-bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Total Pendapatan</div>
  <div class="card-body">
    <h5 class="card-title">Rp500.000.00</h5>
	</div>
  </div>

  
		

  <div class = "cardi2">	
<div class="card text-bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header">Barang Terjual</div>
  <div class="card-body">
    <h5 class="card-title">12 item</h5>
	</div>
	
  </div>
  <div class = "cardi3">	
<div class="card text-bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Barang Refund</div>
  <div class="card-body">
    <h5 class="card-title">0 item</h5>
	</div>
	
  </div>
  <!-- Pop Up confirm logout -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
<script>

    $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
    });

    $('.serv-btn').click(function(){
        $('nav ul .serv-show').toggleClass("show1");
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>