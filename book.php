<?php
session_start();
include('db.php');
@$pid=$_REQUEST['id'];

$email=$_SESSION['email'];
if($email!='')
{
  $sql=mysqli_query($conn,"select fullname from register where email='$email'");
  while($row=mysqli_fetch_array($sql))
  {
    $fullname=$row['fullname'];
  }

  $sql=mysqli_query($conn,"select * from places where id='$pid'");
  while($row=mysqli_fetch_array($sql))
  {
    $place=$row['placename'];
    
  }

}
else
{
if($email=='')
{
  if(@$pid!='')
  {
    header('Location:form.php?id='.$pid);
  }
  else
  {
    header('Location:form.php'); 
  }
}
}
if(isset($_POST['book']))
{
  $fname=$_REQUEST['name'];

  $email=$_REQUEST['email'];
  $dest=$_REQUEST['destination'];
  $phone=$_REQUEST['phone'];
  $message=$_REQUEST['message'];

  $date=date('y-m-d');
  $res=mysqli_query($conn,"INSERT INTO book(fullname,email,destination,phone,comment,booking_date)values('$fname','$email','$dest','$phone','$message','$date')");

  if($res)
  {
    $_SESSION['message']="Successfully Booking done";
  }
  else
  {
    $_SESSION['message']="Booking Failed";
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
         <div style="color:green;margin-left:500px;font-size: 20px">
        <?php
                if(@$_SESSION['message']!='')
                {
                  ?>
                  <p> <?php echo @$_SESSION["message"]; ?> </p>
                  <?php
                  unset($_SESSION['message']);
                }
            ?>
        </div>
    <div class="book-wrapper">
       
        <form method="post">
           <fieldset>
            <legend> Travel Advisor</legend>
            <h1>Book</h1>
            <div class="book1">
                <label for="username">Full Name</label><br><br>
                <input type="text" name="name" placeholder="Enter Your Full Name" required>
            </div>
            
            <div class="book1">
                <label for="mail">Email (*)</label><br><br>
                <input type="mail" name="email" placeholder="Enter your mail" required>
            </div>
            
             <div class="book1">
                <label for="">Number (*)</label><br><br>
                <input type="text" name="phone" placeholder="Enter your number" required>
            </div>
            
            <div class="book1">
                <label for="cities">Select Your Destination Place</label>
                <select name="destination" id="">
                    
                     <?php
                  $sql=mysqli_query($conn,"select * from places");
                  while($row=mysqli_fetch_array($sql))
                  {
                ?>
                <option value="<?php echo $row['id']?>"><?php echo $row['placename'];?></option>
                
              
              <?php
                }
              ?>
                </select>
                </select>
            </div>
            
            <div class="book1">
                <label for="comment">Comment Here</label><br><br>
           <textarea name="message" id="" cols="30" rows="10"></textarea>
            </div>
            
            <div class="book1">
                <input type="submit" value="BOOK" name="book">
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


