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
               <a class="nav-link" href="Profile.html" >Profile <img src="profile.png" alt="Avatar" class="ProfileAvatar">  </a> 
           </li>
            
                            
                        </ul>
                    </div>
                      
    </nav>

<div class = "row">
    <div class = "column">
        <div class='content'> 
            <?php
            $connection= mysqli_connect("localhost","root","","flashbet");
            $sql="SELECT id, location FROM schedule";
            $results= mysqli_query($connection,$sql);

            if(mysqli_num_rows($results)>0){
                while($row= mysqli_fetch_array($results)){
                    if($row[1] == "Australian Grand Prix")
                        echo "<br>".$row[1]." (15-17 Mar)"."<img src='f1-aus.jpg' width=400 height=200>"."<br>";
                    else if($row[1] == "Bahrain Grand Prix")
                        echo "<br>".$row[1]." (23-31 Mar)"."<img src='f1-bah.jpg' width=400 height=200>"."<br>";
                    else if($row[1] == "Chinese Grand Prix")
                        echo "<br>".$row[1]." (12-14 Apr)"."<img src='f1-chi.jpg' width=400 height=200>"."<br>";
                    else if($row[1] == "Azerbaijan Grand Prix")
                        echo "<br>".$row[1]." (26-28 Apr)"."<img src='f1-aze.jpg' width=400 height=200>"."<br>";
                    else if($row[1] == "Spanish Grand Prix")
                        echo "<br>".$row[1]." (10-12 May)"."<img src='f1-spa.jpg' width=400 height=200>"."<br>";
                    else if($row[1] == "Monaco Grand Prix")
                        echo "<br>".$row[1]." (23-26 May)"."<img src='f1-mon.jpg' width=400 height=200>"."<br>";
                    else if($row[1] == "Canadian Grand Prix")
                        echo "<br>".$row[1]." (07-09 Jun)"."<img src='f1-can.jpg' width=400 height=200>"."<br>";                   
                    }
                }
            ?>
        </div>
    </div>               
    
    <div class = "column">
        <div class='content'> 
            <?php
                $connection= mysqli_connect("localhost","root","","flashbet");
                $sql="SELECT id, location FROM schedule";
                $results= mysqli_query($connection,$sql);

                if(mysqli_num_rows($results)>0){
                    while($row= mysqli_fetch_array($results)){
                        if($row[1] == "French Grand Prix")
                            echo "<br>".$row[1]." (21-23 Jun)"."<img src='f1-fra.jpg' width=400 height=200>"."<br>";
                        else if($row[1] == "Austrian Grand Prix")
                            echo "<br>".$row[1]." (28-30 Jun)"."<img src='f1-aust.jpg' width=400 height=200>"."<br>";
                        else if($row[1] == "British Grand Prix")
                            echo "<br>".$row[1]." (12-14 Jul)"."<img src='f1-bri.jpg' width=400 height=200>"."<br>";
                        else if($row[1] == "German Grand Prix")
                            echo "<br>".$row[1]." (26-28 Jul)"."<img src='f1-ger.jpg' width=400 height=200>"."<br>";
                        else if($row[1] == "Hungarian Grand Prix")
                            echo "<br>".$row[1]." (02-04 Aug)"."<img src='f1-hun.jpg' width=400 height=200>"."<br>";
                        else if($row[1] == "Belgian Grand Prix")
                            echo "<br>".$row[1]." (30-01 Sep)"."<img src='f1-bel.jpg' width=400 height=200>"."<br>";
                        else if($row[1] == "Italian Grand Prix")
                            echo "<br>".$row[1]." (06-08 Set)"."<img src='f1-ita.jpg' width=400 height=200>"."<br>";
                        }
                    }
            ?>
        </div>
    </div>                

<div class = "column">
    <div class='content'> 
        <?php    
        $connection= mysqli_connect("localhost","root","","flashbet");
        $sql="SELECT id, location FROM schedule";
        $results= mysqli_query($connection,$sql);
    
        if(mysqli_num_rows($results)>0){
            while($row= mysqli_fetch_array($results)){
                if($row[1] == "Singapore Grand Prix")
                    echo "<br>".$row[1]." (20-22 Sep)"."<img src='f1-sin.jpg' width=400 height=200>"."<br>";
                else if($row[1] == "Russian Grand Prix")
                    echo "<br>".$row[1]." (27-29 Sep)"."<img src='f1-rus.jpg' width=400 height=200>"."<br>";
                else if($row[1] == "Japanese Grand Prix")
                    echo "<br>".$row[1]." (11-13 Oct)"."<img src='f1-jap.jpg' width=400 height=200>"."<br>";
                else if($row[1] == "Mexican Grand Prix")
                    echo "<br>".$row[1]." (25-27 Oct)"."<img src='f1-mex.jpg' width=400 height=200>"."<br>";
                else if($row[1] == "United States Grand Prix")
                    echo "<br>".$row[1]." (01-03 Nov)"."<img src='f1-eua.jpg' width=400 height=200>"."<br>";
                else if($row[1] == "Brazilian Grand Prix")
                    echo "<br>".$row[1]." (15-17 Nov)"."<img src='f1-bra.jpg' width=400 height=200>"."<br>";
                else if($row[1] == "Abu Dhabi Grand Prix")
                    echo "<br>".$row[1]." (29-01 Dec)"."<img src='f1-abu.jpg' width=400 height=200>"."<br>";
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

            h1{
                text-align: left;
                font-family: "Arial Black", Gadget, sans-serif;
                font-size: 3em;
                font-weight: bold;
                display: block;
                color: red;
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

        .content{
            text-align: center;
            font-family: "Arialc Black", Helvetica, sans-serif;
            font-size: 18px;
            font-weight:bold;
            color: black;
        }

        .column {
            float: left;
            width: 33.3333%;
        }  

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        
    </style>
</html>