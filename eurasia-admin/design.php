<?php

//$con = mysqli_connect('localhost','root');

//mysqli_select_db($con,'euresia');


//if($con==false){
  
  
 // die("Error:could not connect".mysqli_connect_error());
//}

include('connection.php'); 

if(isset($_POST['submit']))
{

$itemid=$_POST['item'];
$descrip=$_POST['desc'];
$type=$_POST['type'];
$fabcolor=$_POST['fabcolor'];
$size=$_POST['size'];
$threadcolor=$_POST['threadcolor'];
$threadetails=$_POST['threadetails'];
$piping=$_POST['ys1'];
$stiches=$_POST['stiches'];
$rate=$_POST['rate'];
$pipingcolor=$_POST['pipingcolor'];
$pipingdetails=$_POST['pipingdetails'];

$threadcolor1=implode(", ", $_POST["threadcolor1"]);
$threadetails1=implode(", ", $_POST["threadetails1"]);

$imagename= $_FILES['img1']['name'];

$tempimgname=$_FILES['img1']['tmp_name'];

$imagename2= $_FILES['img2']['name']; 

$tempimgname2=$_FILES['img2']['tmp_name'];

move_uploaded_file($tempimgname,"img/$imagename");

move_uploaded_file($tempimgname2,"img/$imagename2");
  

$sql="INSERT INTO design(item,descrip,types,fabcolor,size,threadcolor,threadetails,piping,nostiches,rate,uploadcad,uploadimg, pipingcolor, pipingdetails,threadcolor1,threadetails1)

values('$itemid','$descrip','$type','$fabcolor','$size','$threadcolor','$threadetails','$piping','$stiches',
'$rate','$imagename','$imagename2','$pipingcolor','$pipingdetails','$threadcolor1','$threadetails1')";

if(mysqli_query($con,$sql)){

  header('location:design.php');
  
  echo "we will get back to you shortly";
}
else{
  
  echo "data not inserted";
}

}
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Euresia Decor - Design Page</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">


  <!---jquery---->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!---fontawsome--->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!---bootstrap 4-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<style>
  
</style>

</head>

<body id="page-top" style="color:black;">

<style type="text/css"> 
  .dropdown:hover>.dropdown-menu
  {
   display:inline-block;
   position: relative;
   box-shadow: 0px 8px 10px 0px rgba(0,0,0,0.5);
   background-color:  ;
  }
</style>

  <!-- Page Wrapper -->
  <div id="wrapper">

<!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        
        </div>
        <div class="sidebar-brand-text mx-3">Eurasia Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Fabric Details
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
          <i class="fas fa-fw fa-cog"></i>
          <span>Design</span>
        </a>
        <div id="collapseone" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded border border-dark" style="font-size:12px;">
      <a class="collapse-item font-weight-bold" href="design.php"> Add Design Details</a>
      <a class="collapse-item font-weight-bold" href="viewdesign.php"> View Design Details</a>
          </div>
        </div>
      </li>
      

       <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item dropdown no-arrow">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-cog"></i>
          <span>Raw Material</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded border border-dark font-weight-bold">
           <!-- <h6 class="collapse-header">Categories:</h6>-->

          
  <span class="btn-group dropdown">
  <a type="button" class="btn dropdown-toggle font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:14px;">
   Fabrics
  </a>
  <div class="dropdown-menu border border-dark" style="font-size:12px; color:black;">
    <a class="dropdown-item font-weight-bold" href="Fabrics.php" style="color: black;">Add Fabric Details</a>
    <a class="dropdown-item font-weight-bold" href="viewfabrics.php" style="color: black;">View Fabric Details</a>
  </div>
  </span>
<br>
  <span class="btn-group dropdown">
  <a type="button" class="btn dropdown-toggle font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:14px;">
  Piping Fabric
  </a>
  <div class="dropdown-menu border border-dark" style="font-size:12px;color: black;">
    <a class="dropdown-item font-weight-bold" href="fabricpiping.php" style="color: black;">Add Piping Fabric Details</a>
    <a class="dropdown-item font-weight-bold" href="view-pipingfabric.php" style="color: black;">View Piping Fabric Details</a>
  </div>
  </span>
<br>
  <span class="btn-group dropdown">
  <a type="button" class="btn dropdown-toggle font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:14px;">
   Zipper
  </a>
  <div class="dropdown-menu border border-dark " style="font-size:12px;color: black;">
    <a class="dropdown-item font-weight-bold" href="zipper.php" style="color: black;">
    Add Zipper Details</a>
    <a class="dropdown-item font-weight-bold" href="viewzipper.php" style="color: black;">View Zipper Details</a>
  </div>
  </span>
