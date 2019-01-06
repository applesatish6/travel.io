<?php
include("db.php");
session_start();
if(isset($_POST["register"]))
{
  $fname= $_POST["fname"];
  $lname=$_POST["lname"];
  $name=$fname.' '.$lname;
  $password=$_POST["password"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $date=date('y-m-d');
  $sql=mysqli_query($conn,"INSERT INTO register(fullname,password,email,phone,created_at)values('$name','$password','$email','$phone','$date')");
  if($sql)
  {
    $_SESSION['email']=$email;
    $message="Successfully Registered";
    header('Location:places.php?message='.$message);
    
  }
  else
  {
    $_SESSION['message']="Registration Failed";
  }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
     <header id="main-header">

        <div class="travel-advisor">
            <h2>Travel Advisor</h2>
        </div>
        <div class="search-form">
            <form action="" method="">
                <input type="text" name="search" id="search-main" placeholder="Search Here">
                 <input type="button" value="search" id="search" style="padding:6px;background-color:orangered;color:white;cursor:pointer;">
            </form>

        </div>
    </header>
    <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="places.php">Tourist Spots</a></li>
        <li><a href="book.php">Book</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="credits.php">Credits</a></li>
        <li class="right-nav"><a href="form.php">Login</a></li>
        <li class="right-nav"><a href="register.php">Register</a></li>
        </ul>
    </nav>
        
    <!-- background image-->
    
        <div class="background-image">
            <div class="background-paragraph">
				<h1>Travel With Us</h1>
				<p>'Twenty years from now you will be more disappointed by the things you didn't do than by the ones you did do. So throw off the bowlines, sail away from the safe harbor. Catch the trade winds in your sails. Explore. Dream. Discover.' - Mark Twain</p>
			</div>
        </div>

    <div class="register-form-wrapper">
        <form method="post">
           <fieldset>
            <legend> Travel Advisor</legend>
            <h1>Register</h1>
            <div class="form2">
                <label for="fname">First Name (*)</label><br><br>
                <input type="text" name="fname" placeholder="Enter Your Username">
            </div>
            
            <div class="form2">
                <label for="lastname">Last Name (*)</label><br><br>
                <input type="text" name="lname" placeholder="Enter Your Password">
            </div>
            
            <div class="form2">
                <label for="email">Email (*)</label><br><br>
                <input type="email" name="email" placeholder="Enter Your Mail">
            </div>
             <div class="form2">
                <label for="password">Password (*)</label><br><br>
                <input type="password" name="password" placeholder="Enter Your Password">
            </div>
            <div class="form2">
                <label for="number">Phone Number (*)</label><br><br>
                <input type="text" name="phone" placeholder="Enter Your number">
            </div>
           
           
              
            <div class="form2">
                <input type="submit" value="Register" name="register">
                
                <p>If you have a account <a href="#">Sign In</a></p>
            </div>
            </fieldset>
        </form>
    </div>


   <footer>
		<div class="links">
			<h1>For Tourists</h1>
			<ul>
				<li><a href="places.html">Places</a></li>
				<li><a href="book.html">Book</a></li>
				<li><a href="form.html">Login</a></li>
				<li><a href="register.html">Register</a></li>
				
			</ul>
		</div>
		<div class="contact-us">
			<h1>Contact Us</h1>
			<p>phone : 99899998999</p>
			<p>mail : somusatish@gmail.com</p>
			<p>Address :  Travel Advisor
Amrit Marg, Thamel, Kathmandu, NEPAL.
GPO Box: 4902</p>
			<span><i class="fab fa-facebook-square"></i></span>
			<span><i class="fab fa-twitter-square"></i></span>
			<span><i class="fab fa-google-plus-square"></i></span>
			<span><i class="fab fa-youtube"></i></span>
		</div>
	</footer>
    <div class="copyright">
        <p>All Rights Are Reserved to the Travel Advisor &copy; from 2018</p>
    </div>
</body>
</html>