<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <link href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto&family=Roboto+Condensed:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
     <style type="text/css">
body{
    font-family: 'Lato', sans-serif;
    font-family: 'Roboto', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
}</style>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>