
<?php
$serveur="localhost";
$user="root";
$pw="";
$bdd="guide";

$cnpstock= new mysqli($serveur,$user,$pw,$bdd);
session_start();
if( $_SESSION['email']){

?>
<?php
$req="select * from users where Email='".$_SESSION['email']."'";
$resultat=mysqli_query($cnpstock,$req);
$ligne=mysqli_fetch_assoc($resultat);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ROAD</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="../../assets/css/style.css">


    <style>
        /*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.cardd .card {
  padding: 30px;
  position: relative;
  overflow: hidden;
  background: white;
  box-shadow: 0 0 29px 0 rgba(144, 68, 68, 0.12);
  transition: all 0.3s ease-in-out;
  border-radius: 8px;
  z-index: 1;
}

.cardd .card::before {
    content: '';
    position: absolute;
    background: linear-gradient(to right, #ef45f6, #a114cd)!important;

    right: -60px;
    top: -40px;
    width: 100px;
    height: 100px;
    border-radius: 50px;
    transition: all 0.3s;
    z-index: -1;
}

.cardd .card:hover::before {
  background:#9a55ff;
  right: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border-radius: 0px;
}

.services .icon {
  margin: 0 auto 20px auto;
  padding-top: 10px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  background: #da8cff;
  transition: all 0.3s;

}

.services .icon i {
  font-size: 36px;
  line-height: 1;
  color: #fff;


}

.services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;


}

.services .title a {
  color: white;

}

.services .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;

}

.services .icon-box:hover .title a, .services .icon-box:hover .description {
  color: white;
}
.services .icon-box:hover .title {
  color: white;
}
.services .icon-box:hover .icon {
  background: #fff;
}

.services .icon-box:hover .icon i {
  color: #03111a;
}

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../img/logo1.jpg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            
          <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                <img src="../../<?php echo $ligne['img'];?>" class="myphoto"> 
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">
                 <?php echo $ligne ['FirstName'] ?>	 <?php echo $ligne ['LastName'] ?>	                                 

                  </p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="spcialite.php?score=<?php echo $ligne['score']?>">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Refresh </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../connexion/logout.php">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
      
          
            <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="../index.php">
                <i class="mdi mdi-home"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">


      
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                <img src="../../<?php echo $ligne['img'];?>" class="myphoto"> 
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">
                  <?php echo $ligne ['FirstName'] ?>	 <?php echo $ligne ['LastName'] ?>	                                 

                  </span>
                  <span class="text-secondary text-small">
                  <?php echo $ligne ['slogan'] ."<br>"?>	

                  </span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-routes menu-icon"></i>
              </a>
            </li>




        
            <li class="nav-item">
              <a class="nav-link" href="spcialite.php?score=<?php echo $ligne['score']?>">
                <span class="menu-title">Specialties</span>
                <i class="mdi mdi-book-multiple-variant menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="coureses.php">
                <span class="menu-title">Courses</span>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="event.php">
                <span class="menu-title">events</span>
                <i class="mdi mdi-trophy-variant-outline menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="countries.php">
                <span class="menu-title">Scholarships</span>
                <i class="mdi mdi-clipboard-text menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="expert.php">
                <span class="menu-title">Ask Expert</span>
                <i class="mdi mdi-comment-account-outline menu-icon"></i>
              </a>
            </li>
        
       
        
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper" >
          <div class="row cardd">
      

          <?php
$con=mysqli_connect("localhost","root","","guide");

?>
<section id="services" class="services" >
<div class="container" >

<div class="row">
<?php
$score=$_GET['score'];
if($score){
    $query="SELECT DISTINCT *FROM users , specialties INNER join catg_specialty on
     catg_specialty.Catg_id=specialties.cate_id where
      catg_specialty.score='$score' and Email='".$_SESSION['email']."'
    ";
}

$sql= mysqli_query($con, $query) or die("database error:". mysqli_error($con));

while ( $row = mysqli_fetch_assoc($sql) ) :

?>
          <div class="col-md-4 grid-margin stretch-card">
                <div class="card" >
               

                  <div class="card-body" style="background-color:white;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                  <h4 class="title"><?php echo $row['Namesplt']?></a></h4>                    
                  <div class="media">
                      <div class="media-body">
                        <p class="card-text">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <?php
endwhile;
?>
    

   
        
    









  </div>
                  </div>
                </div>
              </div>

            </div>
   
          </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
       
    


        
</div>
  
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©kaoutar izi 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"> </a> KAWTAR IZI</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/dashboard.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>

<?php
}
else{

  header("location:../../connexion/login.php");
}


?>