<br>
  <div class="btn-group dropdown">
  <a type="button" class="btn dropdown-toggle font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:14px;">
  Tag 
  </a>
  <div class="dropdown-menu border border-dark" style="font-size:12px;color: black;">
    <a class="dropdown-item font-weight-bold" href="tag.php" style="color: black;">Add Tag Details</a>
    <a class="dropdown-item font-weight-bold" href="tagview.php" style="color: black;">View Tag Details</a>
  </div>
  </div>
<br>

  <span class="btn-group dropdown">
  <a type="button" class="btn dropdown-toggle font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:14px;">
  Thread
  </a>
  <div class="dropdown-menu border border-dark " style="font-size:12px;color: black;">
    <a class="dropdown-item font-weight-bold" href="thread.php" style="color: black;">Add Thread Details</a>
    <a class="dropdown-item font-weight-bold" href="viewthread.php" style="color: black;">View Thread Details</a>
  </div>
  </span>

<br>
  <span class="btn-group dropdown">
  <a type="button" class="btn dropdown-toggle font-weight-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:14px;">
 Piping Rope
  </a>
  <div class="dropdown-menu border border-dark font-weight-bold" style="font-size:12px;color: black;">
    <a class="dropdown-item font-weight-bold" href="pipingrole.php" style="color: black;">Add Piping Rope Details</a>
    <a class="dropdown-item font-weight-bold" href="viewpipingrope.php" style="color: black;">View Piping Rope Details</a>
  </div>
  </span>
   
            <!---<a class="collapse-item" href="backingpaper.php">Backing Paper</a>
            <a class="collapse-item" href="tapes.php">Both-Sided Tapes</a>--->
      
      
          </div>
        </div>
      </li>

    
    <!-- production- Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-wrench" style="font-size:14px;"></i>
          <span>Production</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded border border-dark font-weight-bold" style="font-size:12px;">
          <!--  <h6 class="collapse-header">Production Details</h6>-->
            <a class="collapse-item" href="fabricdetail.php" style="color: black;">Add Production Details</a>
             <a class="collapse-item" href="viewproduct.php" style="color: black;">View Production Details</a>
          </div>
        </div>
      </li>
    
    <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-cog"></i>
          <span>Stiching</span>
        </a>
        <div id="collapseThree" class="collapse order border-dark" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded border border-dark">
            <a class="collapse-item font-weight-bold" href="stich.php">Stiching Details</a>
          </div>
        </div>
      </li>
    
    <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
          <i class="fas fa-fw fa-cog"></i>
          <span>Embroidery</span>
        </a>
        <div id="collapsefour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded border border-dark">
            <a class="collapse-item font-weight-bold" href="emb.php">Embroidery Details</a>
          </div>
        </div>
      </li>

       <!-- Divider -->
     <!-- <hr class="sidebar-divider">-->

    <!-- Heading -->
      <!--<div class="sidebar-heading">
        Addons
      </div>-->

        <!-- Nav Item - Pages Collapse Menu -->
    <!--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Account</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="#">Login</a>
            <a class="collapse-item" href="#">Register</a>
            <a class="collapse-item" href="#">Forgot Password</a>
            <div class="collapse-divider"></div>
            
          </div>
        </div>
      </li>
    -->



      <!-- Nav Item - Charts -->
      <!----
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      -------->

      <!-- Nav Item - Tables -->
     <!-- <li class="nav-item">
        <a class="nav-link" href="table.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>-->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       
        <!-- End of Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
       <!--  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>-->

          <!-- Topbar Navbar -->
         <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <!-- <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>-->
              
              <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

      

           

            <!-- Nav Item - User Information -->
           <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome Buddy!!</span>
                <img class="img-profile rounded-circle" src="img/admin.jpg">
              </a>
            
              <!-- Dropdown - User Information -->
             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
            

          </ul>

        </nav>

         <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 text-center">Design</h1>

          <div class="row">

            <div class="col-lg-12">

              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary text-center">Design Details</h6>
                </div>

        
        
        <!----form--->
        
       <form action="" method="post" enctype="multipart/form-data"><br>
       <div class="container">

       <div class="form-group">
       <label for="">Design Id :</label>&nbsp;
       <input type="text" name="item" class="form-control" id="item" required placeholder="" style="color:black; ">
       <span id="item" class="text-danger"> </span>
       </div>

      <div class="form-group">
      <label for="exampleFormControlTextarea1">Design Name:</label>&nbsp;
      <textarea name="desc" id="design" 
      class="form-control" style="color:black; " required placeholder=""></textarea>
      </div>
       
      

  <!----<div class="form-group"> 
    <label for="exampleFormControlSelect1">Types of Fabric:</label>
   &nbsp; <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">Type 1</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">Type 2</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline3">Type 3</label>
