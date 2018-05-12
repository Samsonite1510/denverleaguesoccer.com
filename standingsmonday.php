<!DOCTYPE html>
<html>
<head>


  <title> Samoas Airlines</title>
  <link rel="stylesheet" type="text/css" href="standings.css">
</head>
<style >
table{
  position: absolute;
  top: 8pc;
  left: 2pc;
  border: 2px solid blue;
  background-color: lightblue;
  text-align: left;
}
th{
  border-bottom: 5px solid green;
  text-align: center;
}
th{
  border-bottom: 2px solid blue;
}
td{
  text-align: center;
}
</style>



<body>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="Days.html">Standings</a>
  <div class="dropdown">
    <button class="dropbtn">Flights
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="schedule.php">Schedule a Flight</a>
      <a href="flights.php">View Scheduled Flights</a>
      <a href="update.php">Update Flights</a>
    </div>
  </div>
  <a href="index.php">Logout</a>
</div>





</body>
</html>


<?php

include('conn.php');
$sqlget =  "SELECT * FROM Monday";
$sqldata = mysqli_query($conn, $sqlget) or die('error');
echo "<table>";
echo "<tr><th>Team</th><th>Wins</th><th>Losses</th><th>Ties</th><th>G.S</th><th>G.A</th><th>Coach</th><th>Points</th></tr>";
while($row = mysqli_fetch_array($sqldata)){
  echo "<tr><td>";
  echo $row['Team_Name'];
  echo "</td><td>";
  echo $row['Wins'];
  echo "</td><td>";
  echo $row['Losses'];
  echo "</td><td>";
  echo $row['Ties'];
  echo "</td><td>";
  echo $row['Gs'];
  echo "</td><td>";
  echo $row['Ga'];
  echo "</td><td>";
  echo $row['Coach'];
  echo "</td><td>";
  echo $row['Points'];
  echo "</td></tr>";
}
echo "<table>";




?>
