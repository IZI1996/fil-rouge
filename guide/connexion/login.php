
<?php


$serveur="localhost";
$user="root";
$pw="";
$bdd="guide";

$cnpstock= new mysqli($serveur,$user,$pw,$bdd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

  <style>
    /*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

.border-md {
    border-width: 2px;
}




/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/

body {
    min-height: 100vh;
}

.form-control:not(select) {
    padding: 1.5rem 0.5rem;
}

select.form-control {
    height: 52px;
    padding-left: 0.5rem;
}

.form-control::placeholder {
    color: #ccc;
    font-weight: bold;
    font-size: 0.9rem;
}
.form-control:focus {
    box-shadow: none;
}
.btnreg{

  background-image: linear-gradient(to right, #da8cff, #9a55ff);
color:white;
}
      .text{
      color: #da8cff;
    }

    .far{
      color: #da8cff;

    }
    .fas{
      color: #da8cff;
    }
    </style>


</head>
<body>
  <!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand">
                <!-- <img src="https://res.cloudinary.com/mhmd/image/upload/v1571398888/Group_1514_tjekh3_zkts1c.svg" alt="logo" width="150"> -->
            </a>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-6 pr-lg-5 mb-5 mb-md-0">
            <img src="../img/undraw_adventure_map_hnin.png" alt="" class="img-fluid mb-3 d-none d-md-block">
         
        </div>

        <!-- Registeration Form -->
        <div class="col-md-6 col-lg-6 ml-auto">
            <form action="" method="post">
                <div class="row">


                    <!-- Email Address -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="far fa-envelope"></i>   </span>
                        </div>
                        <input id="email" type="email" name="Email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                    </div>

                     <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fas fa-lock"></i> </span>
                        </div>
                        <input id="email" type="Password" name="Password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                


             
                 


                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button name="btlogin" class="btn btnreg  btn-block py-2">
                            <span class="font-weight-bold">Sign Up</span>
                            </button>
                            <?php
             if(isset($_POST['btlogin']))
             {
                 $req="select * from users where Email='".$_POST['Email']."' and Password='".$_POST['Password']."'"; 
                if($resultat=mysqli_query($cnpstock,$req))
                {
                   $ligne = mysqli_fetch_assoc($resultat);
                   if($ligne!=0 && $ligne['type']==1 ){
                       session_start();
                       $_SESSION['email']=$_POST['Email'];
                       header("location:../views/users/dashboard.php");    
                    // echo "<font color='#F0001D'>GOOD</font>";
              
                 }else{
                    session_start();
                    $_SESSION['email']=$_POST['Email'];
                    header("location:../views/admin/admindashb.php");    
                 // echo "<font color='#F0001D'>GOOD</font>";
           
                 }


                    } else{
                        echo "<font color='#F0001D'>Login ou mot de passe est invalid</font>";
                    } 
                }       
        
             
             ?>



                    </div>

                    <!-- Divider Text -->
                    <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>

              

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Are you new user? <a href="register.php" class="text ml-2">Register</a></p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>











  </script>
  <script src="jquery-3.3.1.slim.min.js" ></script>
<script src="bootstrap.bundle.min.js" ></script>
</body>
</html>
