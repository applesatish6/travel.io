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
	<title>Places</title>
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
   <section>

   	<div class="places-main-title">
    <p style="color:green">
        <?php
            if(isset($_GET['message'])){
            echo $_GET['message'];
        }
        ?>
    </p>
   	<h1>Pick your Favourite Place To Travel</h1>
   </div>
   	<?php
            $sql=mysqli_query($conn,"select * from places");
            while($row=mysqli_fetch_array($sql))
            {

          ?>
    <div class="places-title">
   	<h1><?php echo $row['placename']; ?></h1>
   	</div>

        <div class="places-wrapper">

        	
        	<div class="places-wrapper-para">
        	<p><?php echo $row['description'];?></p><br><br><br>

        	<a href="book.php?id=<?php echo $row['id'];?>">Book</a>
        	</div>
        	<div>
        	<img src="images/<?php echo $row['image'];?>" alt="images" width="500px" height="300px">
        	</div>
        </div>
        <?php
    }
        ?>
        
   </section>
	
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