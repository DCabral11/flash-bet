<html>
<html lang="en">
    <head>
        <title> FlashBet </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>

        <div class= "sitebanner" style="margin-bottom:0">
            <img src="FlashBet Logo.png">
        </div>
    </head>
    
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   
   <a class="navbar-brand" href="index.php"> Home Page </a>

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
       <span class="navbar-toggler-icon"> </span>
   </button>

   <div class="collapse navbar-collapse" id="collapsibleNavbar">

       <ul class="navbar-nav">
           <li class="nav-item">
               <a class="nav-link" href="Schedule.php"> Schedule </a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="Standings.php">Standings </a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="Results.php"> Results </a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="Bets.php"> Bet </a>
           </li>
       </ul>
   </div>

   <div class="mx-auto order-0">

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
           <span class="navbar-toggler-icon"></span>
       </button>
  
   </div>
   
   <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
       
       <ul class="navbar-nav ml-auto">
           <li class="nav-item">
               <a class="nav-link" href="login.php"> Login/Register </a>
           </li>

           <li class="nav-item">
               <a class="nav-link" href="Profile.html" >Profile <img src="profile.png" alt="Avatar" class="ProfileAvatar">  </a> 
           </li>
                            
                        </ul>
                    </div>
                      
    </nav>
    <br>

<h1> 2019 Classification:</h1>
<br>
<div class = "row">
    <div class = "column">
        <div class = "connection">
            <?php
                 $connection= mysqli_connect("localhost","root","","flashbet");
                 $sql="SELECT position, driver FROM standings";
                 $results= mysqli_query($connection,$sql);

                if(mysqli_num_rows($results)>0){
                    while($row= mysqli_fetch_array($results)){
                        if($row[1] == "Lewis Hamilton")
                            echo $row[0]." - ".$row[1]. "&nbsp". "&nbsp"."<img src='mercedes.png' width=50 height=50 >". "&nbsp"."<img src='Hamilton.jpg' width=50 height=50 >"."<br>"."<br>";
                        else if($row[1] == "Valtteri Bottas")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp" . "&nbsp"."&nbsp"."<img src='mercedes.png' width=50 height=50>". "&nbsp"."<img src='Bottas.jpg' width=50 height=50 >"."<br>"."<br>";
                        else if($row[1] == "Sebastian Vettel")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='ferrari.png' width=40 height=40>". "&nbsp"."<img src='Vettel.jpg' width=50 height=50 >"."<br>"."<br>";
                        else if($row[1] == "Max Verstappen")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='RedBull.png' width=80 height=40>". "&nbsp"."<img src='Max.jpg' width=50 height=50 >"."<br>"."<br>";
                        else if($row[1] == "Charles Leclerc")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='ferrari.png' width=40 height=40>". "&nbsp"."<img src='Leclerc.jpg' width=50 height=50 >"."<br>"."<br>";
                        else if($row[1] == "Pierre Gasly")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='RedBull.png' width=80 height=40>". "&nbsp"."<img src='Gasly.jpg' width=50 height=50 >"."<br>"."<br>";
                        else if($row[1] == "Carlos Sainz")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='Mclaren.png' width=60 height=80>". "&nbsp"."<img src='Sainz.jpg' width=50 height=50 >"."<br>"."<br>";
                        else if($row[1] == "Daniel Ricciardo")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='Renault.png' width=50 height=50>". "&nbsp"."<img src='Ricciardo.jpg' width=50 height=50 >"."<br>"."<br>";
                        else if($row[1] == "Kimi Raikkonen")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='AlfaRomeo.png' width=80 height=50>". "&nbsp"."<img src='Raikkonen.jpg' width=50 height=50 >"."<br>"."<br>";
                        else if($row[1] == "Kevin Magnussen")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='Haas.png' width=40 height=40>". "&nbsp"."<img src='Magnussen.jpg' width=50 height=50 >"."<br>"."<br>";
                    }
                }
            ?>
        </div>
    </div>
    
    <div class = "column">
        <div class = "connection2">
        <?php
            $connection= mysqli_connect("localhost","root","","flashbet");
        
            $sql="SELECT position, driver  FROM standings";
            $results= mysqli_query($connection,$sql);
  
            if(mysqli_num_rows($results)>0){
                while($row= mysqli_fetch_array($results)){
                    if($row[1] == "Nico Hulkenberg")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='Renault.png' width=50 height=50>". "&nbsp"."<img src='Hulkenberg.jpg' width=50 height=50 >"."<br>"."<br>";
                    else if($row[1] == "Lando Norris")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='Mclaren.png' width=60 height=80>". "&nbsp"."<img src='Norris.jpg' width=50 height=50 >"."<br>"."<br>";
                    else if($row[1] == "Sergio Perez")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='RacingPoint.png' width=40 height=40>". "&nbsp"."<img src='Perez.jpg' width=50 height=50 >"."<br>"."<br>";
                    else if($row[1] == "Daniil Kvyat")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='ToroRosso.png' width=120 height=40>". "&nbsp"."<img src='Kvyat.jpg' width=50 height=50 >"."<br>"."<br>";
                    else if($row[1] == "Alexander Albon")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='ToroRosso.png' width=120 height=40>". "&nbsp"."<img src='Albon.jpg' width=50 height=50 >"."<br>"."<br>";
                    else if($row[1] == "Lance Stroll")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='RacingPoint.png' width=40 height=40>". "&nbsp"."<img src='Stroll.jpg' width=50 height=50 >"."<br>"."<br>";
                    else if($row[1] == "Romain Grosjean")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='Haas.png' width=40 height=40>". "&nbsp"."<img src='Grosjean.jpg' width=50 height=50 >"."<br>"."<br>";
                    else if($row[1] == "Antonio Giovinazzi")
                            echo $row[0]." - ".$row[1]. "<img src='AlfaRomeo.png' width=80 height=50>". "&nbsp"."<img src='Giovinazzi.jpg' width=50 height=50 >"."<br>"."<br>";
                    else if($row[1] == "George Russell")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='Williams.png' width=40 height=40>". "&nbsp"."<img src='Russell.jpg' width=50 height=50 >"."<br>"."<br>";
                    else if($row[1] == "Robert Kubica")
                            echo $row[0]." - ".$row[1]. "&nbsp" . "&nbsp"."<img src='Williams.png' width=40 height=40>". "&nbsp"."<img src='Kubica.jpg' width=50 height=50 >"."<br>"."<br>";
                    }
                }
            ?>
        </div>
    </div>
