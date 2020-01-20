<!DOCTYPE html>
<html>
<head>
	<title> Contact Us </title> 
	<style>
		body{
			font-family: 'Roboto', sans-serif;
			font-weight: normal;
			line-height: 1.6em;
			margin: 0;
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
		
		.imgc {
			text-align:center;
			width:550px;
			height:120px;
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
			color: black;
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

		#cc1{
			margin-left:300px;
		}
		/*
		#cc2{
			margin-left:300px;
		}
		
		#cc3{
			margin-left:350px;
		}
		*/
		.mainimgs{
			text-align:center;
			box-sizing: border-box;
			float:left;
			padding:30px;
			width:30%;
			width:250px;
			height:200px;
			
		}

		#liin{
			width:10px;
			height:5px;
			margin-left:550px;
			padding-right:10px;
		}

		#yt{
			margin-left:25px;
		}

		.icons{
			text-align:center;
			box-sizing: border-box;
			float:left;
			padding:10px;
		}

		iframe{
			width:100%;
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
					
                    <li><a href="aboutus.php">ABOUT US</a></li>                    
                    <li id="current"><a href="contactus.php">CONTACT US</a></li>
                </ul>
         </nav>
	</header>
	<div class="clr"></div>
	<br>
	<div class="container" align="center">
		<img src="cu.png" class="imgc">
	</div>
	<br>
	<hr>
	<br>
	<div>
		<div class="mainimgs" id="cc1">
			<img src="cu1.png"><br>
			Tel No.:022 2345676
		</div>
		<div class="mainimgs" id="cc2">
			<img src="cu2.png" ><br>
			P. G. Kher Marg, TPS-III,<br> Off Linking Road,<br> Bandra (W), Mumbai - 400050
		</div>
		<div class="mainimgs" id="cc3">
			<img src="cu3.png"><br>
			Want to know more about us? Check out our <u><a href="aboutus.php">About Us</a></u>.
		</div>
	</div>
	<div class="clr"></div>
	<br><br><br>
	<hr>
	<div class="icons" id="liin">
		<a href="https://www.linkedin.com/in/rachna-soundatti"><img src="liin.png"></a>
	</div>
	<div class="icons" id="yt">
		<a href="https://www.youtube.com"><img src="youtube.png"></a>
	</div>
	<div class="icons">
		<a href="https://www.instagram.com"><img src="insta.jpg"></a>
	</div>
	<div class="icons">
		<a href="https://www.facebook.com"><img src="fb.png"></a>
	</div>
	<div class="icons">
		<a href="https://twitter.com"><img src="twitter.png"></a>
	</div>
	<br><br><br>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.983462956152!2d72.83367151442893!3d19.064464687094475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c91130392c07%3A0x3c47bf391c8de931!2sThadomal+Shahani+Engineering+College!5e0!3m2!1sen!2sin!4v1565015051282!5m2!1sen!2sin" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	<br><br><br><br>
	<div class="clr"></div>
	<footer id="main-footer">
		<p>Copyright &copy; 2019 Rachna & Vaishnavi</p>
	</footer>
</body>
</html>