</div>
---->

  <div class="form-group">
    <label for="exampleFormControlSelect2">Fabric Types:</label>
  <input type="text" class="form-control" id="fabrictype" name="type" required placeholder="" style="color:black;">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlSelect2">Fabric Color:</label>
  <input type="text" class="form-control" id="fabriccolor" name="fabcolor" required placeholder="" style="color:black; ">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect2">Size:</label>
  <input type="text" class="form-control" id="size" name="size" required placeholder="" style="color:black; ">
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Upload CAD Here</label>
    <input type="file" class="form-control-file" id="uploadcad" name="img1" style="color:black; ">
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Image Here</label>
    <input type="file" class="form-control-file" id="uploadimg" name="img2" style="color:black; ">
  </div>

  <div class="form-group input_fields_wrap">
  <label for="exampleFormControlSelect2" >Thread Color:</label><br>
  <input type="text" class="form-control" id="threadcolor" name="threadcolor" placeholder="Thread Color" required placeholder="" style="color:black; ">
  <!--<input type="text" class="form-control-sm" id="threadetails" name="threadetails" placeholder="Add Details">-->
  <button class="add_field_button mt-2 mb-2" style="width:75px;"><b>Add</b></button>
  </div>
  
  
    
    
<!---<select>
  <option class="form-control-sm" type="option" name="ys1"  >YES</option>
  <option class="form-control-sm" type="option" name="ys1" >NO</option>
</select>--->

 <!---&nbsp; <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="ys1" name="ys1" class="custom-control-input">
  <label class="custom-control-label" for="ys1">Yes</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="no2" name="ys1" class="custom-control-input">
  <label class="custom-control-label" for="no2">No</label>
</div>-->

<div class="form-group input_fields"> 
<label for="">Piping:</label>&nbsp;
<td>
  <input type="radio" name="ys1" value="Yes" class="add_button1" required placeholder="">Yes  &nbsp;
  <input type="radio" name="ys1" value="No" required placeholder="">No &nbsp;
</td>
</div>
<!--
<div class="form-group">
<label for="exampleFormControlSelect2">Piping Color:</label>
<input type="text" class="form-control-sm" id="" name="pipingcolor">
</div>
-->
<div class="form-group">
<label for="exampleFormControlSelect2">Number of Stiches:</label>
<input type="number" class="form-control" id="s" name="stiches" onkeyup="cal()" required placeholder="" style="color:black; ;">
</div>

<div class="form-group">
  <label for="exampleFormControlSelect2">Rate:</label>
  <input type="text" class="form-control" id="rate" name="rate" readonly="true" style="color:black;">&nbsp;
</div>
   
<script type="text/javascript">
 function cal()
{
var s =document.getElementById('s').value;
var mul=0.002;
document.getElementById('rate').value=s*mul;
//document.getElementById("rate").disabled = true;
}
</script>

<br>

<div class="form-group">
<input type="submit" class="btn btn-primary btn-user btn-block"  value="Submit" id="" name="submit">
  </div>
  </div>
</form>

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Eurasia Decor 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    



  <script>
  $(document).ready(function() {
    var max_fields      = 5; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
  
  
   $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
  
         //text box increment
          $(wrapper).append('<div class="mb-2"><input type="text" name="threadcolor1[]" placeholder="Thread Color" class="form-control"/>&nbsp;&nbsp;<button href="#" class="remove_field mt-2 mr-8"><b>Remove</b></button></div>'); //add input box
            x++; 
    }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       
    e.preventDefault(); 
    $(this).parent('div').remove(); 
    x--;
    })
    });
  
    </script>



<script>
  $(document).ready(function() {
    var max_fields      = 2; //maximum input boxes allowed
    var wrapper         = $(".input_fields"); //Fields wrapper
    var add_button      = $(".add_button1"); //Add button ID
   
    var x = 1; //initlal text box count
  
  
   $(add_button).click(function(e){ //on add input button click
        //e.preventDefault();
        if(x < max_fields){ //max input box allowed
  
         //text box increment
            $(wrapper).append('<div class="">Piping Color:&nbsp;<input type="text" name="pipingdetails" class="form-control"/>&nbsp;<button href="#" class="remove_field mt-2 mr-8" style=""><b>Remove</b></button></div>'); //add input box
            x++; 
    }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       
    e.preventDefault(); 
    $(this).parent('div').remove(); 
    x--;
    })
    });
  
</script>




   
</body>

</html>

