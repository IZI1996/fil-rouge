
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/style.css">
<style>
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
      <!--  -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../img/logo1.jpg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch" style="box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
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
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
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
<br>
<br><br>
<br>
<br><br><br>
<br>
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
          <div class="content-wrapper">
          <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body"  style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <h4 class="card-title" style="font-size:20px;  text-align: center;">This test is based on the <span style="color:#ef6060">Holland </span> Orientation Chart in order to find out which specialization is right for you.

Test yourself through this "quiz" and find out what<span style="color:#ef6060"> specialty <span>suits you!</h4>

<br>
         <div  style="margin-left:20PX">           
 <form name="Quize" id="Quize">

<!-- Q1 -->
    <div id="Q1"style="display:block">
    <p style="  font-weight: bold;"> 1.Choose what suits you from the following:
    <span class="checkmark"></span>

  </p>


  <div class="form-check">
     <label class="form-check-label">
           <input name="question1" value="A1"  type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" > A. I love organizing records and files </label>
  </div>
<hr>
  <div class="form-check">
     <label class="form-check-label">
           <input  name="question1" value="B1" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" > B. I can operate machinery and tools </label>
  </div>

  <hr>
  <div class="form-check">
     <label class="form-check-label">
           <input name="question1" value="C1" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" >  C. Draw, color, write an article or a story </label>
  </div>


    <hr>

    <div class="form-check">
     <label class="form-check-label">
           <input   name="question1" value="D1" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" > D. I can work as a volunteer </label>
  </div>
    <hr>
    <div class="form-check">
     <label class="form-check-label">
           <input name="question1" value="F1" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" > F. Learn strategies for the success of an organization</label>
  </div>
      <hr>

    <br>
    <button  class="btn btn-gradient-danger btn-sm" type="button" name="" value="Next" onclick="check1()">Next <i class="far fa-arrow-alt-circle-right"></i></button>


    </div>




    <!-- Q2 -->

    <div  id="Q2" style="display:none">
    <p style="  font-weight: bold;">2.The local authorities in your city have offered discount offers for training courses in various fields.. You will choose training in:
    <div class="form-check">
     <label class="form-check-label">
           <input name="question2" value="A2"  type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" > A.Writing and storytelling </label>
  </div>
<hr>
  <div class="form-check">
     <label class="form-check-label">
           <input  name="question2" value="B2" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="" > B.Office programs </label>
  </div>

  <hr>
  <div class="form-check">
     <label class="form-check-label">
           <input name="question2" value="C2" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="" >  C. HR </label>
  </div>


    <hr>

    <div class="form-check">
     <label class="form-check-label">
           <input   name="question2" value="D2" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="" > D. Psychoanalysis </label>
  </div>
    <hr>
    <div class="form-check">
     <label class="form-check-label">
           <input name="question2" value="F2" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" > F. Nursing</label>
  </div>
      <hr>

    <br>
    <button  class="btn btn-gradient-danger btn-sm" type="button" name="" value="Next" onclick="check2()">Next <i class="far fa-arrow-alt-circle-right"></i></button>    
    <button class="btn btn-gradient-danger btn-sm  float-right" style="padding-bottom:9px; text-align:center" type="button" name="" value="Previous" onclick="check2p()" > <i class="far fa-arrow-alt-circle-left"></i> Previous</button>
    </div>







    <!-- Q3 -->


    <div  id="Q3"   style="display:none">
    <p style="  font-weight: bold;">3.When you sit in front of the TV, you tend to watch:</p>
    <div class="form-check">
     <label class="form-check-label">
           <input name="question3" value="A3"  type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios3" value="" > A.art channels  </label>
  </div>
<hr>
  <div class="form-check">
     <label class="form-check-label">
           <input  name="question3" value="B3" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios3" value="" > B. news and political programs</label>
  </div>

  <hr>
  <div class="form-check">
     <label class="form-check-label">
           <input name="question3" value="C3" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios3" value="" >  C.educational channels </label>
  </div>


    <hr>

    <div class="form-check">
     <label class="form-check-label">
           <input   name="question3" value="D3" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios3" value="" > D. National Geographic Channel </label>
  </div>
    <hr>
    <div class="form-check">
     <label class="form-check-label">
           <input name="question3" value="F3" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" > F. Scientific programs related to chemistry and biology</label>
  </div>
      <hr>

    <br>
    <button  class="btn btn-gradient-danger btn-sm" type="button" name="" value="Next" onclick="check3()">Next <i class="far fa-arrow-alt-circle-right"></i></button>
    <button class="btn btn-gradient-danger btn-sm  float-right" style="padding-bottom:9px; text-align:center" type="button" name="" value="Previous" onclick="check3p()" ><i class="far fa-arrow-alt-circle-left"></i> Previous</button>
    </div>



    <!-- Q4 -->


    <div  id="Q4"  style="display:none">
    <p style="  font-weight: bold;">4.The most beloved high school subject to your heart is:</p>
    <div class="form-check">
     <label class="form-check-label">
           <input name="question4" value="A4"  type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios4" value="" > A. geography </label>
  </div>
