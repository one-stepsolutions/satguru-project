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
h1{
padding-top:5%;
font-family:Inter;
font-weight:bold;
font-size:48pt;
color:white;
text-align:center;
}
h2{
padding-top:5%;
font-family:Inter;
font-weight:bold;
font-size:48pt;
color:white;
text-align:center;
}

.lastsection {
position: relative;
height: 100px;
width: 100%;
padding-top: 15px;
}

.span-block1{
display:block;
width: 32%;
height: 6px;
background-color:white;
top:95%;
left:8%;
position:absolute;
} 

.Works {
position: absolute;
top: 75%;
left: 55%;
font-family: inter;
font-weight: bold;
font-size: 18pt;
color: white;
 }
 
.Lastvideo{
	padding-top:5%;
    padding-left:5%;
    padding-right:5%;
}
.headings{
			font-family: inter;
			font-weight: semi-bold;
			font-size: 20pt;
			align-content:start;
			line-height:80%;
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
</style>
</head>
<body style="background-color:black;">                                   
<?php require 'include/header.php'; ?>
<!--Contents-->
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 p-3">
				<h1 style="color:white;"> ABOUT US</h1>  	
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<img src= "images/About/kidsimage.png" style="	float:left; width : 100%; height: 100%; border: 2px solid #D9BE8F;border-radius: 10px;">
			</div>
			<div class="col-md-6 col-sm-6 CorporateUniform">
				<p style="color:white;">Satguru Uniform is one of the leading manufacturers in Ulhasnagar founded with 
					the mission of making uniform buying simple and hassle free.<br>
					Uniforms not only promote togetherness but also foster team spirit. <br>
					Besides dress code, they serve a larger purpose than being a brand identity by providing safety, security, 
					and other functionality. <br>
					With this in mind, we aim at apparels that are 
					comfortable, stylish, and most importantly of top-notch quality.<br>Our focus is to 
					ensure high level of customer service and provide personalized customer 
					solutions.
				</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class ="span-block1">
				<span></span>
				</div>
				<h2 style="color:white;">HOW IT WORKS</h2>
			</div>
			<div class="col-md-12 col-sm-12">
				<div class="Lastvideo">       
				<video width="100%" height="auto" controls >
				<source src="images/Homepage/Video_Homepage.mp4" type="video/mp4" autoplay="autoplay" muted="true" loop="true"  style="object-fit: cover;"></video>
				</div>
			</div>
		</div>
	</div>
       <?php require 'include/footer.php'; ?>
</body>
</html>
 