<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');

*{
    font-family: 'Poppins', sans-serif;
}
.wrapper{
    background: #ececec;
    padding: 0 30px 0 30px;
}
.main{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.row{
    width: 900px;
    height: 550px;
    border-radius: 10px;
    background: #fff;
    box-shadow: 5px 5px 10px 1px rgba(0,0,0,0.8);
}
.side-image{
    background-image: url("assets/img/sport.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    border-radius: 10px 0 0 10px;
}
img{
    width: 35px;
    position: absolute;
    top: 40px;
    left: 30px;
}
.text{
    
    color: whitesmoke;
    margin-left: 187px;
    font-size: 37px;
    margin-top: 50px;
    transform: translate(-50%, -50%);
}

.text2{
    
    color: whitesmoke;
    margin-left: 200px;
    font-size: 18px;
    transform: translate(-50%, -50%);
}
i{
    font-weight: 400;
    font-size: 15px;
}
.right{
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
.input-box{
    width: 390px;
    box-sizing: border-box;
}
header{
    font-size: 30px;
}

.input-box header{
    font-weight: 700;
    text-align: center;
    margin-bottom: 45px;
}
.input-field{
    display: flex;
    flex-direction: column;
    position: relative;
    padding: 0 10px 0 10px;
}
.input{
    height: 45px;
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 1px solid rgba(0,0,0,0.2);
    outline: none;
    margin-bottom: 20px;
    color: #40414a;
}
.input-box .input-field label{
    position: absolute;
    top: 10px;
    left: 10px;
    pointer-events: none;
    transition: .5s;
}
.input-field .input:focus ~ label{
    top: -10px;
    font-size: 13px;
}
.input-field .input:valid ~ label{
    top: -10px;
    font-size: 13px;
    color: #5d5076;
}
.input-field .input:focus, .input-field .input:valid{
    border-bottom: 1px solid #743ae1;
}
.submit{
    border: none;
    outline: none;
    height: 45px;
    background: #ececec;
    border-radius: 5px;
    transition: .4s;
}
.submit:hover{
    background: rgba(37, 95, 156,0.9);
    color: #fff;
}
.signin{
    text-align: center;
    font-size: small;
    margin-top: 25px;
}
span a{
    text-decoration: none;
    font-weight: 700;
    color: #000;
    transition: .5s;
}
span a:hover{
    text-decoration: underline;
    color: #B2DFDB;
}
@media only screen and (max-width: 768px){
    .side-image{
        border-radius: 10px 10px 0 0;
    }
    img{
        width: 45px;
        position: absolute;
        top: 20px;
        left: 47%;
    }
    .text{
        position: absolute;
        top: 70%;
        text-align: center;
    }
    .text p,i{
        font-size: 17px;
    }
    .row{
        max-width: 520px;
        width: 100%;
    }
    img{
        width: 200px;
        height: 200px;
    }
}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>IKO SPORT</title>
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    
                    <div class="header-text mb-4">
                   
                    <form method="post" action="<?php echo base_url().'Login/login' ?>">
                    
                    </div>
                    
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header>IKO SPORT</header>
                        <header>LOGIN</header>
                        <?php 
                         if(isset($_GET['pesan'])){
                            if($_GET['pesan'] == "gagal"){
                                echo "<div class='alert alert-danger'><center>Password dan Username tidak terdaftar.</center></div>";
                            }else if($_GET['pesan'] == "logout"){
                                echo "<div class='alert alert-danger'><center>Anda telah keluar.</center></div>";
                            }else if($_GET['pesan'] == "belumlogin"){
                                echo "<div class='alert alert-warning'><center>Ooops...anda belum login.</center></div>";
                            }
                         } ?>
                        <div class="input-field">
                            <input type="text" class="input" name="username" id="email" required autocomplete="off" autofocus>
                            <label for="email">Email</label>
                        </div>
                        
                        <div class="input-field">
                            <input type="password" class="input" name="password" id="myInput" required>
                            <label for="password">Password</label>
                        </div>
                         <label class="lihat">&nbsp Lihat Password
<input type="checkbox" onclick="myFunction()" class="check" ></label>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                        <div class="input-field">
                            <input type="submit" class="submit" value="login">
                            
                        </div>
                        <div class="signin">
                            <span>Belum mempunyai akun? <a href="#">Daftar Akun</a></span>
                        </div>
                     </div>

                     </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>