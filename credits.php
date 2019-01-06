<?php
session_start();
include('db.php');
@$email=$_SESSION['email'];
if(@$email!='')
{

}
else
{
  header('Location:form.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>kulumanali</title>
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
			<form>
				<input type="text" id="search_text" placeholder="Search Here...">
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
	 <div id="search_para">
		<div class="background-image">
			<div class="background-paragraph">
				<h1>Travel With Us</h1>
				<p>'Twenty years from now you will be more disappointed by the things you didn't do than by the ones you did do. So throw off the bowlines, sail away from the safe harbor. Catch the trade winds in your sails. Explore. Dream. Discover.' - Mark Twain</p>
			</div>
		</div>
	
	<!-- end background image-->
   <div class="credits">
   	<h1>Credits</h1>
   	<h2>Darjeeling ropeway</h2><br>
   	<p><a href="https://en.wikipedia.org/wiki/Darjeeling_Ropeway">https://en.wikipedia.org/wiki/Darjeeling_Ropeway
</a></p><br>
      <h2>himalayan mountaineering institute</h2>
   	<p><a href="https://en.wikipedia.org/wiki/Himalayan_Mountaineering_Institute
">https://en.wikipedia.org/wiki/Himalayan_Mountaineering_Institute
</a></p><br>
      <h2>
Ging Gompa</h2>
   	<p><a href="https://en.wikipedia.org/wiki/Ging_Gompa">https://en.wikipedia.org/wiki/Ging_Gompa</a></p><br>
   	<h2>
Rock garden</h2><br>
   	<p><a href="https://en.wikipedia.org/wiki/Rock_Garden,_Darjeeling">https://en.wikipedia.org/wiki/Rock_Garden,_Darjeeling</a></p><br>
   	<h2>Mahankal Temple:</h2><br>
   	<p><a href="https://en.wikipedia.org/wiki/Mahakal_Temple,_Darjeeling">https://en.wikipedia.org/wiki/Mahakal_Temple,_Darjeeling</a></p><br>
   	<h2>kanchanajunga</h2><br>
   	<p><a href="https://en.wikipedia.org/wiki/Kangchenjunga">https://en.wikipedia.org/wiki/Kangchenjunga</a></p>
   	
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
</div>
</body>
</html>