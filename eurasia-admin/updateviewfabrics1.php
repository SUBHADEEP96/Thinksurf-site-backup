<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'euresia');

if(isset($_POST['updatedata1']))
{
   
   $id = $_POST['update_id1'];

   $quantity1_1 = $_POST['quantity1_1'];
   $quantity1_2 = $_POST['quantity1_2'];
   $quantity1_3 = $_POST['quantity1_3'];
   $quantity1_4 = $_POST['quantity1_4'];
   $quantity1_5 = $_POST['quantity1_5'];

   $size1_1 = $_POST['size1_1'];
   $size1_2 = $_POST['size1_2'];
   $size1_3 = $_POST['size1_3'];
   $size1_4 = $_POST['size1_4'];
   $size1_5 = $_POST['size1_5'];
           
  $query = "UPDATE fabrics SET quantity1_1='$quantity1_1', quantity1_2='$quantity1_2', quantity1_3='$quantity1_3', quantity1_4='$quantity1_4', quantity1_5='$quantity1_5',
  size1_1='$size1_1', size1_2='$size1_2', size1_3='$size1_3', size1_4='$size1_4', size1_5='$size1_5' WHERE id = '$id' ";

  $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:viewfabrics.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
}

?>