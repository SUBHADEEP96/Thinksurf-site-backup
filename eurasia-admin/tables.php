<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
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

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
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
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>


          <!----------------------------- EDIT POP UP FORM (Bootstrap MODAL)------------------------------------------>

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit Roll's Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <!-- <form action="" method="POST">-->
            <div class="modal-body">
                <input name="update_id" id="update_id">


<!---------------------------------------Roll 1 start here--------------------------------------------------->

<!------------------------------------php script starts here----------------------------------------------->

<?php

include('connection.php'); 

if(isset($_POST['updatedata1']))

{

   $id = $_POST['update_id1']; 

   $type1=$_POST['type1'];
   $color1=$_POST['color1'];

   $quantity1_1 = $_POST['quantity1_1'];
   $size1_1 = $_POST['size1_1'];

   $quantity1_2 = $_POST['quantity1_2'];
   $size1_2 = $_POST['size1_2'];

   $quantity1_3 = $_POST['quantity1_3'];
   $size1_3 = $_POST['size1_3'];

   $quantity1_4 = $_POST['quantity1_4'];
   $size1_4 = $_POST['size1_4'];

   $quantity1_5 = $_POST['quantity1_5'];
   $size1_5 = $_POST['size1_5'];
           
   $roll1=$_POST['roll1'];

   $query11= " SELECT type, color, size, quantity FROM  cutpieces ";

   $type=$_SESSION['type'];
   $color=$_SESSION['color'];
   $size=$_SESSION['size'];
   $quantity=$_SESSION['quantity'];

   $query= "UPDATE fabrics SET quantity = quantity - $roll1, roll1 = roll1 - $roll1  WHERE id = '$id' ";

   if ($type == $type1 && $color == $color1 && $size == $size1_1) 
   {

   $query1=" UPDATE cutpieces SET quantity = quantity + $quantity1_1  WHERE (type = '$type1' and color ='$color1' and size = '$size1_1') ";

   }

   else
   {

   $query2=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size1_1',
   '$quantity1_1') ";
     
   }
   /////////////////////
   if ($type == $type1 && $color == $color1 && $size == $size1_2) 
   {

   $query3=" UPDATE cutpieces SET quantity = quantity + $quantity1_2  WHERE (type = '$type1' and color ='$color1' and size = '$size1_2') ";

   }
   else
   {

   $query4=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size1_2',
   '$quantity1_2') ";
     
   }
   ///////////////
   if ($type == $type1 && $color == $color1 && $size == $size1_3) 
   {

   $query5=" UPDATE cutpieces SET quantity = quantity + $quantity1_3  (WHERE type = '$type1' and color ='$color' and 
   size = '$size1_3') ";

   }
   else
   {

   $query6=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size1_3',
   '$quantity1_3') ";
     
   }
   ///////////////////
   if ($type == $type1 && $color == $color1 && $size == $size1_4) 
   {

   $query7=" UPDATE cutpieces SET quantity = quantity + $quantity1_4  WHERE (type = '$type1' and color ='$color' and 
   size = '$size1_4') ";

   }
   else
   {

   $query8=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size1_4',
   '$quantity1_4') ";
     
   }
   ////////////////
   if ($type == $type1 && $color == $color1 && $size == $size1_5) 
   {

   $query9=" UPDATE cutpieces SET quantity = quantity + $quantity1_5  WHERE (type = '$type1' and color ='$color' and 
   size = '$size1_5') ";

   }
   else
   {

   $query10=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size1_5',
   '$quantity1_5') ";
     
   }

   $query_run = mysqli_query($con, $query);
   $query_run = mysqli_query($con, $query1);
   $query_run = mysqli_query($con, $query2);
   $query_run = mysqli_query($con, $query3);
   $query_run = mysqli_query($con, $query4);
   $query_run = mysqli_query($con, $query5);
   $query_run = mysqli_query($con, $query6);
   $query_run = mysqli_query($con, $query7);
   $query_run = mysqli_query($con, $query8);
   $query_run = mysqli_query($con, $query9);
   $query_run = mysqli_query($con, $query10);
   $query_run = mysqli_query($con, $query11);

        if($query_run)
        {
            echo '<script> alert("Data Updated & Inserted"); </script>';  
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
}

