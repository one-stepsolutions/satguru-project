<!DOCTYPE html>
<html lang="en">
<head>
	<title>SATGURU UNIFORMS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	<style>

	h1 {
		color:white;
		font-family:inter;
		font-weight:bold;
		padding-top:5%;
		line-height: 2 ;
		text-align:center;
		
		}
	.heading{
		font-size: 28pt;
		color:white;
		font-family:inter;
		font-weight:bold;
	}
	.corporate {
			padding-top:9.5%;
			right:14%;
			padding-left:38%;
			font-family:Inter;
			font-weight:bold;
			font-size:48pt;
			color:white;
		}
		.span-block{
			display:block;
			width: 2pt;
			height: 3px;
			top:90%;
			position:absolute;
			background-color:white;
			left: 88%;
			padding-right:30%;
		} 
	label{
			font-family : Inter;
			font-weight : Bold;
			font-size : 48px;
			color:white;
			
		}
	.CorporateUniform{
			display: flex;
			flex-wrap: wrap;
			font-family : Inter;
			font-weight : regular;
			font-size : 16pt;
			line-height: 22pt;
			padding-left:15px;
			padding-right:15px;
			color: white;
		}
	.conatiner-blk{
			border: 2px solid #D9BE8F;
			margin:auto;
			text-align: center;
		}
	figcaption { 
		font-family:Inter;
		font-size:20pt;
		text-align:center;
		color:white;
	}
	</style>
</head>
<body style="background-color:black;">
	<?php require 'include/header.php'; ?>
	<div class="container">	
		<div class="row">
			<div class="col-md-12 ">
				<h1 style="color:white;" class="heading">OUR PRODUCTS</h1>
			</div>
		</div>
		<br><br>
		<div class="row">
				<div class="col-md-4 col-sm-4 p-3">
					<p>
					<a href="school.php" style="color:white;">
					<img  src="images/Products/school/kiduniform.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;"><br><br>
					<figcaption>School Uniforms</figcaption></a></p>
				</div>
				<div class=" col-md-4 col-sm-4 p-3">
					<p>
					<a href="corporate.php" style="color:white;">
					<img  src="images/Products/office/chessuit.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;"><br><br>
					<figcaption>Corporate Uniforms</figcaption></a></p>
				</div>
				<div class=" col-md-4 col-sm-4 p-3">
					<p>
					<a href="hospital.php" style="color:white;">
					<img  src="images/Products/hospital/pkit.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;"><br><br>
					<figcaption>Hospital Uniforms</figcaption></a></p>
				</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-4 col-sm-4 p-3">
				<p>
				<a href="hotel.php" style="color:white;">
				<img  src="images/Products/hotel/unf.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;"><br><br>
				<figcaption>Hotel Uniforms</figcaption></a></p>
			</div>
			<div class=" col-md-4 col-sm-4 p-3">
				<p>
				<a href="industry.php" style="color:white;">
				<img  src="images/Products/industrial/juniorstaff.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;"><br><br>
				<figcaption>Industry Uniforms</figcaption></a></p>
			</div>	
			<div class=" col-md-4 col-sm-4 p-3">
				<p>
				<a href="" style="color:white;">
				<img  src="images/Products/industrial/officer.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;"><br><br>
				<figcaption>Security Uniforms</figcaption></a></p>
			</div>
		</div>
	</div>
	<?php require 'include/footer.php'; ?> 
</body>
</html>					




