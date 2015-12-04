<html>
<head>
<title>User Logon</title>
</head>
<body>
  <h2>User Login </h2>
echo "The credentials you have entered are not valid. Please re-enter them without spelling errors!";
  <form name="login" method="post" action="login.php">
   Username: <input type="text" name="tryUsername"><br>
   Password: <input type="password" name="tryPassword"><br>
   Remember Me: <input type="checkbox" name="rememberme" value="1"><br>
   <input type="submit" name="submit" value="Login!">
  </form>
</body>
</html>