?>


<form action="" method="POST" >

<label class="font-weight-bold"> Roll No. 1 </label>
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Roll No. 1" aria-label="" aria-describedby="basic-addon2" id="roll1" readonly="true" name="roll1">
  <div class="input-group-append">

<!-- Small modal -->
<button type="button" class="btn-sm btn-primary editbtn1" data-toggle="modal" data-target=".bd-example-modal-sm">Edit</button>
<div class="modal fade bd-example-modal-sm editmodal1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" style="position:absolute;top:80px; right:140px;">
    <div class="modal-content">
     
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit Roll 1 Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="container">
<div class="form-row"> 

<input name="update_id1" value="" type="" placeholder="id">
<input name="type1" value="" type="" placeholder="Type">  
<input name="color1" value="" type="" placeholder="Color">

    <div class="form-group col-md-6">
      <label for="inputZip">Size</label>
      <input type="text" class="form-control" id="quantity1.1"  name="size1_1">
    </div>

    <div class="form-group col-md-6">
      <label for="inputZip">Quantity</label>
      <input type="text" class="form-control" id="size1.1" name="quantity1_1">
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="quantity1.2"  name="size1_2">
    </div>
    <div class="form-group col-md-6"> 
      <input type="text" class="form-control" id="size1.2" name="quantity1_2" >
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="quantity1.3"  name="size1_3">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="size1.3" name="quantity1_3">
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="quantity1.4" name="size1_4">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="size1.4" name="quantity1_4" >
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="quantity1.5"  name="size1_5">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="size1.5" name="quantity1_5" >
    </div>

  </div>
  </div>

    <div class="modal-footer">
       <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" name="updatedata1" class="btn-sm btn-primary">Update Data</button>
    </div>

    </div>
  </div>
  
</div>

  </div>
</div>

</form>



<!-------------------------------------Roll 2 start here--------------------------------------------------->


<!------------------------------------php script starts here----------------------------------------------->

<?php

include('connection.php'); 

if(isset($_POST['updatedata2']))

{

   $id = $_POST['update_id2']; 

   $type1=$_POST['type1'];
   $color1=$_POST['color1'];

   $quantity2_1 = $_POST['quantity2_1'];
   $size2_1 = $_POST['size2_1'];

   $quantity2_2 = $_POST['quantity2_2'];
   $size2_2 = $_POST['size2_2'];

   $quantity2_3 = $_POST['quantity2_3'];
   $size2_3 = $_POST['size2_3'];

   $quantity2_4 = $_POST['quantity2_4'];
   $size2_4 = $_POST['size2_4'];

   $quantity2_5 = $_POST['quantity2_5'];
   $size2b_5 = $_POST['size2_5'];
           
   $roll2=$_POST['roll2'];

   $type=$_SESSION['type'];
   $color=$_SESSION['color'];
   $size=$_SESSION['size'];
   $quantity=$_SESSION['quantity'];

   $query=" UPDATE fabrics SET quantity = quantity - $roll2, roll2 = roll2 - $roll2  WHERE id = '$id' ";

   if ($type == $type1 && $color == $color1 && $size == $size2_1) 
   {

   $query1= "UPDATE cutpieces SET quantity = quantity + $quantity2_1  WHERE (type = '$type1' and color ='$color1' and size = '$size2_1') ";

   }
   else
   {

   $query2=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size2_1',
   '$quantity2_1') ";
     
   }
   ////////////////////

   if ($type == $type1 && $color == $color1 && $size == $size2_2) 
   {

   $query3=" UPDATE cutpieces SET quantity = quantity + $quantity2_2  WHERE (type = '$type1' and color ='$color1' and size = '$size2_2') ";

   }
   else
   {

   $query4=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size2_2',
   '$quantity2_2') ";
     
   }

   ///////////////////
   if ($type == $type1 && $color == $color1 && $size == $size2_3) 
   {

   $query5= "UPDATE cutpieces SET quantity = quantity + $quantity2_3  WHERE (type = '$type1' and color ='$color1' and size = '$size2_3') ";

   }
   else
   {

   $query6=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size2_3',
   '$quantity2_3') ";
     
   }
   ////////////////////

   if ($type == $type1 && $color == $color1 && $size == $size2_4) 
   {

   $query7=" UPDATE cutpieces SET quantity = quantity + $quantity2_4  WHERE (type = '$type1' and color ='$color1' and size = '$size2_4') ";

   }
   else
   {

   $query8=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size2_4',
   '$quantity2_4') ";
     
   }
   //////////////////////

   if ($type == $type1 && $color == $color1 && $size == $size2_5) 
   {

   $query9= "UPDATE cutpieces SET quantity = quantity + $quantity2_5  WHERE (type = '$type1' and color ='$color1' and size = '$size2_5') ";

   }
   else
   {

   $query10=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size2_5',
   '$quantity2_5') ";
     
   }

   $query_run = mysqli_query($con, $query);
   $query_run = mysqli_query($con, $query1);
   $query_run = mysqli_query($con, $query2);
   $query_run = mysqli_query($con, $query3);
   $query_run = mysqli_query($con, $query4);
   $query_run = mysqli_query($con, $query5);
   $query_run = mysqli_query($con, $query6);
   $query_run = mysqli_query($con, $query7);
   $query_run = mysqli_query($con, $query8);
   $query_run = mysqli_query($con, $query9);
   $query_run = mysqli_query($con, $query10);

        if($query_run)
        {
            echo '<script> alert("Data Updated & Inserted"); </script>';  
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
}

