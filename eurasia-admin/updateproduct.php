<?php
include('connection.php');

    if(isset($_POST['updatedata']))
    {   
        $item = $_POST['update_id'];
        
        //$size = $_POST['size'];
        //$vendor = $_POST['vendor'];
        $date1 = $_POST['date1'];
        $quantity = $_POST['quantity'];

        $query = "UPDATE design SET  date1='$date1', quantity='$quantity' WHERE item='$item' ";
        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:fabricdetail.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>