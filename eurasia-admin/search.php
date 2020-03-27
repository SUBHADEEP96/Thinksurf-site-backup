<div id="post">
<?php

include('connection.php');

if(isset($_GET['submit'])){

$search_id=$_GET['search'];
$query=mysqli_query($con,"select * from new_post where title like '%$search_id%' or content like '%$search_id%'");

    if($query==TRUE)
{
     while($row=mysqli_fetch_array($query))
     {
$id=$row['id'];
$title=$row['title'];
$image=$row['image'];
$content=substr($row['content'],0,400);
?>

<?php
}

}

else{

echo "Sorry No Result Found";

}

}

?>

</div>