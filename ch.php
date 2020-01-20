<!DOCTYPE html>
<html>
<head>
	<title> Charity Aggregator </title> 
	<style>
		body{
    font-family: 'Roboto', sans-serif;
    font-weight: normal;
    line-height: 1.6em;
    margin: 0;
	background-image: url("ab.jpg");
	height:100%;
    background-position:center; 
	background-repeat: no-repeat;  
	background-size: cover;
}

.img1 {
		width:450px;
		height:150px;
		float:left;
		}

a{
    text-decoration: none;
    color: black;
}

h2{
	color:black;
}

button:hover{
    cursor: pointer;
}

.clr{
	clear:both;
}


nav ul li:hover a{
    padding: 10px;
    margin: 1px;
    border-radius: 5%;
    background-color: red;
    color: white;
}

marquee {
        width: 100%;
        padding: 10px 0;
        background-color: silver;
		font-family: "Times New Roman", Times, serif;
		font-size: 30px;
		color: red;
      }

header{
    padding: 20px;
    border-bottom: 3px solid black;
    min-height: 200px;
    
}

.head{
    float: left;
}

.head img{
    margin-top: 0;
    margin-left: 50px;
    position: absolute;
    height: 80px;
}

.head p{
    margin-left: 200px;
    margin-top: 20px;
}
/*
header h1{
    color: rgb(70, 70, 226);;
    font-weight: bold;
    float: left;
}
*/
nav ul{
    float: right;
    padding: 5px;
    list-style: none;
    margin-top: 103x;
}

nav ul li{
    display: inline;
    padding: 10px;
    margin: 1px;
    text-align: center;
    font-size: 17px;
    font-weight: bold;
}

ul li a{
    color: white;
}

#current{
    background-color: rgb(70, 70, 226);
    font-weight: bold;
    border-radius: 5%;
}

#current a{
    color: white;
}

.container{
    
    margin: auto;
    overflow: hidden;
}

/* slider */

* {box-sizing: border-box;}

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  min-height:200px;
  position: relative;
  margin: auto;
}

/* Caption text 
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}  */



/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

#org{
	border: 2px solid black;
	text-align:center;
	background-color:white;
	font-size:30px;
	margin:50px;
	padding:20px;
}

.helpage{
	float:left;
	width:150px;
	height:320px;
}

.cont{
	text-align:center;
}

.boxol{
	box-sizing: border-box;
	border: 2px solid black;
    float: left;
    width: 40%;
	height:380px;
    padding: 20px; 
    margin: 10px;
	margin-left:120px;
    text-align: center;
	background-color:white;
    font-family: 'Crimson Pro', serif;
    font-weight: normal;
}

.boxor{
	box-sizing: border-box;
	border: 2px solid black;
    float: left;
    width: 40%;
	height:380px;
    padding: 20px; 
    margin: 10px;
	background-color:white;
    text-align: center;
    font-family: 'Crimson Pro', serif;
    font-weight: normal;
}

.boxes{
    margin: 0 100px;
}

.sub-box{
    box-sizing: border-box;
    float: left;
    width: 20%;
    padding: 20px; 
    margin: 20px;
    text-align: center;
    font-family: 'Crimson Pro', serif;
    font-weight: normal;
    color: black;
    height: 250px;
}

#c1{
    background-color: rgb(255, 49, 49);
}

#main-footer{
	background:#333;
	color:#fff;
	text-align:center;
	padding:10px;
	margin-top:20px;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

	</style>
