<?php
include('connection.php');

    if(isset($_POST['updatedata1']))
    {   
        $id = $_POST['update_id'];
        
        $quantity1_1 = $_POST['quantity1.1'];
        $quantity1_2 = $_POST['quantity1.2'];
        $quantity1_3 = $_POST['quantity1.3'];
        $quantity1_4 = $_POST['quantity1.4'];
        $quantity1_5 = $_POST['quantity1.5'];

        $size1_1 = $_POST['size1.1'];
        $size1_2 = $_POST['size1.2'];
        $size1_3 = $_POST['size1.3'];
        $size1_4 = $_POST['size1.4'];
        $size1_5 = $_POST['size1.5'];

       " UPDATE `fabrics` SET quantity1.1`=[ $quantity1_1],`quantity1.2`=[ $quantity1_2],`quantity1.3`=[ $quantity1_3],`quantity1.4`=[ $quantity1_4],`quantity1.5`=[ $quantity1_5],`size1.1`=[$size1_1],`size1.2`=[$size1_2],`size1.3`=[$size1_3],`size1.4`=[$size1_4],`size1.5`=[$size1_5] WHERE id='$id' ";

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