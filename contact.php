<?php
session_start();
include('db.php');


@$email=$_SESSION['email'];
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
        <?php
        if($email=='')
        {
       ?>
        <li class="right-nav"><a href="form.php">Login</a></li>
        <li class="right-nav"><a href="register.php">Register</a></li>
        <?php
            }
            else
            {
            ?>
            <li class="right-nav"><a href="logout.php">Logout</a></li>
            <?php
            }

        ?>
        </ul>
    </nav>
        
    <!-- background image-->
    
        <div class="background-image">
           <div class="background-paragraph">
				<h1>Travel With Us</h1>
				<p>'Twenty years from now you will be more disappointed by the things you didn't do than by the ones you did do. So throw off the bowlines, sail away from the safe harbor. Catch the trade winds in your sails. Explore. Dream. Discover.' - Mark Twain</p>
			</div>
        </div>


<!-- sign in-->
    <div class="contact-us-form" style="text-align:center;height:400px;">
        <h1 style="margin:20px 0px;font-size:30px;color:orange;">Contact Us</h1>
        
        <h2>Contact us through below methods</h2><br>
        
        <p style="font-size:18px;">Contact us through from below given methods:<br><br>
            <em>via phone </em> : 9998889998
        </p><br>
        <p  style="font-size:18px;">
            <em> Contact via Email</em>: somu143123@gmail.com
        </p><br>
        
        <p  style="font-size:18px;">
            You can submit your query in the registration form given in the above register link 
        </p>
    </div>
<!-- end sign in-->
  <!--footer-->
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
    <!-- end footer-->
</body>
</html>