?>


<form action="" method="POST" >

<label class="font-weight-bold"> Roll No. 2 </label>
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Roll No. 2" aria-label="" aria-describedby="basic-addon2" id="roll2" readonly="true" name="roll2">
  <div class="input-group-append">

<!-- Small modal -->
<button type="button" class="btn-sm btn-primary editbtn2" data-toggle="modal" data-target=".bd-example-modal-sm-2">Edit</button>
<div class="modal fade bd-example-modal-sm-2 editmodal1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" style="position:absolute;top:80px; right:140px;">
    <div class="modal-content">
     
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit Roll 2 Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="container">
<div class="form-row"> 

<input name="update_id2" value="" type="" placeholder="id">
<input name="type1" value="" type="" placeholder="Type">  
<input name="color1" value="" type="" placeholder="color">

    <div class="form-group col-md-6">
      <label for="inputZip">Size</label>
      <input type="text" class="form-control" id="quantity2.1"  name="size2_1">
    </div>

    <div class="form-group col-md-6">
      <label for="inputZip">Quantity</label>
      <input type="text" class="form-control" id="size2.1" name="quantity2_1">
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="quantity2.2"  name="size2_2">
    </div>
    <div class="form-group col-md-6"> 
      <input type="text" class="form-control" id="size2.2" name="quantity2_2" >
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="quantity2.3"  name="size2_3">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="size2.3" name="quantity2_3">
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="quantity2.4" name="size2_4">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="size2.4" name="quantity2_4" >
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="quantity2.5"  name="size2_5">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="size2.5" name="quantity2_5" >
    </div>

  </div>
  </div>

    <div class="modal-footer">
       <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Close</button>
       <button type="submit" name="updatedata2" class="btn-sm btn-primary">Update Data</button>
    </div>

    </div>
  </div>
  
</div>

  </div>
</div>

</form>

<!--------------------------------------Roll 3 start here------------------------------------------------------>


<!------------------------------------php script starts here----------------------------------------------->

<?php

include('connection.php'); 

if(isset($_POST['updatedata3']))

