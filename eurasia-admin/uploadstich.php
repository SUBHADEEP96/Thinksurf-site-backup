 <?php
include('connection.php');

    if(isset($_POST['updatedata']))
    {   
        $item = $_POST['update_id'];
        
        $tailor = $_POST['tailor'];
        $date1 = $_POST['date1'];
        $quantity1 = $_POST['quantity1'];
        //$date2 = $_POST['date2'];
       // $quantity2 = $_POST['quantity2'];

    $query =" UPDATE design SET  tailor='$tailor', date2='$date1', quantity1='$quantity1' WHERE item='$item' ";
        $query_run = mysqli_query($con, $query);

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