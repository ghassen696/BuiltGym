<?php
require '../../include/db_conn.php';
page_protect();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Built Gym | Payments</title>
    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
    <link href="a1style.css" type="text/css" rel="stylesheet">
    <style>
    	.page-container .sidebar-menu #main-menu li#paymnt > a {
    	background-color: #2b303a;
    	color: #ffffff;
		}

    </style>

</head>
      <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="../../images/logo.png" alt="" width="192" height="80" />
				</a>
			
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
		
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>
    		<div class="main-content">
          
				<div class="row">
					
					<!-- Profile Info and Notifications -->
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>								
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>
      
<h2><span style="color:#ff0000;">The Workout</span></h2>
<h3>Triceps <span style="margin-left:500;float:right"> Biceps</span></h3><br>
<table border="1" cellpadding="3" cellspacing="3" style="width: 500px;float:left;"><thead><tr><th scope="col">Exercise</th>
<th scope="col">Sets</th>
<th scope="col">Reps</th>
<th scope="col">Rest</th>
</tr></thead><tbody><tr><td>Weighted Bench Dip</td>
<td>3-5</td>
<td>8-12</td>
<td>60-90 sec</td>
</tr><tr><td>Dumbbell Skull Crusher</td>
<td>3-4</td>
<td>8-12</td>
<td>45-60 sec</td>
</tr><tr><td>Cable Push-Down (Straight Bar)</td>
<td>3-4</td>
<td>10-15</td>
<td>45-60 sec</td>
</tr></tbody></table>
<table border="1" cellpadding="3" cellspacing="3" style="width: 500px;float:right;margin-left:500;"><thead><tr><th scope="col">Excercise</th>
<th scope="col">Sets</th>
<th scope="col">Reps</th>
<th scope="col">Rest</th>
</tr></thead><tbody><tr><td>Barbell Curl</td>
<td>3-5</td>
<td>6-12</td>
<td>60-90 sec</td>
</tr><tr><td>Alternating Dumbbell Curl</td>
<td>3-4</td>
<td>8-12</td>
<td>45-60 sec</td>
</tr><tr><td>"Preacher-Less" Preacher Curl</td>
<td>3-4</td>
<td>10-15</td>
<td>30-45 sec</td>
</tr></tbody></table><br><br><br><br><br>
<p style="margin-left:150;"><h3>Chest<span style="margin-left:442;float:right"> Shoulder</p></h3>
<table border="1" cellpadding="3" cellspacing="3" style="width: 500px;margin-top:10;float:left;position:relative;" ><thead><tr><th scope="col">Exercise</th>
<th scope="col">Sets</th>
<th scope="col">Reps</th>
</tr><tr><td>Incline Barbell Press</td>
<td>4</td>
<td>8</td>
</tr><tr><td>Flat-Bench Dumbbell Press</td>
<td>4</td>
<td>10</td>
</tr><tr><td>Dip</td>
<td>3</td>
<td>TO FAILURE*</td>
</tr><tr><td>Cable Flye</td>
<td>3</td>
<td>12**</td>
</tr></tbody></table>

<table border="1" cellpadding="3" cellspacing="3" style="width: 500px;float:left;margin-left:10;margin-top:10;"><thead><tr><th scope="col">Excercise</th>
<th scope="col">Sets</th>
<th scope="col">Reps</th>
<th scope="col">Rest</th>
</tr></thead><tbody><tr><td>Overhead Barbell Press</td>
<td>2-3</td>
<td>6-12</td>
<td>60-90 sec</td>
</tr><tr><td>Inclie Rear Delt-Raise</td>
<td>3-4</td>
<td>8-12</td>
<td>45-60 sec</td>
</tr><tr><td>Dumbell Lateral Raise</td>
<td>3-4</td>
<td>8-12</td>
<td>45-60 sec</td>
</tr><tr><td>Dumbell Front Raise</td>
<td>3-4</td>
<td>8-12</td>
<td>45-60 sec</td>
</tr><tr><td>Upright Row</td>
<td>3-4</td>
<td>8-12</td>
<td>45-60 sec</td>
</tr><tr><td>"Dumbell Shrug</td>
<td>3-4</td>
<td>10-15</td>
<td>30-45 sec</td>
</tr></tbody></table><br><br><br>
<br><br><br><br><br>
<p style="margin-left:150;"><h3>Legs<span style="margin-left:442;"></p></h3>
<table border="1" cellpadding="1" cellspacing="1" class="exercise" style="width: 500px;float:left;"><thead><tr><th scope="col">Exercise</th>
<th scope="col">Sets</th>
<th scope="col">Reps</th>
</tr></thead><tbody><tr><td>Barbell Squat</td>
<td>4</td>
<td>8-10</td>
</tr><tr><td>Leg Extension</td>
<td>4</td>
<td>12-15</td>
</tr><tr><td>Hack Squat</td>
<td>3-4</td>
<td>10-12</td>
</tr><tr><td>Dumbbell Lunge</td>
<td>3-4</td>
<td>15</td>
</tr></tbody></table>

</div>

 </body>
 </html>