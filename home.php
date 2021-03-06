<!DOCTYPE html>
 
<html>
 
<head>
    <title>Gold's Gym</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style>
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
 
    
 
        .firstsection {
            background-color: orange;
            height: 400px;
        }
 
        .secondsection {
            background-color: silver;
            height: 400px;
        }
 
        .box-main {
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            max-width: 80%;
            margin: auto;
            height: 80%;
        }
 
        .firsthalf {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
 
        .secondhalf {
            width: 30%;
        }
 
        .secondhalf img {
            width: 70%;
            border: 4px solid white;
            border-radius: 150px;
            display: block;
            margin: auto;
        }
 
        .text-big {
            font-family: 'Piazzolla', serif;
            font-weight: bold;
            font-size: 35px;
        }
 
        .text-small {
            font-size: 22px;
            font-weight: bold;
            text-align: center;
        }
        .text-small-1{
            margin-top: 10%;
            margin-right:5%;
            font-weight: bold;
            font-size: 25px;
        }
 
        .btn {
            padding: 8px 20px;
            margin: 7px 0;
            border: 2px solid white;
            border-radius: 8px;
            background: none;
            color: white;
            cursor: pointer;
        }
 
        .btn-sm {
            padding: 6px 10px;
            vertical-align: middle;
        }
 
        .section {
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            
            margin: auto;
            background-color: orange;
        }
        img{
            width: 400px;
            height: 400px;
            float: left;
        }
 
        .section-Left {
            flex-direction: row-reverse;
        }
 
        .paras {
            padding: 0px 65px;
        }
 
        .thumbnail img {
            width: 250px;
            border: 2px solid black;
        
            margin-top: 19px;
        }
 
        .center {
            text-align: center;
        }
        .number{
            font-family: "Times New Roman", Times, serif;
            font-style: italic;
            font-size: 20px;
            margin-top: 10%;
        }


 
        .text-footer {
            text-align: center;
            padding: 30px 0;
            font-family: 'Ubuntu', sans-serif;
            display: flex;
            justify-content: center;
            color: white;
        }
        .forma{
            font-size: 25px;
        }
    </style>
</head>
 
<body>
    <nav class="navbar background">
        <ul class="nav-list">
            <div class="logo">
                <img class="gold" src= "gold.png">
            </div><br>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#kontakt">Kontakt</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
 
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gymi1.jpg" class="d-block w-100" alt="..." width="100px" height="200px">
    </div>
    <div class="carousel-item">
      <img src="gymi2.jpg" class="d-block w-100" alt="..." width="100px"  height="200px">
    </div>
    <div class="carousel-item">
      <img src="gymi3.jpg" class="d-block w-100" alt="..." width="100px"  height="200px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

</div>


    <section class="firstsection" style="margin-top: 0%;">
        <div class="box-main">
            <div class="firstHalf">
                <h1 class="text-big" id="home">Gold's Gym</h1>
                <p class="text-small">
                    Deshiron te keshe nje fizik qe ke enderruar gjithmone
                    ,je i merzitur
                    nga pesha jote momentale?Eja ne Gold'Gym ku endrra jote mund te behet
                    realitet,me salle te pastert,trajner te licensuar per nga ana e fitnesit
                    dhe nutricionit dhe me pajisjet me te reja te fintesit.
                </p>
 
 
            </div>
        </div>
    </section>
 
    <section class="secondsection">
        <div class="box-main">
            <div class="firstHalf"><br>
                <h1 class="text-big" id="about">
                    Trajneret
                </h1>
                <img src="trajner.jpg" alt="trajneri" style="width: 300px; height: 250px">
                <p class="text-small-1">
                    
                    Trajneret jane ata te cilet na bejne neve te suksesshem. Secili trajner eshte
                    motivues dhe per cdo gjenerate perrcjellin motivimet e tyre
                    dhe po ashtu inspirojne njerzit per nje fizik dhe nje shendet te mire,duke pasur shume
                    lloje plane stervitjesh po ashtu edhe plane te dietave.
                </p>
 
 
            </div>
        </div>
    </section>
 
    <section class="section">
        <div class="paras">
            <h1 class="sectionTag text-big" id="kontakt">Gold's Gym</h1>
 
            <p class="sectionSubTag text-small">
                 Per cdo pyetje ejani dhe na kontaktoni per ofertat qe ndodhin mbrenda muajit,3 muaj sa kushtojne,6muaj dhe anetarsimi 1 vjeqar dhe per qdo paqartesi tjeter qe mund te keni. Ju mirepresim!




        </form>
         
 
 
        </div>
    </section>
 
    <footer class="background">
        <p class="text-footer">
            Copyright ??-All rights are reserved
        </p>
        <p id="demo"></p>
 
 
    </footer>
    <script>
        function newDoc() {
  window.location.assign("https://www.goldsgym.com")
}

</script>
</body>
 
</html>