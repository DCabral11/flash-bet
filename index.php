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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://malsup.github.com/jquery.cycle.all.js"></script>
        
        <div class= "sitebanner" style="margin-bottom:0">
            <img src="FlashBet Logo.png">
        </div>

        <style>
    
    .navbar {
        font-family: Arial, Helvetica, sans-serif;
        max-width: auto;
        margin: auto;
    }

    .sitebanner{
        background-color: white;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 20%;
    }


    .active{
        background-color: #717171;
    }
    
    .ProfileAvatar {
            vertical-align: middle;
            width: 25px;
            height: 25px;
            border-radius: 50%;
    }

    .TVAvatar {
        vertical-align: middle;
        width: 30px;
        height: 30px;
        border-radius: 50%;
    }

    .RacerImage {
        vertical-align: middle;
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }
    .RaceImage {
        vertical-align: middle;
        width: 400px;
        height: 200px;
        border-radius: 5%;
    }

    .SocialAvatar {
        vertical-align: middle;
        width: 30px;
        height: 30px;   
    }

    h1{
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
        display: block;
        color: #000000;
        background-color: rgb(252, 97, 97);
        height: 37px;
        width: 85%;
        margin-left: auto;
        margin-right: auto;
    }

    #TopRacers {
        font-family: Arial, Helvetica, sans-serif;
        padding: 8px;
        border-collapse: collapse;
        width: 85%;
    }

    #TopRacers td, #TopRacers th{
        border: 1px solid black;
        padding: 3px; 
    }

    h2 {
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
        display: block;
        color: #000000;
        background-color: rgb(252, 97, 97);
        height: 37px;
        width: 85%;
        margin-left: auto;
        margin-right: auto;
    }

    #Races {
        
        font-family: Arial, Helvetica, sans-serif;
        padding: 8px;
        border-collapse: collapse;
        width: 85%;
    }

    #Races td, #Races th{
        border: 1px solid black;
        padding: 3px;
    }
    
    table, th, td {
        border: 1px solid black;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        color: rgb(78, 78, 78);
        font-size: 25px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .footer{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 90%;
            background-color:  #343a40;
            color: #9a9da0;
        }
 
    .ciclo{   
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    
    body{
        background-image:url("back.jpg");

    }
</style>
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
                    <a class="nav-link" href="Profile.php" >Profile <img src="profile.png" alt="Avatar" class="ProfileAvatar">  </a> 
                </li>

                
            </ul>
        </div>
          
    </nav>
<br>
            <a href="Schedule.php">    
        <div class="ciclo"> 
                <div>
                    <p style="text-align:center;"><img class="mySlides" src="f1.png" width="80%" height="170"> </p>
                </div>        
        </div>
        </a>


    <br>
    <br>
    <br>

    <a href="Standings.php">
    <h1> <b>TOP RACERS </b> </h1>
    <table id="TopRacers">
      
        <tr>
            <th> <img src="Hamilton.jpg" class="RacerImage"> <br> 1º Place</th>
            <th> <img src="Bottas.jpg" class="RacerImage"> <br> 2º Place</th>
            <th> <img src="Vettel.jpg" class="RacerImage"> <br> 3º Place </th>
        
        </tr>

    </table>
</a>
    <br>
    
    <a href="Bets.php"> 
    <h2> <b>Races</b> </h2>
    <table id="Races">
            
            <tr>
             <th>Previous Race</th> 
            <th>Next Race</th>
            </tr>
            <tr>
                <th> <img src="f1-aus.jpg" class="RaceImage"> <br> Australian Grand Prix</th> 
                <th> <img src="f1-bah.jpg" class="RaceImage"> <br> Bahrain Grand Prix</th>
            </tr>

        </table>
    </a>

    <br>
    <br>
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