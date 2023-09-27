<?php
    include 'authentica.php';
?>
<!DOCTYPE html>
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
               <a class="nav-link" href="Profile.php" > Profile <img src="profile.png" alt="Avatar" class="ProfileAvatar">  </a> 
           </li>
        </ul>
    </div>
    </nav>
    
    <div class="row">
        <div class="column">
            <h2> <b>Previous Race</b> </h2><br>
                <table id="Races"> 
                <tr>
                 <h3>Australian Grand Prix</h3><p style = "margin-left: 0px;"><img src="f1-aus.jpg" class="RaceImage"> </th></p>
                </tr>
                </table>
                <table id="TopRacers">
                <th> <tr>
                    <th> <img src="Hamilton.jpg" class="RacerImage"> <br>&nbsp&nbsp 1º Place</th>
                    <th> <img src="Bottas.jpg" class="RacerImage"> <br>&nbsp&nbsp 2º Place</th>
                    <th> <img src="Vettel.jpg" class="RacerImage"> <br>&nbsp&nbsp 3º Place </th>
                </tr>
                </table>
        </div>

        <div class="column">
            <div class='content'>
                <h2>Bahrain GP Bets</h2>
                <br>
                    <form name="myForm" onsubmit="return validateForm()" method="POST">
                        <div class="container">
                        <p>
                        <label for="FirstPlace">First Place:</label>
                            <br>
                            <input type="text" name ="firstplace" id="FirstPlace"> 
                            </p>
                        <p>
                        <label for="SecondPlace">Second Place:</b>
                            <br>
                            <input type="text" name ="secondplace" id="SecondPlace">
                            </p>
                        <p>
                            <label for="ThirdPlace">Third Place:</b>
                            <br>
                            <input type="text" name ="thirdplace" id="ThirdPlace">
                            </p>
                        <p>
                            <input type ="submit" value="Submit">
                            </p>
                        </div>
                    </form>
            </div>
        </div>
    </div>      



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
        .sitebanner{
                background-color: white;
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 20%;
            }

            body{
                background-image:url("back.jpg");
            }

            .footer{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 100%;
                background-color:  #343a40;
                color: #9a9da0;
            }
                
            .navbar {
                font-family: Arial, Helvetica, sans-serif;
                max-width: auto;
                margin: auto;
            }

            h2{
                text-align: center;
                font-family: Arial Black, Helvetica, sans-serif;
                font-size: 35px;
                font-weight:bold;
                color: black;
                display: block;
                background-color: rgb(252, 97, 97);
                height: 45px;
                width: 85%;
                margin-left: auto;
                margin-right: auto;
            }

            h3{
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 20px;
                font-weight:bold;
                color: black;
                display: block;
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

        .container {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 30%;  
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

        .RaceImage {
            vertical-align: middle;
            width: 400px;
            height: 200px;
            border-radius: 5%;
            margin-left: 150px;
            
        }

        .RacerImage {
            vertical-align: middle;
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        #Races {
            font-family: Arial, Helvetica, sans-serif;
            padding: 8px;
            border-collapse: collapse;
            width: 85%;
            margin-left: 50px;
        }

        #Races td, #Races th{
            border: 1px solid black;
            padding: 3px;
        }

        #TopRacers {
            font-family: Arial, Helvetica, sans-serif;
            padding: 8px;
            border-collapse: collapse;
            width: 85%;
            margin-left: 100px;
        }

        #TopRacers td, #TopRacers th{
            border: white;
            padding: 3px; 
        }
    

    </style>
        <script>
            function validateForm() {
            var firstplace = document.forms["myForm"]["firstplace"];
            var secondplace = document.forms["myForm"]["secondplace"];
            var thirdplace = document.forms["myForm"]["thirdplace"];

        if ((firstplace.value !== "Lewis Hamilton") && (firstplace.value !== "Valtteri Bottas") && (firstplace.value !== "Sebastian Vettel") && (firstplace.value !== "Max Verstappen") && (firstplace.value !== "Charles Leclerc") && (firstplace.value !== "Pierre Gasly") && (firstplace.value !== "Carlos Sainz") && (firstplace.value !== "Daniel Ricciardo") && (firstplace.value !== "Kimi Raikkonen") && (firstplace.value !== "Kevin Magnussen") && (firstplace.value !== "Nico Hulkenberg") && (firstplace.value !== "Lando Norris") && (firstplace.value !== "Sergio Pérez") && (firstplace.value !== "Daniil Kvyat") && (firstplace.value !== "Alexander Albon") && (firstplace.value !== "Lance Stroll") && (firstplace.value !== "Romain Grosjean") && (firstplace.value !== "Antonio Giovinazzi") && (firstplace.value !== "George Russell") && (firstplace.value !== "Robert Kubica")) {
       alert("Incorrect First Place racer name");
       firstplace.focus();
       return false;
           }

           if ((secondplace.value !== "Lewis Hamilton") && (secondplace.value !== "Valtteri Bottas") && (secondplace.value !== "Sebastian Vettel") && (secondplace.value !== "Max Verstappen") && (secondplace.value !== "Charles Leclerc") && (secondplace.value !== "Pierre Gasly") && (secondplace.value !== "Carlos Sainz") && (secondplace.value !== "Daniel Ricciardo") && (secondplace.value !== "Kimi Raikkonen") && (secondplace.value !== "Kevin Magnussen") && (secondplace.value !=="Nico Hulkenberg") && (secondplace.value !== "Lando Norris") && (secondplace.value !== "Sergio Pérez") && (secondplace.value !== "Daniil Kvyat") && (secondplace.value !== "Alexander Albon") && (secondplace.value !== "Lance Stroll") && (secondplace.value !== "Romain Grosjean") && (secondplace.value !== "Antonio Giovinazzi") && (secondplace.value !== "George Russell") && (secondplace.value !== "Robert Kubica")) {
       alert("Incorrect Second Place racer name");
       secondplace.focus();
       return false;
           }
           if ((thirdplace.value !== "Lewis Hamilton") && (thirdplace.value !== "Valtteri Bottas") && (thirdplace.value !== "Sebastian Vettel") && (thirdplace.value !== "Max Verstappen") && (thirdplace.value !== "Charles Leclerc") && (thirdplace.value !== "Pierre Gasly") && (thirdplace.value !== "Carlos Sainz") && (thirdplace.value !== "Daniel Ricciardo") && (thirdplace.value !== "Kimi Raikkonen") && (thirdplace.value !== "Kevin Magnussen") && (thirdplace.value !== "Nico Hulkenberg") && (thirdplace.value !== "Lando Norris") && (thirdplace.value !== "Sergio Pérez") && (thirdplace.value !== "Daniil Kvyat") && (thirdplace.value !== "Alexander Albon") && (thirdplace.value !== "Lance Stroll") && (thirdplace.value !== "Romain Grosjean") && (thirdplace.value !== "Antonio Giovinazzi") && (thirdplace.value !== "George Russell") && (thirdplace.value !== "Robert Kubica")) {
       alert("Incorrect Third Place racer name");
       thirdname.focus();
       return false;
           }
            }
        </script>
</html>