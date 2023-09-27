<head>
  <title> FlashBet </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <div class= "sitebanner" style="margin-bottom:0">
        <img src="FlashBet Logo.png">
	</div>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form action="profile.php" method="post">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" value="login">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
