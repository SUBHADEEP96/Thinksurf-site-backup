<?php
include('connection.php');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        //$size = $_POST['size'];
        //$vendor = $_POST['vendor'];
        //$color = $_POST['color'];
        $norolls = $_POST['norolls'];

        $query = "UPDATE fabrics SET  norolls='$norolls' WHERE id='$id' ";
        $query_run = mysqli_query($con, $query);

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