</head>
<body>
	<header>
		<div class="header">
			<img src="hh_logo1.jpeg" class="img1" alt="Helping Hand" style="width:20%">
		</div>
		<br><br>
		<nav>
                <ul>
                    <li id="current"><a href="#">HOME</a></li>
					<li><a href="signin.php">SIGN IN</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>                    
                    <li><a href="contactus.php">CONTACT US</a></li>
				
                </ul>
         </nav>
	</header>
	<br>
	<marquee direction="scroll"><a href="#">Amazon is burning !!!  Amazon rainforest fires: an environmental catastrophe</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Monsoon fury in India !</a></marquee>
	<br>
	<br>
	<div class="slideshow-container">

	<div class="mySlides fade">
	  <img src="wide11.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
	  <img src="wide12.jpg" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	  <img src="SangliFloods.jpg" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	  <img src="KolhapurFloods.jpg" style="width:100%">
	</div>

	<div class="mySlides fade">
	  <img src="wide9.jpg" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	  <img src="wide2.jpg" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	  <img src="wide8.jpg" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	  <img src="wide1.jpg" style="width:100%">
	</div>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	</div>
	
 	<div class="cont">
		<h2 id="org">ORGANISATIONS SUPPORTED BY US</h2>
		<section class="boxol">
			<img src="helpage.jpg" class="helpage" alt="HelpAge India">
			<h2>HelpAge India</h2>
			<em>HelpAge India is an Indian organization focused on the 
			concerns of elders. Established in 1978, its mission is 
			“to work for the cause and care of disadvantaged older 
			persons and to improve their quality of life”.</em><br>
			<b>Address:</b>No. 34-A/44, JP Road, Manish Nagar, Four Bungalows, Andheri West, P.O. Azad Nagar, Mumbai, Maharashtra 400053<br>
			<b>Contact No.:</b>022 2637 0754<br>
			<b>Rating:</b>4.1/5
		</section>
		<section class="boxor">
			<img src="give.png" class="helpage" alt="GiveInida">
			<h2>GiveIndia</h2>
			<em>GiveIndia is a non profit organisation in India. 
			It is an online donation platform and aims to channel
			and provide resources to credible non-governmental 
			organisations across India.</em><br>
			<b>Address:</b> 91 Springboard, B Wing, 5th Floor, Ackruti Trade Centre, MIDC, Andheri East, Mumbai, Maharashtra 400093<br>
			<b>Contact No.:</b>077387 14428<br>
			<b>Rating:</b>4.1/5
		</section>
		<section class="boxol">
			<img src="goong.png" class="helpage" alt="Goonj">
			<h2>Goonj</h2>
			<em>Goonj is a non-governmental organisation headquartered 
			in Delhi, India which undertakes disaster relief, humanitarian 
			aid and community development in parts of 23 states across India.
			Goonj focuses on clothing as a basic but unaddressed need. It was 
			founded in 1999 by Anshu Gupta.</em><br>
			<b>Address:</b> 2nd floor, M/s Mukund Synthetic Industries, R. R Industrial Estate, W.E. Highway Road, Kashimira, Mira Road, Maharashtra 401104<br>
			<b>Contact No.:</b>022 2845 3034<br>
			<b>Rating:</b>4.6/5
		</section>
		<section class="boxor">
			<img src="akshaya.jpg" class="helpage" alt="Akshaya Patra Foundation">
			<h2>Akshaya Patra Foundation</h2>
			<em>The Akshaya Patra Foundation is a non-profit organisation in India that 
			runs school lunch programme across India. The organisation was established in 2000. 
			It aims to counter classroom hunger and aid in education of children. It feeds 17,62,133
			children every day across India. </em><br>
			<b>Address:</b> 203, Dheeraj Heritage, S.V. Road, Santacruz (W), Mumbai 400064.<br>
			<b>Contact No.:</b>080 3014 3400<br>
			<b>Rating:</b>4.8/5
		</section>
		<section class="boxol">
			<img src="smile.png" class="helpage" alt="Smile Foundation">
			<h2>Smile Foundation</h2>
			<em>Smile Foundation is a non-governmental organization based in New Delhi, India. It was established 
			in 2002 and has a presence in 25 Indian states. As of 2017, the foundation reaches around 400,000 
			children and their families.</em><br>
			<b>Address:</b> 101, First Floor, Gladiola Building, Hanuman Rd, Vile Parle East, Mumbai, Maharashtra 400057<br>
			<b>Contact No.:</b>022 2610 4106<br>
			<b>Rating:</b>4.6/5
		</section>
		<section class="boxor">
			<img src="rdf.jpg" class="helpage" alt="Rural Development Foundation">
			<h2>Rural Development Foundation</h2>
			<em>The Rural Development Foundation is a non-governmental organization headquartered in Hyderabad,
			Telangana, India. It promotes rural development mainly through education: building and operating 
			high-quality, non-sectarian schools in underserved villages in Telangana & Andhra.</em><br>
			<b>Address:</b> Nishuvi, 3rd floor, 75, Dr Annie Besant Road, Worli, Mumbai, Maharashtra 400018<br>
			<b>Contact No.:</b>022 6109 3730<br>
			<b>Rating:</b>4.6/5
		</section>
	</div>	
	
	<div class="clr"></div>
	
	<section class="boxes">
		
            <div class="sub-box" id="c1">
                <h1>"Helping people by charity is the most human thing we can do."<br>-Oprah Wilfrey</h1>
            </div>
            <div class="sub-box" id="c1">
                <h1>"The smallest act of kindness is worth more than the greatest intention."<br>-Kahlil Gibran</h1>
            </div>
            <div class="sub-box" id="c1">
                <h1>"Charity is to will and do what is just and right in every transaction."<br>-Emanuel Swedenborg</h1>
            </div>
            <div class="sub-box" id="c1">
                <h1>"The unfortunate need people who will be kind to them; the prosperous need people to be kind to."<br>-Aristotle</h1>
            </div>
    </section>
	
	<div class="clr"></div>
	
	<footer id="main-footer">
		<p>Copyright &copy; 2019 Rachna & Vaishnavi</p>
	</footer>
	
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

	
</body>
</html>
