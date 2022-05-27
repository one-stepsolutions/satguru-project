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
			padding-top:5%;
			font-family:Inter;
			font-weight:bold;
			font-size:48pt;
			color:white;
			text-align:center;
		}
	.span-block1{
				display:block;
				width: 15%;
				height: 8px;
				top:95%;
				position:absolute;
				background-color:white;
				left: 7%;
				padding-right:30%;
			} 

	.span-block2{
			display:block;
			width: 15%;
			height: 8px;
			top:95%;
			position:absolute;
			background-color:white;
			left: 68.5%;
			padding-right:25%;
		} 
	.headings{
			font-family: inter;
			font-weight: semi-bold;
			font-size: 20pt;
			align-content:start;
			line-height:80%;
		}
	.heading a{
			color:white;
		}
	.heading a:hover{
			color:#D9BE8F;
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
			position: relative;
			width: 20pt;
			height: 8px;
			background-color: #D9BE8F;
			left: 35%;
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
			font-size : 13pt;
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

	</style>
</head>
<body style="background-color:black;">
	<?php require 'include/header.php'; ?>
	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<h1 style="color:white;">SCHOOL UNIFORMS</h1>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-3 col-sm-3 p3">
				<div class ="heading" style="color:white;">
					<p class="headings" >CATEGORIES</p>
					<a href="school.php">School Uniform</a> <br><br>
					<a href="corporate.php">Corporate Uniform</a> <br><br>
					<a href="hospital.php">Hospital Uniform</a> <br><br>
					<a href="hotel.php">Hotel Uniform</a> <br><br>
					<a href="industry.php">Industrial Uniform</a>  
				</div>
			</div>
				<div class="col-md-3 col-sm-3 p-3">
					<img  src="images/Products/school/chessuniform.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;">
				</div>
				<div class=" col-md-3 col-sm-3 p-3">
					<img  src="images/Products/school/fullcoatuniform.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;">
				</div>
				<div class=" col-md-3 col-sm-3 p-3">
					<img src="images/Products/school/girluniform.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;">

				</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3 col-sm-3" ></div>
			<div class="col-md-3 col-sm-3 p-3">
				<img  src="images/Products/school/karte.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;">
			</div>
			<div class=" col-md-3 col-sm-3 p-3">
				<img  src="images/Products/school/kids.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;">
			</div>	
			<div class=" col-md-3 col-sm-3 p-3">
				<img src="images/Products/school/salwarpant.png" style="margin-top: 10%; vertical-align: middle; width : 100%; height: 100%;border: 2px solid #D9BE8F;border-radius: 10px;">
			</div>
		</div>
		<br><br><br>
		<div class="row">
			<div class=" col-md-12 col-sm-12">
				<div class="conatiner-blk">
					<label>Satguru School Uniforms</label>
					<div class ="span-block">
						<span></span>
					</div>	
					<br> <br>
					<div class="CorporateUniform">
						<p >"People use clothing to express themselves; children are no different in this regard.School uniforms are a keyway of developing a sense of togetherness among students and staff. School uniform gives a reason to be more confident in class and develops an affinity with learning. 
							 We supply wide variety of school uniforms that would foster positive attitude in kids." 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require 'include/footer.php'; ?> 
</body>
</html>					




