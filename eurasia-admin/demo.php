
<?php
$target_path="d:/";
$target_path=$target_path.basename($_FILES['upload']['name']);
if(move_uploaded_file($_FILES['upload']['tmp_name'],$target_path))
{
	echo"File Uploaded successfully";
	
}else{
	
	echo"sorry, file not uploaded";
	
}


/*include("exinclude.php");*/

/*$name=$_POST["name"];

$pass =$_POST["password"];


echo "Your name $name and the password is $pass";*/
?>