<?php 
    include 'authentica.php'; 

    if ($_SESSION['username']) { 
        echo "Utilizador: " . $_SESSION['username'];
        $sql = "SELECT * FROM users WHERE id = ".$_SESSION['id'];
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        $funds = $row['funds'];
    ?>
    <a href="?logout=1">logout</a>
    <? } 
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
                    <a class="nav-link" href="Standings.php"> Standings </a>
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
          
        </div>
          
    </nav>

    <br>
    <br>

    <div class="profileMenu" method="post">
        <p class="profileTitle"> <?php echo "Welcome ".$_SESSION['username'] ?> </p>
        <p class="yourFunds"> <?php echo "Your funds ".$funds ?> </p>
        <p> <?php echo "Add funds " ?> </p>
        <form action="addFunds.php">
            <input type="radio" name="onehundred" checked> 100 points </input>
            <input type="radio" name="fivehundred"> 500 points </input>
            <input type="radio" name="thousand"> 1000 points </input>
            <br>
            <input type ="submit" value="Submit" name="addFunds">
        </form> 
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

        .profileMenu{
            text-align: center;
        }

        .profileTitle{
            color: red;
            font-size: 30px;
        }        
</style>

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
</html>