{

   $id = $_POST['update_id3']; 

   $type1=$_POST['type1'];
   $color1=$_POST['color1'];

   $quantity3_1 = $_POST['quantity3_1'];
   $size3_1 = $_POST['size3_1'];

   $quantit3_2 = $_POST['quantity3_2'];
   $size3_2 = $_POST['size3_2'];

   $quantity3_3 = $_POST['quantity3_3'];
   $size3_3 = $_POST['size3_3'];

   $quantity3_4 = $_POST['quantity3_4'];
   $size3_4 = $_POST['size3_4'];

   $quantity3_5 = $_POST['quantity3_5'];
   $size3_5 = $_POST['size3_5'];
           
   $roll2=$_POST['roll2'];

   $type=$_SESSION['type'];
   $color=$_SESSION['color'];
   $size=$_SESSION['size'];
   $quantity=$_SESSION['quantity'];

   $query=" UPDATE fabrics SET quantity = quantity - $roll2, roll2 = roll2 - $roll2  WHERE id = '$id' ";

   if ($type == $type1 && $color == $color1 && $size == $size3_1) 
   {

   $query1= "UPDATE cutpieces SET quantity = quantity + $quantity3_1  WHERE (type = '$type1' and color ='$color1' and size = '$size3_1') ";

   }
   else
   {

   $query2=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size3_1',
   '$quantity3_1') ";
     
   }
   ////////////////////

   if ($type == $type1 && $color == $color1 && $size == $size3_2) 
   {

   $query3=" UPDATE cutpieces SET quantity = quantity + $quantity3_2  WHERE (type = '$type1' and color ='$color1' and size = '$size3_2') ";

   }
   else
   {

   $query4=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size3_2',
   '$quantity3_2') ";
     
   }

   ///////////////////
   if ($type == $type1 && $color == $color1 && $size == $size3_3) 
   {

   $query5= "UPDATE cutpieces SET quantity = quantity + $quantity3_3  WHERE (type = '$type1' and color ='$color1' and size = '$size3_3') ";

   }
   else
   {

   $query6=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size3_3',
   '$quantity3_3') ";
     
   }
   ////////////////////

   if ($type == $type1 && $color == $color1 && $size == $size3_4) 
   {

   $query7=" UPDATE cutpieces SET quantity = quantity + $quantity3_4  WHERE (type = '$type1' and color ='$color1' and size = '$size3_4') ";

   }
   else
   {

   $query8=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size3_4',
   '$quantity3_4') ";
     
   }
   //////////////////////

   if ($type == $type1 && $color == $color1 && $size == $size3_5) 
   {

   $query9= "UPDATE cutpieces SET quantity = quantity + $quantity3_5  WHERE (type = '$type1' and color ='$color1' and size = '$size3_5') ";

   }
   else
   {

   $query10=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1','$size3_5',
   '$quantity]3_5') ";
     
   }

   $query_run = mysqli_query($con, $query);
   $query_run = mysqli_query($con, $query1);
   $query_run = mysqli_query($con, $query2);
   $query_run = mysqli_query($con, $query3);
   $query_run = mysqli_query($con, $query4);
   $query_run = mysqli_query($con, $query5);
   $query_run = mysqli_query($con, $query6);
   $query_run = mysqli_query($con, $query7);
   $query_run = mysqli_query($con, $query8);
   $query_run = mysqli_query($con, $query9);
   $query_run = mysqli_query($con, $query10);

        if($query_run)
        {
            echo '<script> alert("Data Updated & Inserted"); </script>';  
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
}

?>


<form action="" method="POST">

<label class="font-weight-bold"> Roll No. 3 </label>
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Roll No. 3" aria-label="" aria-describedby="basic-addon2" id="roll3" readonly="true" name="roll3">
  <div class="input-group-append">

<!-- Small modal -->
<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm-3">Edit</button>
<div class="modal fade bd-example-modal-sm-3 pull-right" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" style="position:absolute;top:80px; right:140px;">
    <div class="modal-content">
     
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit Roll 3 Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="container">
<div class="form-row">

   <input name="update_id3" class="form-control"  value="">
<input  class="form-control" name="type1" value="" type="hidden">  
<input  class="form-control" name="color1" value="" type="hidden">

    <div class="form-group col-md-6">
      <label for="inputZip">Size</label>
      <input type="text" class="form-control" id="inputZip" name="quantity3_1">
    </div>

    <div class="form-group col-md-6">
      <label for="inputZip">Quantity</label>
      <input type="text" class="form-control" id="inputZip" name="size3_1">
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity3_2">
    </div>
    <div class="form-group col-md-6"> 
      <input type="text" class="form-control" id="inputZip" name="size3_2">
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity3_3">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="size3_3">
    </div>


     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity3_4">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="size3_4">
    </div>

    
     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity3_5">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="size3_5">
    </div>
  </div>
  </div>

            <div class="modal-footer">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata3" class="btn-sm btn-primary">Update Data</button>
            </div>

    </div>
  </div>
  
