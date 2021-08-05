
<?php
$serveur="localhost";
$user="root";
$pw="";
$bdd="guide";

$cnpstock= new mysqli($serveur,$user,$pw,$bdd);
session_start();


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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
 
    
<style>
   table td {
max-width: 120px;
white-space: nowrap;
text-overflow: ellipsis;
word-break: break-all;
overflow: hidden;
}
        .input-icons i {
            position: absolute;

        }
          
        .input-icons {
            width: 100%;
            margin-bottom: 10px;
            float :right;

        }
          
        .icon {
            padding: 10px;
            min-width: 40px;
            float :right;

        }
          
        .input-field {
            width: 100%;
            padding: 10px;
            text-align: center;
            
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
                  <span class="availability-status online" id="online" style="display:block"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">
                 <?php echo $ligne ['FirstName'] ?>	 <?php echo $ligne ['LastName'] ?>	                                 

                  </p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="dashboard.php">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Refersh </a>
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
        <nav class="sidebar sidebar-offcanvas" id="sidebar" >
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
              <a class="nav-link" href="admindashb.php">
                <span class="menu-title">New Categry-Specialties</span>
                <i class="mdi mdi-checkbox-marked-circle-outline menu-icon"></i>
              </a>
            </li>




            <li class="nav-item">
              <a class="nav-link" href="newcours.php">
                <span class="menu-title">New Courses</span>
                <i class="mdi mdi-book-multiple-variant menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="nevent.php">
                <span class="menu-title">New events</span>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="newspc.php">
                <span class="menu-title">New Spcialite</span>
                <i class="mdi mdi-trophy-variant-outline menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="Ngrant.php">
                <span class="menu-title">New Scholarships</span>
                <i class="mdi mdi-clipboard-text menu-icon"></i>
              </a>
            </li>
       
        
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="row">

    
          <div class="col-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <center><h1 class="card-title text-black" style="color:#b66dff">New  Courese </h1></center>
                    <hr>
                    <center> <h3 class="card-title text-black"><span style="color:red">Attention</span> : One course Can Belong To Several Categories. Click On The Category With Ctrl For Multi Choice.
 </h3></center>
                  <hr>
                    <br>
                    <form class="forms-sample" method="post" action=""  enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Name Coures</label>
                        <input  name="course" type="text" class="form-control" id="exampleInputName1" placeholder="Name Coures">
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleSelectGender">Name catg-spicialete</label>
                        <select name="list[]" multiple class="form-control" id="exampleSelectGender">
                        <option>---- Chose catg_specialty------ </option>
              <?php $quariy =mysqli_query($cnpstock,"select DISTINCT  * from catg_specialty ");
               while ( $row = mysqli_fetch_array($quariy)){?>
                 <option value="<?php echo $row['Catg_id']?>"><?php echo $row['Name']?></option>
                 <?php }?>
                                      
                </select>
                <br>

                <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input  name="descrip" type="text" class="form-control" id="exampleInputName1" placeholder="Description">
                      </div>

                      <input type="file" name="profileImage" id="profileImage" class="form-control" >

                     


               <br>
                  
                      <input name="submit" type="submit" class="btn btn-gradient-primary mr-2">

                    </form>
                  </div>
                </div>
              </div>

              </div>
              


              <!--  start List Courese -->
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"  style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">

<?php
                  $query="SELECT * FROM courses INNER JOIN catg_specialty ON catg_specialty.Catg_id=courses.idsplt
                  ";

          $sql= mysqli_query($cnpstock, $query) or die("database error:". mysqli_error($cnpstock));
?>

                  <table   id="example" class="table table-striped table-bordered nowrap" style="width:100%"  >
            <thead>
                <tr>
                    <th>Courese</th>
                    <th>Name catg specialite</th>

                 

                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_assoc($sql)){?>

                <tr >
                    <td ><?php echo $row ['namecour']; ?></td>
                    <td class="break" ><?php echo $row ['description']; ?></td>

                    
      
                    <td>
        <a href="newcours.php?id=<?php echo $row['idcours']; ?>" class="edit_btn" ><i class="far fa-edit"></i></a>
    
      <a href="newcours.php?idd=<?php echo $row['idcours']; ?>" onclick='return confirm ("are you sur to delete");' class="delete" title="Delete" data-toggle="tooltip"><i class="far fa-trash-alt"></i></a>
      </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>




















<?php
$query="SELECT * FROM courses";

$sql= mysqli_query($cnpstock, $query) or die("database error:". mysqli_error($cnpstock));
?>
  

<!-- edite data table -->
                    <?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $update = true; 
    $record = mysqli_query($cnpstock, "SELECT * FROM courses INNER JOIN catg_specialty on catg_specialty.Catg_id=courses.idsplt 
    WHERE idcours='$id'");
    $data = mysqli_fetch_array($record);
}

?>
<br>
<br>
                    <form  action="" method="post">
              <div class="form-group">
              <label for="exampleFormControlSelect2" class="mb-3"style="color:#b66dff" >name cour</label>
                <input type="text" name="name" class="form-control" id="name"  value="<?php echo      $data ['namecour']; ?>">
              <label for="exampleFormControlSelect2" class="mb-3"style="color:#b66dff" >Image</label>
                <input type="text" name="img" class="form-control" id="name"  value="<?php echo      $data ['imgcour']; ?>">
              </div>
              <div class="form-group">
              <label for="exampleFormControlSelect2" class="mb-3"style="color:#b66dff" >description</label>
                <input type="text" name="disc" class="form-control" id="name"  value="<?php echo      $data ['description']; ?>">
              <label for="exampleFormControlSelect2" class="mb-3"style="color:#b66dff" >Name catg</label>
                <input type="text" name="catg" class="form-control" id="name"  value="<?php echo      $data ['Name']; ?>">
              </div>
           
           <button id="btn" class="btn btn-gradient-primary "  type="submit" name="update" >update</button>
  <br>
  </form>
            
<?php

// --------------------------update -------------//
if (isset($_POST['update'])) {
  $name	 =  $_POST['name'];
  $img	 = $_POST['img'];
  $discrption	 = $_POST['disc'];

  $catg	 = $_POST['catg'];

  

   $updat="UPDATE courses
    INNER join catg_specialty
   on courses.idsplt=catg_specialty.Catg_id 
   set catg_specialty.Name ='$catg', namecour='$name',imgcour='$img',description='$discrption' WHERE idcours='$id'";
    $dataa=mysqli_query($cnpstock,$updat);
    if($dataa)
    {
      echo '<script>window.location.href = "newcours.php";
      </script>';


    }else
    echo "error";
}
?>
<!-- Delete -->
<?php
if(isset($_GET["idd"]))
{
    $idd = $_GET["idd"];
    if($idd)
    {
      $record = mysqli_query($cnpstock, "DELETE FROM courses  WHERE idcours	='$idd' ");
        
        if ( $record ) {
          echo '<script>window.location.href = "newcours.php";
          </script>';
              } else {
            echo "Error deleting record: " . mysqli_error($cnpstock);
          }
    }
}
?>
</div>

        
            
              
        
       



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
  <!-- edite -->

          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©kaouter izi 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Kaoutar izi </a> </span>
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
    <script>

function online(){
    document.getElementById("online").style.display = "none";


    }
    </script>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    


    <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>


    <!-- End custom js for this page -->
  </body>
</html>

<?php

if(isset($_POST['submit']))
{
    $catg = $_POST['list'];
    $course=$_POST['course'];
    $discrption=$_POST['descrip'];
    $image=$_FILES['profileImage']['tmp_name'];
    $traget="img/".$_FILES['profileImage']['name'];
    move_uploaded_file($image,$traget);
      


    foreach($catg as $item)
    {
        // echo $item."<br>";
        $query = "INSERT INTO courses (namecour,imgcour,description,idsplt)
        
         VALUES ('$course','$traget','$discrption','$item')";
        $query_run = mysqli_query($cnpstock, $query);
    }

    if($query_run &&  move_uploaded_file($image,$traget)!=0 )
    {
        echo("data save");
    }
    else
    {
        echo("not save");
    }
}
?>