<hr>
  <div class="form-check">
     <label class="form-check-label">
           <input  name="question4" value="B4" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios4" value="" > B. mathematics </label>
  </div>

  <hr>
  <div class="form-check">
     <label class="form-check-label">
           <input name="question4" value="C4" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios4" value="" >  C.Literature and performances </label>
  </div>


    <hr>

    <div class="form-check">
     <label class="form-check-label">
           <input   name="question4" value="D4" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios4" value="" > D. Physical education </label>
  </div>
    <hr>
    <div class="form-check">
     <label class="form-check-label">
           <input name="question4" value="F4" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" > F. Biology</label>
  </div>
      <hr>

    <br>
    <button  class="btn btn-gradient-danger btn-sm" type="button" name="" value="Next" onclick="check4()">Next <i class="far fa-arrow-alt-circle-right"></i> </button>

    <button class="btn btn-gradient-danger btn-sm  float-right" style="padding-bottom:9px; text-align:center" type="button" name="" value="Previous" onclick="check4p()" ><i class="far fa-arrow-alt-circle-left"></i> Previous</button>
    </div>



    <!-- Q5 -->


    <div  id="Q5"  style="display:none">
    <p style="  font-weight: bold;">5.Something you like/love to do:</p>
    <div class="form-check">
     <label class="form-check-label">
           <input name="question5" value="A5"  type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios5" value="" > A. Helping others solve their personal problems </label>
  </div>
<hr>
  <div class="form-check">
     <label class="form-check-label">
           <input  name="question5" value="B5" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios5" value="" > B. playing a musical instrument </label>
  </div>

  <hr>
  <div class="form-check">
     <label class="form-check-label">
           <input name="question5" value="C5" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios5" value="" >  C.Read magazines and articles in business </label>
  </div>


    <hr>

    <div class="form-check">
     <label class="form-check-label">
           <input   name="question5" value="D5" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios5" value="" > D.Understand and explain the roles and functions of the human body parts </label>
  </div>
    <hr>
    <div class="form-check">
     <label class="form-check-label">
           <input name="question5" value="F5" type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" > F.Home Furniture Repair</label>
  </div>
      <hr>

    <br>
    <button class="btn btn-gradient-danger btn-sm  float-right" style="padding-bottom:9px; text-align:center" type="button" name="" value="Previous" onclick="check5p()" ><i class="far fa-arrow-alt-circle-left"></i> Previous</button>
    </div>
<br>
<br>
<br>
<input class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn col-6 " style="margin-left:110PX"type="button" name="" value="Im done!" onclick="check()">
</form>

<script>
function check(){
    let count=0;
    let q1=document.Quize.question1.value;
    let q2=document.Quize.question2.value;
    let q3=document.Quize.question3.value;
    let q4=document.Quize.question4.value;
    let q5=document.Quize.question5.value;


    if (q1=="B1" || q1=="D1") {count=count+10}
    if (q2=="F2") {count=count+5}
    if (q3=="F3") {count=count+5}
    if (q4=="B4") {count=count+5}
    if (q5=="D5") {count=count+5}



async function postData(url = '', data ) {
  const response = await fetch(url, {
    method: 'POST',  
    headers: {
      'Content-Type': 'application/json',
      "Access-Control-Allow-Origin" : "*", 
      "Access-Control-Allow-Credentials" : true ,
      'Accept': 'application/json'
    },
    body: JSON.stringify(data) 
  });
  return response.json(); 
}
postData('http://localhost/GuideWay/addScore.php',  {count:count} )
  .then(data => {
    console.log(data); 
  });

window.location.href = "dashboard.php"
}




function check1(){
    document.getElementById("Q1").style.display = "none";
    document.getElementById("Q2").style.display = "block";

    }
    function check2(){
    document.getElementById("Q2").style.display = "none";
    document.getElementById("Q3").style.display = "block";

    }
    function check3(){
    document.getElementById("Q3").style.display = "none";
    document.getElementById("Q4").style.display = "block";

    }
    function check4(){
    document.getElementById("Q4").style.display = "none";
    document.getElementById("Q5").style.display = "block";

    }




    function check5p(){
    document.getElementById("Q5").style.display = "none";
    document.getElementById("Q4").style.display = "block";

    }
    function check4p(){
    document.getElementById("Q4").style.display = "none";
    document.getElementById("Q3").style.display = "block";

    }
    function check3p(){
    document.getElementById("Q3").style.display = "none";
    document.getElementById("Q2").style.display = "block";

    }
    function check2p(){
    document.getElementById("Q2").style.display = "none";
    document.getElementById("Q1").style.display = "block";

    }

 
 
</script>
  </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-white">Todo</h4>
                    <div class="add-items d-flex">
                      <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn col-12" id="add-task">Description Quize</button>
                    </div>
                    <blockquote class="blockquote blockquote-primary">

                     <p style="font-size:20px;  text-align: center;">This is your first step with us towards your goal
                          We put before you a test that brings you closer to knowing yourself more. <span style="color:#9a55ff">This test </span>will help us to show you the closest majors,   <span style="color:#ffd500">universities</span>,  <span style="color:#fe7096">competitions</span> and  <span style="color:#07cdae">courses</span> that may help you in your path. </p>

                          </blockquote>

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
    <!-- End custom js for this page -->
  </body>
</html>

<?php
}
else{

  header("location:login.php");
}


?>