</div>

  </div>
</div>
</form>

<!----------------------------------Roll 4 start here-------------------------------------------------->


<!------------------------------------php script starts here----------------------------------------------->
<?php

include('connection.php'); 

if(isset($_POST['updatedata4']))

{

   $id = $_POST['update_id4']; 

   $type1=$_POST['type1'];
   $color1=$_POST['color1'];

   $quantity4_1 = $_POST['quantity4_1'];
   $size4_1 = $_POST['size4_1'];

   $quantity4_2 = $_POST['quantity4_2'];
   $size4_2 = $_POST['size4_2'];

   $quantity4_3 = $_POST['quantity4_3'];
   $size4_3 = $_POST['size4_3'];

   $quantity4_4 = $_POST['quantity4_4'];
   $size4_4 = $_POST['size4_4'];

   $quantity4_5 = $_POST['quantity4_5'];
   $size4_5 = $_POST['size4_5'];
           
   $roll4=$_POST['roll4'];

   $query= "UPDATE fabrics SET quantity = quantity - $roll4, roll4 = roll4 - $roll4  WHERE id = '$id' ";

   $query1=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1',
   '$size4_1','$quantity4_1') ";
   
   $query2=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1',
   '$size4_2','$quantity4_2') ";

   $query3=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1',
   '$size4_3','$quantity4_3') ";

   $query4=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1',
   '$size4_4','$quantity4_4') ";

   $query5=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1',
   '$size4_5','$quantity4_5') ";

   $query_run = mysqli_query($con, $query);
   $query_run = mysqli_query($con, $query1);
   $query_run = mysqli_query($con, $query2);
   $query_run = mysqli_query($con, $query3);
   $query_run = mysqli_query($con, $query4);
   $query_run = mysqli_query($con, $query5);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';  
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
}

?>


<form action="" method="POST">

<label class="font-weight-bold"> Roll No. 4 </label>
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Roll No. 4" aria-label="" aria-describedby="basic-addon2" id="roll4" readonly="true" name="roll4">
  <div class="input-group-append">

<!-- Small modal -->
<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm-4">Edit</button>
<div class="modal fade bd-example-modal-sm-4 pull-right" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" style="position:absolute;top:80px; right:140px;">
    <div class="modal-content">
     
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit Roll 4 Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="container">
<div class="form-row">

    <input name="update_id4" class="form-control"  value="">
<input  class="form-control" name="type1" value="" type="hidden">  
<input  class="form-control" name="color1" value="" type="hidden">

    <div class="form-group col-md-6">
      <label for="inputZip">Size</label>
      <input type="text" class="form-control" id="inputZip" name="quantity4_1">
    </div>

    <div class="form-group col-md-6">
      <label for="inputZip">Quantity</label>
      <input type="text" class="form-control" id="inputZip" name="size4_1">
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity4_2">
    </div>
    <div class="form-group col-md-6"> 
      <input type="text" class="form-control" id="inputZip" name="size4_2">
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity4_3">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="size4_3">
    </div>


     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity4_4">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="size4_4">
    </div>

    
     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity4_5">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="size4_5">
    </div>
  </div>
  </div>

            <div class="modal-footer">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata4" class="btn-sm btn-primary">Update Data</button>
            </div>

    </div>
  </div>
  
</div>

  </div>
</div>

</form>

<!---------------------------------------Roll 5 start here--------------------------------------------------->


<!------------------------------------php script starts here----------------------------------------------->
<?php

include('connection.php'); 

if(isset($_POST['updatedata5']))

