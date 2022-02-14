<?php
include_once 'loginController.php';
include_once 'registerController.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }
 
        .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            
            top: 0;
            cursor: pointer;
        }
 
        .background {
            background: black;
            background-blend-mode: darken;
            background-size: cover;
        }
 
        .nav-list {
            width: 70%;
            display: flex;
            align-items: center;
        }
 
        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
            
        }
        .gold{
            width: 20%;
            height:20%;
        }
 
        .logo img {
            width: 180px;
            border-radius: 50px;
        }
 
        .nav-list li {
            list-style: none;
            padding: 26px 30px;
        }
 
        .nav-list li a {
            text-decoration: none;
            color: white;
        }
 
        .nav-list li a:hover {
            color: grey;
        }
 
        .rightnav {
            width: 30%;
            text-align: right;
        }


 
    
</style>
</head>
<body style="background-image: url(fitnesi.jpg); background-repeat: no-repeat; background-size: 100%">

    <nav class="navbar background">
        <ul class="nav-list">
            <div class="logo">
                <img class="gold" src= "gold.png">
            </div><br>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#kontakt">Kontakt</a></li>
            <li><a href="login.php">Log In</a></li>
        </ul>
    </nav>
	<div style="color: white;">
    <br>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" style="font-size: 20px; text-align: center; color: black;" class="form-login">
      <legend style="color: black;">Log In</legend>
      Username: <input type="text" name="username"> <br><br>
      Password: <input type="password" name="password"> <br> <br>
      <input type="submit" value="login" name="loginBtn">
      <p><a href='regjistrimi.php' style="color: black; font-size: 15px;">Krijo llogari te re?</a></p>
    </form>

  </div><br>

</body>
</html>
