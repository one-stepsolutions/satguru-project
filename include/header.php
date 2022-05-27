<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
<style>

.nav-item{
text-align: center;

}

@media screen and (max-width: 991px) {
.nav-item {
text-align: unset;
}
}

.flexDisplay {
display : flex;
}

.centerAlign {
align-items: center;
}

</style>
</head>
<body style="background-color:black; ">
<nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="collapse navbar-collapse w-100 order-1 order-lg-0 navbarNav" id="navbarNav">
        <ul class="navbar-nav col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <li class="nav-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a class="nav-link" style="top:5%;font-family:inter;font-size: 13pt; color:white; padding-left:5%;" href="index.php">Home</a>
            </li>
            <li class="nav-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a class="nav-link" style="top:5%;color:white; font-family:inter;font-size: 13pt;padding-left:5%;" href="products.php">Our Products</a>
            </li>
            <li class="nav-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a class="nav-link" style="top:5%;color:white; font-family:inter;font-size: 13pt;padding-left:5%;" href="about.php">About Us</a>
            </li>
           
        </ul>
    </div>
    <!-- <div class="d-flex w-100 order-0"> -->
        <div class="w-100 flexDisplay centerAlign">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        <!-- </div> -->
        
        <a class="navbar-brand text-center w-100" href="index.php"><img src="images/Logo/circle.png" style="width:auto;height:50%; padding-top:5%;" class="logoImage" alt="Image"></a>
       <!--  <span class="w-100"></span> -->
    </div>
    <div class="collapse navbar-collapse w-100 order-1 order-lg-0 navbarNav" id="navbarNav">
        <ul class="navbar-nav col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <li class="nav-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a class="nav-link" style="top:5%;color:white;font-family:inter;font-size: 13pt; padding-left:5%;" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a class="nav-link" style="top:5%;color:white;font-family:inter;font-size: 13pt; padding-left:5%;" href="faqs.php">Help & FAQs</a>
            </li>
            <li class="nav-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a class="nav-link" style="top:5%;color:white; font-family:inter;font-size: 13pt;padding-left:5%;" href="enquiry.php">Enquire</a>
            </li>
            
        </ul>
    </div>
    <!-- <span class="w-100"></span> -->
</nav>

</body>
</html>