{

   $id = $_POST['update_id5']; 

   $type1=$_POST['type1'];
   $color1=$_POST['color1'];

   $quantity5_1 = $_POST['quantity5_1'];
   $size5_1 = $_POST['size5_1'];

   $quantity5_2 = $_POST['quantity5_2'];
   $size5_2 = $_POST['size5_2'];

   $quantity5_3 = $_POST['quantity5_3'];
   $size5_3 = $_POST['size5_3'];

   $quantity5_4 = $_POST['quantity5_4'];
   $size5_4 = $_POST['size5_4'];

   $quantity5_5 = $_POST['quantity5_5'];
   $size5_5 = $_POST['size5_5'];
           
   $roll5=$_POST['roll5'];

   $query= "UPDATE fabrics SET quantity = quantity - $roll5, roll5 = roll5 - $roll5  WHERE id = '$id' ";

   $query1=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1',
   '$size5_1','$quantity5_1') ";
   
   $query2=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1',
   '$size5_2','$quantity5_2') ";

   $query3=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1',
   '$size5_3','$quantity5_3') ";

   $query4=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1',
   '$size5_4','$quantity5_4') ";

   $query5=" INSERT INTO cutpieces (type, color, size, quantity) VALUES ('$type1','$color1',
   '$size5_5','$quantity5_5') ";

   $query_run = mysqli_query($con, $query);
   $query_run = mysqli_query($con, $query1);
   $query_run = mysqli_query($con, $query2);
   $query_run = mysqli_query($con, $query3);
   $query_run = mysqli_query($con, $query4);
   $query_run = mysqli_query($con, $query5);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';  
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
}

?>


<form action="" method="POST">
<label class="font-weight-bold"> Roll No. 5 </label>
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Roll No. 5" aria-label="" aria-describedby="basic-addon2" id="roll5" readonly="true" name="roll5">
  <div class="input-group-append">

<!-- Small modal -->
<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm-5">Edit</button>
<div class="modal fade bd-example-modal-sm-5 pull-right" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" style="position:absolute;top:80px; right:140px;">
    <div class="modal-content">
     
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit Roll 5 Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="container">
<div class="form-row">

    <input name="update_id5" class="form-control"  value="">
<input  class="form-control" name="type1" value="" type="hidden">  
<input  class="form-control" name="color1" value="" type="hidden">

    <div class="form-group col-md-6">
      <label for="inputZip">Size</label>
      <input type="text" class="form-control" id="inputZip" name="quantity5_1">
    </div>

    <div class="form-group col-md-6">
      <label for="inputZip">Quantity</label>
      <input type="text" class="form-control" id="inputZip" name="size5_1">
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity5_2">
    </div>
    <div class="form-group col-md-6"> 
      <input type="text" class="form-control" id="inputZip" name="size5_2">
    </div>

     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity5_3">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="size5_3">
    </div>


     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity5_4">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="size5_4">
    </div>

    
     <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="quantity5_5">
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="inputZip" name="size5_5">
    </div>

  </div>
  </div>

            <div class="modal-footer">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata5" class="btn-sm btn-primary">Update Data</button>
            </div>

    </div>
  </div>
  
</div>

  </div>
</div>

</form>
<!------------------------------------------------------------------------------------------------------------>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--<button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>-->
            </div>
      <!-- </form>-->

    </div>
  </div>
</div>

<!-- #################################################################################################### -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center" style="font-size: 11px;">
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                      <th>Tirtho</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">

            <?php
               include('connection.php'); 
               $sql="SELECT * FROM fabrics";
               $res=$con->query($sql);
               while($row=$res->fetch_assoc()) { 
            ?>

              <tr style="font-size: 11px;">
              <td><?= $row['id']?></td> 
              <td><?= $row['supplyid']?></td>
              <td><?= $row['companyid']?></td>
              <td><?= $row['roll1']?></td>
              <td><?= $row['roll2']?></td>
              <td><?= $row['roll3']?></td>
              <td><?= $row['roll5']?></td>
              <td> 
                <button type="button" class="btn btn-primary btn-sm editbtn"> EDIT </button>
              </td>
            </tr>
          <?php } ?>
                    
                  </tbody>
                </table>
              </div>
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
            <span>Copyright &copy; Your Website 2019</span>
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
