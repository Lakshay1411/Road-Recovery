<?php
include('config.php');

$tbl_name="user_info";
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$location=$_POST['location'];
$filename=$_FILES['filetoupload']['name'];

$q="SELECT *FROM $tbl_name WHERE phone_no='$mobile' and location='$location'";

$r=mysqli_query($conn,$q);

$count=mysqli_num_rows($r);

if ($count>0)
{
	header("Location:data_form.php?ids=Record with this id already exists...");
}
else
{

	$qry="INSERT INTO $tbl_name(phone_no,Name,photo,location) VALUES('$mobile','$name','$filename','$location')";

	$res=mysqli_query($conn,$qry);

	if ($res)
	{
				$filename = $_FILES['filetoupload']['name'];
				$tempname = $_FILES['filetoupload']['tmp_name'];
				$folder ="uploads/".$filename;
				move_uploaded_file($tempname, $folder);


		
		header("Location:data_form.php?ids=Record added successfully");
	}
	else
	{
		header("Location:data_form.php?ids=Unable to add record");
	}
}

?>