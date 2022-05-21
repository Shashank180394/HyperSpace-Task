<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/login_style.css" rel="stylesheet">
</head>
<body>



<form action="loginsubmit" method="POST">
@csrf
  <div class="imgcontainer">
    <img src="avatar.png"  alt="Avatar" class="avatar">
  </div>
<br><br><br><br>
   <div class="container">
   
    <input type="text" placeholder="Enter Email" name="email" required>
<br>
    
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" style="background-color:#201a29;">Login</button>
   
  </div>

 
</form>

</body>
</html>
