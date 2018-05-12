<!DOCTYPE html>
<html>
<head>


  <title> Samoas Airlines</title>
  <link rel="stylesheet" type="text/css" href="home.css">
</head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;

}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>



<body>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="schedule.php">Schedules</a>

  <div class="dropdown">
    <button class="dropbtn">Team Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Rosters.php">Rosters</a>
      <a href="Tuesday.php">Contact Information</a>

    </div>
  </div>

</div>
<table>
  <tr>
    <th>Home Team</th>
    <th>Away Team</th>
    <th>Date/Time</th>
    <th>Location</th>
    <th>Positions(H/A)</th>

  </tr>
  <tr>
    <td>Real Madrid</td>
    <td>Barcelona</td>
    <td>May7th @ 5:30pm</td>
    <td>Lincoln Highschool field 1</td>
    <td>1st/2nd</td>
  </tr>
  <tr>
    <td>Sevilla</td>
    <td>Barcelona</td>
    <td>May7th @ 6:30pm</td>
    <td>Lincoln Highschool field 4</td>
    <td>6th/2nd</td>
  </tr>
  <tr>
    <td>Real Madrid</td>
    <td>Atletico Madrid</td>
    <td>May7th @ 9:30pm</td>
    <td>Lincoln Highschool field 2</td>
    <td>1st/4th</td>
  </tr>


</table>






</body>
</html>
