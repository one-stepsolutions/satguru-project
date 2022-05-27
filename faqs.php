<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0">
<meta name="viewport" content="width=device-width,initial-scale=0,maximum-scale=0,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
  <style>
.FAQList {
  background-color:#eee;
  background-position: center;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 80%;
  border: none;
  font-family:Inter;
  outline: none;
  font-size: 20px;
  font-weight: bold;
  text-align:center;
  transition: 0.4s;
  align:center;
  margin: 0 auto;
  
}
.headings{
font-size: 22pt;
color:white;
font-family:inter;
font-weight:Strong;
line-height: 2 ;

}

h3{
color:white;
font-family:inter;
font-weight:Strong;
text-align:center;
padding-top:5%;
line-height: 2 ;

}
.FAQList:after {
  content: '\25BC';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\25B2";
}
.active, .FAQList:hover {
  background-color: #ccc; 
}

.answers {
  padding: 0 10px;
  display: none;
  color:white;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  float:justify;
}

.container2
{
    text-align:center;
}
</style>
  
</head>

<body style="background-color:black;">                                   

<?php require 'include/header.php'; ?>
  
<!--Contents-->

<div class="container">
	<div class="container2">
	<div class="row">
		<div class="col-md-12">
		<div class="headings">
			<h3> FREQUENTLY ASKED QUESTIONS</h3>
		</div>
	</div>
	</div><br>
	<div class="row">
		<div class="col-md-12 col-sm-12 p-3">
			<button class="FAQList ">1. Why Satguru Uniforms?</button>
			<div class="answers">
				<p style="font-family:Inter;font-size:13pt;color:white;text-align:center;">We are one stop solution for all customized requirements serving wide range with best quality.</p>
			</div>
			<button class="FAQList">2. How can we order?</button>
			<div class="answers">
				<p style="font-family:Inter;font-size:13pt;color:white;text-align:center;">You can visit our store,contact us at +91-9822993631 or submit the enquiry form.</p>
			</div>
			<button class="FAQList">3. What is return/exchange policy?</button>
			<div class="answers">
				<p style="font-family:Inter;font-size:13pt;color:white;text-align:center;">Alterations are welcome.For more details,contact us at +91-9822993631.</p>
			</div>
			<button class="FAQList">4. Do you provide home delivery to customers?</button>
			<div class="answers">
				<p style="font-family:Inter;font-size:13pt;color:white;text-align:center;">Yes, Terms and Conditions applied.</p>
			</div>
			<button class="FAQList"> 5. Do I need to book an appointment before visiting the store?</button>
			<div class="answers">
				<p style="font-family:Inter;font-size:13pt;color:white;text-align:center;">All our customers can visit us anytime. </p>
			</div>
			<button class="FAQList">6. Do you provide stitched or unstitched fabric as well?</button>
			<div class="answers">
				<p style="font-family:Inter;font-size:13pt;color:white;text-align:center;">Yes, serving all kind of fabrics.</p>
			</div>
			<button class="FAQList">7. Will you be able to help in customizing colors and designs?</button>
			<div class="answers">
				<p style="font-family:Inter;font-size:13pt;color:white;text-align:center;">Yes, we are here to help you mix, match right colors with quality fabric. </p>
			</div>
			<button class="FAQList">8. Are you products available for wholesale or distribution?</button>
			<div class="answers">
				<p style="font-family:Inter;font-size:13pt;color:white;text-align:center;">Our mission is to ship worldwide,please contact us to know about wholesale/distribution opportunities.</p>
			</div>
			<button class="FAQList">9. I have problem with my order,who should I contact for it?</button>
			<div class="answers">
				<p style="font-family:Inter;font-size:13pt;color:white;text-align:center;">You can visit us/drop mail at satguruuniforms.mumbai@gmail.com/call on +91-9822993631. </p>
			</div>
			<button class="FAQList">10. What are the payment options available?</button>
			<div class="answers">
				<p style="font-family:Inter;font-size:13pt;color:white;text-align:center;">Credit/Debit card, Net Banking, UPI, Cash on Delivery. </p>
			</div>
			<br><br>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 p-3">
				<p style="color:white;font-size:15pt;"> Didn't get your query resolved, <a href="enquiry.php" style="color:white;">Enquire here</a> </p>
	</div></div>
</div>
</div>
<!--Footer-->
       <?php require 'include/footer.php'; ?> 
<!-- Optional JavaScript -->
<script>
	var acc = document.getElementsByClassName("FAQList");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var answers = this.nextElementSibling;
		if (answers.style.display === "block") {
		  answers.style.display = "none";
		} else {
		  answers.style.display = "block";
		}
	  });
	}
	</script>
</body>
</html>