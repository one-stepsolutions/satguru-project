<!DOCTYPE html>
<html lang="en">
<head>
	<title>SATGURU UNIFORMS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
     text-align: left;
      font-family: inter;
    }

    form {
      border: 1px solid white;
      background: white;
      padding: 40px 50px 45px;
    }

    .form-control:focus {
      border-color: #000;
      box-shadow: none;
    }

    label {
      font-weight: 600;
    }
    
    .error {
      color: red;
      font-weight: 400;
      display: block;
      padding: 6px 0;
      font-size: 14px;
    }
    h3{
    color:white;
    font-family:inter;
    font-weight:Strong;
    text-align:center;
    padding-top:5%;
    line-height: 2 ;
    }


    .form-control.error {
      border-color: red;
      padding: .375rem .75rem;
    }    
    
.closebtn {
  margin-left: 15px;
  color: black;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
.cl{
    max-width:500px;

}
    
    
  </style>
</head>

<body style="background-color:black;">
<?php require 'include/header.php'; ?>
  <div class="container">
    
    <?php
      include('database.php');

      if(!empty($_POST["send"] &&  $_POST["firstname"] &&  $_POST["lastname"] && $_POST["email"] && $_POST["phone"] && $_POST["subject"] && $_POST["message"] )) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // Recipient email
        $toMail = "jenarasolutionandservices@gmail.com";
        
        // Build email header
       $header = "From: " . $firstname . "<". $email .">\r\n";
    	$Body = "";
        $Body .=   "First Name: ";  
        $Body .= $firstname;
        $Body .= "\n";
        $Body .=   "Last Name: ";  
        $Body .= $lastname;
        $Body .= "\n";
        $Body .= "Phone-Number: ";
        $Body .= $phone;
        $Body .= "\n";
        $Body .= "Email-Id: ";
        $Body .= $email;
        $Body .= "\n";
        $Body .= "Message: ";
        $Body .= $message;
        $Body .= "\n";

        // Send email
        if(mail($toMail, $subject,$Body, $header )) {

            // Store contactor data in database
            $sql = $connection->query("INSERT INTO contacts_list(firstname, lastname, email, phone, subject, message)
            VALUES ('{$firstname}','{$lastname}', '{$email}', '{$phone}', '{$subject}', '{$message}')");

            if(!$sql) {
              die("MySQL query failed.");
            } else {
              $response = array(
                "status" => "alert-success",
                "message" => "Thank you for sharing your query.We will contact you shortly."
              );              
            }
        } else {
            $response = array(
                "status" => "alert-danger",
                "message" => "Query coudn't be sent, try again"
            );
        }
      }  
    ?>

    <!-- Messge -->
    <?php if(!empty($response)) {?>
      <div class="alert text-center <?php echo $response['status']; ?>" role="alert">
        <span class="closebtn">&times;</span>
        <?php echo $response['message']; ?>
      </div>
    <?php }?>
    
    <div class="col-sm-20 form-group" >
    <h3 style="color:white;text-align:center;"> ENQUIRE US </h3>
    <p class="Enquiry-details" style="color:white;text-align:center;" > For further questions, including partnership opporunities, please email satguruuniforms.mumbai@gmail.com</p> 
	</div>			


    <!-- Contact form -->
    
    <form action="" name="contactForm" method="post" class="cl offset-md-3" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">First Name:</label>
		<input type="text" class="form-control" style= "font-Size:14pt;"id="firstname" name="firstname"   placeholder= "First Name" maxlength="50">
      </div>
      <div class="form-group">
        <label for="name">Last Name:</label>
        <input type="text" class="form-control" style= "font-Size:14pt;" id="lastname" name="lastname"  placeholder= "Last Name" maxlength="50">
      </div>
    
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder= "Email-id">
      </div>

      <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder= "Phone-Number">
      </div>
    

      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="subject" id="subject" placeholder= "Subject">
      </div>

      <div class="form-group">
        <label>Short Description</label>
        <textarea class="form-control" name="message" id="message" rows="4" placeholder= "Message"></textarea>
      </div>
     
    

      <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
    </form>
  </div>
 
  
<!--Footer-->
       <?php require 'include/footer.php'; ?> 

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
  
  <script>
  var close = document.getElementsByClassName("closebtn");
	var i;

	for (i = 0; i < close.length; i++) {
	close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
    $(function() {
      $("form[name='contactForm']").validate({
        // Define validation rules
        rules: {
          firstname: "required",
          lastname: "required",
          email: "required",
          phone: "required",
          subject: "required",
          message: "required",
          firstname: {
            required: true
          },
          lastname: {
            required: true
          },
          email: {
            required: true,
            email: true
          },          
          phone: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
          },          
          subject: {
            required: true
          },          
          message: {
            required: true
          }
        },
        // Specify validation error messages
        messages: {
          firstname: "Please provide a valid name.",
          lastname: "Please provide a valid name.",
          email: {
            required: "Please enter your email",
            minlength: "Please enter a valid email address"
          },
          phone: {
            required: "Please provide a phone number",
            minlength: "Phone number must be min 10 digits long",
            maxlength: "Phone number must not be more than 10 digits long"
          },
          subject: "Please enter subject",
          message: "Please enter your message"
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
    });    
  </script>

</body>

</html>