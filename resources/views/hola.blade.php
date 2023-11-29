<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/forms" method="POST">
  @csrf

  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>

  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br>

  <label for="edad">Edad:</label><br>
  <input type="text" id="edad" name="edad" value="23"><br><br>
  
  <input type="submit" value="Submit">
  
</form> 

</body>
</html>