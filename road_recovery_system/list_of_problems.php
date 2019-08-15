<?php

session_start();
include('config.php');



?>

<!DOCTYPE html>
<html>
<head>
	<title>list of problems</title>
</head>
<body>

	<table border="2px">
		<tr>
			<th>location</th>
			<th>count</th>
			<th>status</th>
			
		</tr>

		<?php

			$tbl_name="status_info";
			$sql="SELECT * FROM $tbl_name ORDER BY count desc";
			$result=mysqli_query($conn,$sql);
			if($result)
			{
				while ($row = mysqli_fetch_array($result)) {

					echo "<tr><td>".$row['location']."</td><td>".$row['count']."</td><td>".$row['status']."</td></tr>";

					# code...
				}
			}


		?>
	</table>

	<h2>list of images</h2><br>

	<table border="2px">
		<tr>
			<th>Images</th>
		</tr>
		<?php
			$sql1="SELECT photo FROM $tbl_name";
			$result1=mysqli_query($conn,$sql1);
			if($result1)
			{
				while($row = mysqli_fetch_array($result1)){

					echo "<tr><td>";
					//echo '<img src="data:image/jpg;base64,'.base64_encode($row['photo'] ).'" height="100" width="200"/>';
					echo "<img src='uploads/".$row['photo']."' width='200' height='100'/>";
					echo "</td></tr>";

				}
			}
		?>
	</table>






</body>
</html>