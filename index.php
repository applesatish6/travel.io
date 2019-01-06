
<?php
session_start();
include('db.php');


@$email=$_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Darjeeling</title>
		
	
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
			
                <input type="text" id="search_text" placeholder="Search Here...">
                <input type="button" value="search" id="search" style="padding:6px;background-color:orangered;color:white;cursor:pointer;">
            

		</div>
	</header>
	<div style="clear: both;"></div>
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

	<div class="about-us">
		<div class="about-us-paragraph">
			<h2>About Us</h2>
			<p>  </p>
           <br>
           <br>
			<p> ACTUALLY, IT ISN’T ABOUT US. IT’S ABOUT LISTENING TO WHAT YOU WANT. AND THEN CREATING AN INDIVIDUAL HOLIDAY JUST FOR YOU It’s about using our expert knowledge of holiday destinations and our network of friends across the world to make sure reality exceeds your expectations.

And it’s about going on holiday ourselves. So we can justifiably claim that we never recommend something we haven’t actually experienced. A terrible hardship, you’ll agree, but it has to be done. The Ultimate Travel Company was established with the aim of creating tailor-made, luxury holidays and unrivalled escorted tours. We have over 25 years experience of organising worldwide travel and we have over 40 experts who have all been there and done it.

Talk to us about your holiday and you’ll realise why our customers return again and again – and bring their friends.</p>
		</div>
	</div>
<div class="services-title"><h1>Places</h1></div>
	<div class="services">
		
		<div class="hotel-img">
            <a href="places.php"><h2>Kanchanajunga</h2></a>
			<img src="images/kanchenajunga.jpg" alt="kanchenajunga mountain">
			<p>The Darjeeling Ropeway is a ropeway in the town of Darjeeling in the Indian state of West Bengal.[1] The ropeway is a popular tourist destination in the town. It consists of sixteen cars and plies between the "North Point" in the town of Darjeeling and Singla on the banks of the Ramman river. The journey on the ropeway offers beautiful views of the hills and the valleys around Darjeeling. The ropeway, which was started in 1968 and revamped in 1988, was stopped in October 2003 after four tourists died when the cable snapped causing two cars to plummet down the hill. In 2005, the state forest and public works department</p>
		</div>

		<div class="hotel-img">
            <a href="places.php"><h2>Himalayan mountaineering institute</h2></a>
			<img src="images/himalayaninstitute.jpg" alt="himalayan mountaineering institute">
			<p>The Himalayan Mountaineering Institute (HMI darjeeling) was established in Darjeeling, India on 4 November 1954[1] to encourage mountaineering as an organized sport in India. The first ascent of Mount Everest in 1953 by Tenzing Norgay and Edmund Hillary sparked a keen interest in establishing mountaineering as a well-respected endeavour for people in the region. With the impetus provided by the first prime minister of India, Jawaharlal Nehru, HMI was established in Darjeeling. </p>
		</div>

		<div class="hotel-img">
            <a href="places.php"><h2>Ging gompa</h2></a>
			<img src="images/ginggompa.JPG" alt="ging gompa">
			<p>Ging Gompa is a Buddhist monastery in Darjeeling, India Sangchhen Thong Delling monastery is located at Ging, at about 10 km from the town of Darjeeling. In the past it was an integral belief of lamaism that un-enlightened souls should not put anything in writing as anything written by him would be of an "un-enlightened" nature and that would help no one. Hence the real history of this monastery has been lost in the mists of time and one can only hope that future research will throw some light on its past. However, it can be safely said that it is one of the oldest monastery in Darjeeling. The monastery practices Nyingmapa tradition of Tibetan Buddhism. In a signboard hung in front of the monastery the year of establishment is written as being 1818</p>
		</div>
	</div>

<div class="services-title"><h1>Places</h1></div>
	<div class="services">
		
		<div class="hotel-img">
            <a href="places.php"><h2>Rock Garden</h2></a>
			<img src="images/garden.jpg" alt="rock garden">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita asperiores sunt voluptatum, aspernatur labore modi voluptates dignissimos dolores nisi, eum cumque ea a, amet perspiciatis, aut saepe eos cupiditate. Consectetur!</p>
		</div>

		<div class="hotel-img">
            <a href="places.php"><h2>Mahankal Temple</h2></a>
			<img src="images/mahankal.JPG" alt="mahankali temple">
			<p>The Mahakal Temple or Mahakal Mandir Nepali Translation: The master of Kaali is a sacred Hindu templelocated in Darjeeling in the state of West Bengal, India dedicated to the Hindu god Lord Shiva, the third god in the Hindu triumvirate. The Temple was built in 1782 by Lama Dorjey Rinzing and is perched atop the Observatory Hill in Darjeeling and is an amalgamation of Hindu and Buddhist religions. It is a unique religious site where both religions coexist harmoniously Mahakal Temple stands as a historical edifice on the spot where a Buddhist Monastery named 'Dorje-Ling' once stood which was built by Lama Dorjey Rinzing in 1765. Legend has it that three Shiva-Lingas representing Brahma,</p>
		</div>

		<div class="hotel-img">
            <a href="places.php"><h2>Darjeeling RopeWay</h2></a>
			<img src="images/darjeelingropeway.JPG" alt="darjeeling ropeway">
			<p>The Darjeeling Ropeway is a ropeway in the town of Darjeeling in the Indian state of West Bengal.[1] The ropeway is a popular tourist destination in the town. It consists of sixteen cars and plies between the "North Point" in the town of Darjeeling and Singla on the banks of the Ramman river. The journey on the ropeway offers beautiful views of the hills and the valleys around Darjeeling. The ropeway, which was started in 1968 and revamped in 1988, was stopped in October 2003 after four tourists died when the cable snapped causing two cars to plummet down the hill. In 2005, the state forest and public works department (PWD) </p>
		</div>
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
   <div style="clear: both;">
   	
   </div>
	<div class="copyright">
		<p>All Rights Are Reserved to the Travel Advisor &copy; from 2018</p>
	</div>
</div>
</body>
</html>