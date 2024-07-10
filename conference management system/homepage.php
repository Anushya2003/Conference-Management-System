<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div class="profile-container">
    <div class="profile-card">
      <img src="participant.jpg" alt="image1" class="profile-icon" />
      <div class="profile-name">PARTICIPANT</div>
     
      <a href="Regindex.php" class="button">Click</a>
    </div>
    <div class="profile-card">
      <img src="organizer.jpg" alt="image2" class="profile-icon" />
      <div class="profile-name">ORGANIZER</div>
      
      <a href="organizerindex.php" class="button">Click</a>
    </div>
    
  </div>
</body>
</html>