</div>

<br>

<footer class="footer">
            <div class="container-fluid text-center text-md-left">       
              <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                <br>
                  <b>
                    FlashBet - Betting Company    
                  </b>
                  <p> 
                    Diogo Cabral
                    <br>
                    João Monteiro
                    <br>
                    Pedro Mendonça
                    </p>
                </p>
            </div>
                
            <hr class="clearfix w-100 d-md-none pb-3">
                
            <div class="col-md-3 mb-md-0 mb-3">
                <br>
                <b>
                    Follow us:    
                </b>
                <br>
                <ul class="list-unstyled">
                        <li>
                                <a href="#" target="_blank" class="selfPromo_boxItem">
                                    <div class="selfPromo__icon selfPromo__icon--fb"></div>
                                    <div class="selfPromo__linkText"> <img src="facebook.png" alt="Avatar" class="SocialAvatar"> &nbsp; Facebook</div>
                                </a>
                            </li>
                            <p></p>
                            <li>
                                <a href="https://twitter.com/FlashBet5" target="_blank" class="selfPromo__boxItem">
                                    <div class="selfPromo__icon selfPromo__icon--tw"></div>
                                    <div class="selfPromo__linkText"> <img src="twitter.png" alt="Avatar" class="SocialAvatar"> &nbsp; Twitter</div>
                                </a>  
                            </li>
                            <p></p>
                            <li>
                                <a href="https://www.instagram.com/flashbetbetting/?hl=pt" target="_blank" class="selfPromo__boxItem">
                                    <div class="selfPromo__icon selfPromo__icon--in"></div>
                                    <div class="selfPromo__linkText"> <img src="insta.png" alt="Avatar" class="SocialAvatar"> &nbsp; Instagram</div>
                                </a>
                            </li>
                  </ul>
          
                </div>
            
                <div class="col-md-3 mb-md-0 mb-3">
                    <br>
                <b>
                    Contacts:    
                </b>
                    <ul class="list-unstyled">
                        <li>
                            E-mail: flashbetsite@gmail.com
                        </li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
              <a href="https://mdbootstrap.com/education/bootstrap/"> FlashBet.com</a>
            </div>
          </footer>


    </body> 
    <style>
        body{
            background-image:url("back.jpg");
        }

        .sitebanner{
                background-color: white;
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 20%;
        }

        .footer{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 90%;
            background-color:  #343a40;
            color: #9a9da0;
        }
                
        .navbar {
            font-family: Arial, Helvetica, sans-serif;
            max-width: auto;
            margin: auto;
        }

        .ProfileAvatar {
            vertical-align: middle;
            width: 25px;
            height: 25px;
            border-radius: 50%;
        }

        .SocialAvatar {
            vertical-align: middle;
            width: 30px;
            height: 30px;   
        }

        h1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 35px;
            font-weight:bold;
            color: red;
            margin-left: 2%;
        }

        .connection{
            text-align: justify;
            margin-left: 40%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
            font-weight:bold;
            color: black;
        }

        .connection2{
            text-align: justify;
            margin-left: 20%;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
            font-weight:bold;
            color: black;
        }

        .column {
            float: left;
            width: 50%;
        }  

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        
    </style>
</html>