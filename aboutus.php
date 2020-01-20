<!DOCTYPE html>
<html>
<head>
	<title> About Us </title> 
	 <script src = "https://code.jquery.com/jquery-1.12.4.min.js"></script>
      </script>
	<script type="text/javascript">
	$(document).ready(function(){
	$("#even").css("background","yellow");
	$("#odd").css("background","pink");
	});
	</script>

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
		
		.container{
			text-align:center;
		}
		
		.imgm {
			padding: 20px;
			margin-left: 20px;
			width:400px;
			height:500px;
			float:left;
		}
		
		.imgv {
			padding: 20px;
			width:400px;
			height:500px;
			float:left;
		}
		
		.imgg {
			padding: 20px;
			width:400px;
			height:500px;
			float:left;
		}

		a{
			text-decoration: none;
			color: black;
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

		header{
			padding: 20px;
			border-bottom: 3px solid black;
			min-height: 150px;
			
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

		.active {
		  background-color: #717171;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		.boxes{
			margin: 0 100px;
		}

		.box{
		background-color:white;
		box-sizing: border-box;
		padding: 20px; 
		margin: 20px;
		text-align: center;
		font-family: 'Crimson Pro', serif;
		font-weight: normal;
		color: black;
		height: 200px;
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
			<img src="hh_logo1.jpeg" class="img1" alt="Helping Hand">
		</div>
		<br><br>
		<nav>
                <ul>
                    <li><a href="charity.php">HOME</a></li>
				
                    </a></li>
                    <li id="current"><a href="aboutus.php">ABOUT US</a></li>                    
                    <li><a href="contactus.php">CONTACT US</a></li>
                </ul>
         </nav>
	</header>
	<div class="clr"></div>
	<br>
	<br>
	<div class="container" align="center">
		<img src="mission.png" class="imgm">
		<img src="vision.png" class="imgv">
		<img src="goal.png" class="imgg">
	</div>
	<br>
	<br>
	<div class="clr"></div>
	<div class="box">
	<h3 id="even">OUR HISTORY</h3>
	<p id="odd">Helping Hands was founded in 2018 by Rachna Soundatti and Vaishnavi Udupa, who were passionate about charitable giving and social
	investing but witnessed report after report of scandals at local and national charities. Rachna and Vaishnavi decided to create an 
	unbiased source of information that would provide charitable givers and social investors across the country with every type
	of charitable interest the tools necessary to make informed giving decisions.</p>
	</div>
	<footer id="main-footer">
		<p>Copyright &copy; 2019 Rachna & Vaishnavi</p>
	</footer>
</body>
</html>
