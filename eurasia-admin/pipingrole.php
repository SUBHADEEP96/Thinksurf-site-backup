<?php

//$con = mysqli_connect('localhost','root');

//mysqli_select_db($con,'euresia');


//if($con==false){
  
  
  //die("Error:could not connect".mysqli_connect_error());
//}

include('connection.php');

if(isset($_POST['submit'])){

$vendorname=$_POST['vendor'];
$quantitykg=$_POST['kg'];
$quantitybundles=$_POST['bundle'];
$descrip=$_POST['descrip'];
$rate=$_POST['rate'];





$q="insert into   pipingrope(  vendorname, quantitykg,quantitybundles,description,rate)

 values('$vendorname','$quantitykg','$quantitybundles','$rate','$descrip')";

if(mysqli_query($con,$q)){
  
  header('location:pipingrole.php');
  //echo "we will get back to you shortly";
}else{
  
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

  <title>Euresia Decor - Piping Role</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 text-center">Piping Rope</h1>

          <div class="row">

            <div class="col-lg-12">

              <!-- Circle Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary text-center">Piping Rope Details</h6>
                </div>


 <!----form---->               
                <form action="" method="post" style="color: black;"><br>
             <div class="container">
			 <div class="form-group">
			 
			 
                <label for="exampleFormControlInput1">Vendor Name:</label>
                <input type="text" class="form-control-sm" name="vendor" id="exampleFormControlInput1" placeholder="">
             </div>
			
  
  <div class="form-group" style="color: black;">
    <label for="exampleFormControlSelect2">Quantity:</label>
	<input type="number" class="form-control-sm" id="" name="kg">&nbsp;(in Kg)&nbsp;&nbsp;
  <input type="number" class="form-control-sm" id="" name="bundle">&nbsp;(in Bundles)
 </div>

 <div class="form-group" style="color: black;">
    <label for="exampleFormControlSelect2">Rate:</label>
  <input type="name" class="form-control-sm" id="" name="rate">&nbsp;
  </div>

 
			 <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="descrip" rows="3" style="color: black;"></textarea>
  </div>
			 
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

  <!-- Logout Modal-->
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

</body>

</html>
