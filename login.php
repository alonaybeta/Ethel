<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>DTC</title>
  </head>
  <style>
    .login{
        background-image:url("dtc.jpg"); 
        font-family: Elephant;  
        color:lightgreen;
        font-size:15px;
        font-weight:10rem;
    }
    button {   
    background:transparent;   
    width: auto;  
    padding: 15px;   
    margin: 30px 10px;   
    border: 2px solid violet;  
    cursor: pointer;   
    border-radius: 20px;
    font-weight:bold;
    font-size: 14px;
    color:white;
    }  
    form {   
    height:320px;
    width:300px;
    text-align:center;
    position:absolute;
    top:90px;
    left:500px;
    color: white;
    }   
    input[type=text], input[type=password] {   
    width: auto;
    margin: 8px 0;  
    padding: 12px 20px;
    display: inline-block;   
    border: 2px solid violet;   
    box-sizing: border-box;
    border-radius: 15px;
    background:transparent;
    color: white;
    }  
 .container {   
          width: 550;
		  height: 500px;
		  background: transparent;
		  color: white;
}
    .road{
    width: 10%;
    height: 15%;
    padding: 10px;
    border-radius:50%;
    position: absolute;
    left:180px;
    top: 200px;

    }	  
    .load{
    width: 10%;
    height: 15%;
    padding: 10px;
    border-radius:50%;
    position: absolute;
    left:950px;
    top: 200px;
    }	  
    .btn{
        position: absolute;
        left: 40%;
    }
   
  </style>
  <body class="login">
                        <center><img class="road" src="logo.jpg"></center>
						<center><img class="load" src="islogo.jpg"></center>	
                        <form action="code.php" method="POST">  
							<div class="container">   
									 <center> <h4 style="color:purple">Login to Review DTC Records</h4> </center><br>						  
									 <label>Username : </label>   
									 <input type="text" placeholder="Enter Username" id="username" required><br>
									 <label>Password : </label><br>  
									 <input type="password" placeholder="Enter Password" id="password" required>  
									 <center><a href="vmgo.php" class="btn btn-danger float-end">Login</a></center><br><br>
                                     <center><a href="index.php" class="btn btn-danger float-end">Exit</a></center>
                                          
                            </div>   
						</form>   

  </body>
</html>