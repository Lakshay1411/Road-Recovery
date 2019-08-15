<?php
include('config.php');

$tbl_name="user_info";
$name=$_POST['name'];
$mobile=$_POST['phoneno'];
$location=$_POST['location'];
$filename=$_FILES['filetoupload']['name'];//$_POST['image'];


//code to update usr_info table.

$q="SELECT *FROM $tbl_name WHERE phone_no='$mobile' and location='$location'";//check if row with give phone,location exists.

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


				// update status info table.

				

					$tbl_name1="status_info";
					$res_status_table=mysqli_query($conn,"SELECT * FROM $tbl_name WHERE location='$location'");	
					$count_of_loc=mysqli_num_rows($res);
					$status="NA";

					if($res_status_table)
					{
						//check if record for particular location exists.
						//if yes then update the existing record.
						$var = mysqli_query($conn,"SELECT * FROM $tbl_name1 WHERE location='$location'");
						$check = mysqli_num_rows($var);
						if($check>0)
						{
							$count_of_loc+=1;
							mysqli_query($conn,"UPDATE $tbl_name1 SET count='$count_of_loc' WHERE location='$location'");
						}
						else     //if no then insert new record in table.
						{
							$count_of_loc+=1;
							mysqli_query($conn,"INSERT INTO $tbl_name1(location,count,status) VALUES('$location','$count_of_loc','$status')");
						}				

					}
				

				//code to upload image to server.
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