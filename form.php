<!DOCTYPE html>
<html class="no-js"> 
    <head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        
        
        <meta name="author" content="Group2">
		
        <title>Road Recovery System</title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="plugins/themefisher-font/style.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
		<!-- Animate.css -->
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="title text-center wow fadeInUp" data-wow-duration="500ms">
				<h2>Register <span class="color">Please</span></h2>
				<div class="border"></div>
			</div>
        <div class="contact-form col-md-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms" >

        	<!--inserted action="store_info.php,
        		this page is responsible for saving information to the database. 
        		"-->
				<center><form action="store_info.php" name="myForm" id="contact-form" action=""  method="post" role="form" style="width: 80%">
				
					<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name" required>
					</div>
					
					<!-- <div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email" required>
						</div>
					 -->
					<div class="form-group">
						<input type="number" placeholder="PhoneNo" class="form-control" name="phoneno" id="phoneno" required>
					</div>
					
					<!-- <div class="form-group">
						<input type="number" placeholder="Imageno" class="form-control" name="imagename" id="imagename" required>
                    </div> -->
                    <div class="form-group">
						<input type="text" placeholder="Location" class="form-control" name="location" id="location" required>
                    </div>
					
					<div id="cf-submit">
						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit" required>
					</div>						
					
				</form></center>
        </div>
    </body>
</html>