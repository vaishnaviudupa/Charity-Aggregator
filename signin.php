<?php
    include_once 'include.php';
@ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Signin!</title>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <style>
  header{
    padding: 20px;
    border-bottom: 3px solid black;
    min-height: 200px;   
}
.img1 {
		width:450px;
		height:180px;
		float:left;
		}
a{
    text-decoration: none;
    color: black;
}
nav ul li:hover a{
    padding: 10px;
    margin: 1px;
    border-radius: 5%;
    background-color: red;
    color: white;
}
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
#main-footer{
	background:#333;
	color:#fff;
	text-align:center;
	padding:10px;
	margin-top:20px;
}


  body{
  margin:0;
  color:#6a6f8c;
 background-image: url("ss1.jpg");
 height:100%;
    background-position:center; 
	background-repeat: no-repeat;  
	background-size: cover;
  font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}
.login-wrap{
  width:100%;
  margin:auto;
  margin-top: 30px;
  max-width:525px;
  min-height:650px;
  position:relative;
  background:url(login3.jpg) no-repeat center;
  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
  width:100%;
  height:100%;
  position:absolute;
  padding:90px 70px 50px 70px;
  background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
  top:0;
  left:0;
  right:0;
  bottom:0;
  position:absolute;
  -webkit-transform:rotateY(180deg);
          transform:rotateY(180deg);
  -webkit-backface-visibility:hidden;
          backface-visibility:hidden;
  transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
  display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
  text-transform:uppercase;
}
.login-html .tab{
  font-size:22px;
  margin-right:15px;
  padding-bottom:5px;
  margin:0 15px 10px 0;
  display:inline-block;
  border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
  color:#fff;
  border-color:#1161ee;
}
.login-form{
  min-height:345px;
  position:relative;
  -webkit-perspective:1000px;
          perspective:1000px;
  -webkit-transform-style:preserve-3d;
          transform-style:preserve-3d;
}
.login-form .group{
  margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
  width:100%;
  color:#fff;
  display:block;
}
.login-form .group .input,
.login-form .group .button{
  border:none;
  padding:15px 20px;
  border-radius:25px;
  background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
  text-security:circle;
  -webkit-text-security:circle;
}
.login-form .group .label{
  color:#aaa;
  font-size:12px;
}
.login-form .group .button{
  background:#1161ee;
}
.login-form .group label .icon{
  width:15px;
  height:15px;
  border-radius:2px;
  position:relative;
  display:inline-block;
  background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
  content:'';
  width:10px;
  height:2px;
  background:#fff;
  position:absolute;
  transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
  left:3px;
  width:5px;
  bottom:6px;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
  top:6px;
  right:0;
  -webkit-transform:scale(0) rotate(0);
          transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
  color:#fff;
}
.login-form .group .check:checked + label .icon{
  background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
  -webkit-transform:scale(1) rotate(45deg);
          transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
  -webkit-transform:scale(1) rotate(-45deg);
          transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
  -webkit-transform:rotate(0);
          transform:rotate(0);
}
.hr{
  height:2px;
  margin:15px 0 25px 0;
  background:rgba(255,255,255,.2);
}
.foot-lnk{
  text-align:center;
}
</style>
</head>
<body>
	<header>
		<div class="header">
			<img src="mainlogo.jpeg" class="img1" alt="Helping Hand" style="width:20%">
		</div>
		<br><br>
		<nav>
                <ul>
                    <li><a href="charity.php">HOME</a></li>
					<li id="current"><a href="signin.php">SIGN IN</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>                    
                    <li><a href="contactus.php">CONTACT US</a></li>
                </ul>
         </nav>
	</header>

  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="user_password" name="user_password" type="password" class="input" >
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
		  <div>
                        <?php 
                            //session_start();
                            if (isset($_SESSION['message'])) {
                            echo '<span>'.$_SESSION['message'].'</span>'; 
                            unset($_SESSION['message']); 
                            session_destroy(); 
                            }
                        ?>
                    </div>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
			<div>
                        <?php 
                            if (isset($_SESSION['message1'])) {
                            echo '<span>'.$_SESSION['message1'].'</span>'; 
                            unset($_SESSION['message1']); 
                            session_destroy(); 
                            }
                        ?>
                    </div>
          <label for="user" class="label">First Name</label>
          <input id="first_name" name="first_name" type="text" class="input">
        </div>
		<div class="group">
          <label for="user" class="label">Last Name</label>
          <input id="last_name" name="last_name" type="text" class="input">
        </div>
		<div class="group">
          <label for="user" class="label">Email Id</label>
          <input id="email_id" name="email_id" type="text" class="input">
        </div>
		<div class="group">
          <label for="user" class="label">City</label>
          <input id="address" name="address" type="text" class="input">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
<br><br>
	<footer id="main-footer">
		<p>Copyright &copy; 2019 Rachna & Vaishnavi</p>
	</footer>
  
  </body>
</html>
