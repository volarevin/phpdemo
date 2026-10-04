<?php 
include 'pure_php.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP DEMO BSIT NT 3101</title>
	<!-- Added 'defer' so the script waits for the HTML body to load -->
	<script src='external.js' defer></script> 
</head>
<body>
 <!-- sample of internal php -->
 <a href="next_page.php">Go to Next Page</a>
 <h3>Username:
 <u id="displayUser"><?php echo $username; ?></u> <br>
  UserID: 
  <u id="displayID"><?php echo $user_id; ?></u> <br>
  Birtday: 
  <u id="displayBD"><?php echo $birthday; ?></u> <br>
  Sex: 
  <u id="displaySex"><?php echo $sex; ?></u> <br>
  Age: 
  <u id="displayAge"><?php echo $age; ?></u> <br>
</h3> 

 <button type="button" onclick="greetUser()">Greet User</button>
</body>
</html>
