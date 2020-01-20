<?php
    include_once 'include.php';
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PROFILE</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="empstyle.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">   
        <style>
			body{
			font-family: 'Roboto', sans-serif;
			font-weight: normal;
			line-height: 1.6em;
			margin: 0;
			<!--background-image: url("boy3.jpg");-->
			height:100%;
			background-position:center; 
			background-repeat: no-repeat;  
			background-size: cover;
		}
		
		.img1 {
		width:450px;
		height:170px;
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
			color: black;
		}
            .profile{
                margin: 25px 50px;
                padding: 10px 30px;
                float:left;
                border: 1px solid black;
            }
            #profile-img img{
                max-width: 150px;  
                border: 2px solid white;
                border-radius: 50%;              
            }
            #profile-img{
                float:left;
                margin: 10px;
            }
            #details{
                
                padding:5px;
                float:left;
            }
            #details h2{
                font-size: 1em;
                font-size: 16px;
                display: inline-block;
            }
            #details input{
                padding: 10px;
            }
             #main-footer{
			background:#333;
			color:#fff;
			text-align:center;
			padding:10px;
			margin-top:20px;
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
					<li id="current"><a href="donate.php">DONATE</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>                    
                    <li><a href="contactus.php">CONTACT US</a></li>
                </ul>
         </nav>
	</header>
        
        <!--?php
            $username = $_SESSION['USER'];
            $sql = "SELECT * FROM signup WHERE username = '$username';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck>0){
                while($row = mysqli_fetch_assoc($result)){
                    $username = $_POST['username'];
					$user_password = $_POST['password'];
					$first_name = $_POST['first_name'];
					$last_name = $_POST['last_name'];
					$email_id = $_POST['email_id'];
					$address = $_POST['address'];
                }
            }    
        ?-->

        <section class="profile">
            
            <div id="details">
                <h1>PROFILE DETAILS</h1>
                <form action="profileupdate.php" method="POST">
                    <table>
                        <tr>
                            <td>
                                <h2>Username: </h2>
                            </td>
                            <td>
								<input type="text" name="username" id="username"><br>
                                <!--?php
                                    echo '<input type="text" name="username" id="username" value="' . $username . '"><br>';
                                ?-->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>Password: </h2>
                            </td>                        
                            <td>
								<input type="text" name="password" id="password"><br>
                                <!--?php
                                    echo '<input type="text" name="password" id="password" value="' . $user_password . '"><br>';
                                ?-->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>First Name: </h2>
                            </td>
                            <td>
								<input type="text" name="first_name" id="first_name"><br>
                                <!--?php
                                    echo '<input type="text" name="first_name" id="first_name" value="' . $first_name . '"><br>';
                                ?-->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>Last Name: </h2>
                            </td>
                            <td>
								<input type="text" name="last_name" id="last_name"><br>
                                <!--?php
                                    echo '<input type="text" name="last_name" id="last_name" value="' . $last_name . '"><br>';
                                ?-->    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>Email Id: </h2>
                            </td>
                            <td>
								<input type="text" name="email_id" id="email_id"><br>
                                <!--?php
                                    echo '<input type="email" name="email_id" id="email_id" value="' . $email_id . '">';
                                ?-->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>Address: </h2>
                            </td>
                            <td>
								<input type="text" name="address" id="address"><br>
                                <!--?php
                                    echo '<input type="text" name="address" id="address" value="' . $address . '">';
                                ?-->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" class="button" name="update" value="UPDATE">
                            </td>
                            <td>
                                <input type="submit" class="button" name="delete" value="DELETE ACCOUNT">
                            </td>
                          
                        </tr>
                    </table>
                </form>            
            </div>
        </section>
        <div class="clr"></div>
        <div class="formFooter f6">
        <div class="formFooter-rightSide">
      <span class="formFooter-text">
		<p>Copyright &copy; 2019 Rachna & Vaishnavi</p>
      </span>
    </div>
		
    </body>
</html>
