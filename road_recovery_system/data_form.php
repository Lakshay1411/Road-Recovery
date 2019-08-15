<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

	<form action="store_info.php" method="post" enctype="multipart/form-data">
		
			
			Name <input type="text" name="name">
			<br>
			Mobile <input type="text" name="mobile">
			<br>
			Location <input type="text" name="location">
			<br>
			Photo <input type="file" name="filetoupload">

			<br> <br>

			<button type="submit" name="sub">Submit</button>

	</form>

	<?php

		if (isset($_GET['ids']))
		{
			echo "<h2 color='red'>" . $_GET['ids'] . "</h2>";
		}

	?> 

</body>
</html>