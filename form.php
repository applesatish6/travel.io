<?php
include("db.php");
@$pid=$_REQUEST['id'];
session_start();
if(isset($_POST['login']))
{
  $email=$_POST["email"];
  $password=$_POST["password"];
  $sql=mysqli_query($conn,"select email,password from register where email='$email' and password='$password'");
  while($row=mysqli_fetch_assoc($sql))
  {
    $dbuser=$row['email'];
    $dbpass=$row['password'];
    if($email==$dbuser)
    {
      if($password==$dbpass)
      {
        $_SESSION['email']=$email;
        if($pid!='')
        {
          header('Location:book.php?id='.$pid);
        }
        else
        {
          header('Location:book.php');
        }
      }
      else
      {
        echo "<script>alert('Enter correct password')</script>";
      }
    }
    else
    {
        echo "<script>alert('Enter correct username')</script>";
    }
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
    <script>
        document.addEventListener( 'DOMContentLoaded',function(){
         var searchpara=document.getElementById("search_para").innerHTML;
         searchpara=searchpara.toString();
         document.getElementById("search").onclick =function ()
         {highlight_word(searchpara)};  
        },false);

        function highlight_word(searchpara)
        {
         var text=document.getElementById("search_text").value;
         if(text)
         {
          var pattern=new RegExp("("+text+")", "gi");
          var new_text=searchpara.replace(pattern, "<span class='highlight'>"+text+"</span>");
          document.getElementById("search_para").innerHTML=new_text;
         }
        }
</script>
<style>
#search_para
{
 color:grey;
}
.highlight
{
 color:blue;
 text-decoration:underline;
}
</style>
</head>
<body>
    <header id="main-header">

        <div class="travel-advisor">
            <h2>Travel Advisor</h2>
        </div>
        <div class="search-form">
          
            <input type="text" id="search_text" placeholder="Search Here...">
            <input type="button" value="search" id="search" style="padding:6px;background-color:orangered;color:white;cursor:pointer;">
           
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
     <div id="search_para">
        <div class="background-image">
            <div class="background-paragraph">
				<h1>Travel With Us</h1>
				<p>'Twenty years from now you will be more disappointed by the things you didn't do than by the ones you did do. So throw off the bowlines, sail away from the safe harbor. Catch the trade winds in your sails. Explore. Dream. Discover.' - Mark Twain</p>
			</div>
        </div>


<!-- sign in-->
    <div class="signin-form-wrapper">
        <form method="post">
           <fieldset>
            <legend> Travel Advisor</legend>
            <h1>Login</h1>
            <div class="form1">
                <label for="username">UserName</label>
                <input type="text" name="email" placeholder="Enter Your Username">
            </div>
            
            <div class="form1">
                <label for="password">Password</label><br>
                <input type="password" name="password" placeholder="Enter Your Password">
            </div>
            
            <div class="form1">
                <input type="submit" value="Login" name="login">
                
                <p>If you don't have an account <a href="#">Register Here</a></p>
            </div>
            </fieldset>
        </form>
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
</div>
    <!-- end footer-->
</body>
</html>