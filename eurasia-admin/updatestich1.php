 <?php
include('connection.php');

    if(isset($_POST['updatedata1']))
    {   
        $item = $_POST['update_id1'];
        
        //$tailor = $_POST['tailor'];
        //$date1 = $_POST['date1'];
        //$quantity1 = $_POST['quantity1'];
        $date2 = $_POST['date2'];
        $quantity2 = $_POST['quantity2'];

        $query = "UPDATE design SET date3='$date2', quantity3='$quantity2' WHERE item='$item' ";
        $query1 = "UPDATE design SET quantity1=quantity1 - $quantity2 WHERE item='$item' ";
        $query_run = mysqli_query($con, $query);
        $query_run = mysqli_query($con, $query1);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:stich.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>