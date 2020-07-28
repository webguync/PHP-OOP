<!DOCTYPE html>
<html lang="en">

<head>
  <style>
  .NBA-Info{
    width:100%;
    font-family:Arial, helvetica, sans-serif;
  }

  .NBA-Info table{
    width:800px;
    color:#ffffff;
    
  }

  .NBA-Info th{
    background-color:#0e4d79;
    padding:10px 10px 10px 15px;
    font-size:20px;
    text-align:left;
  }

  .NBA-Info td.first{
    width:50%;
    padding:20px;
    background-color:#969477;
    text-align:center;
  }
  
  .NBA-Info td.second{
    width:50%;
    padding:20px;
    background-color:#686650;
    text-align:center;
  }

 </style>
  
</head>
<body>

<?php
class NBATeam {
  var $teamName;
  var $starPlayer;
  var $championships;

  function __construct($teamName, $starPlayer, $championships){
    $this->teamName = $teamName;
    $this->starPlayer = $starPlayer;
    $this->championships = $championships;
  }
}
  $NBATeam1 = new NBATeam('Golden State Warriors','Stef Curry',6);
  $NBATeam2 = new NBATeam('LA Lakers','LeBron James',16);
  echo "<div class='NBA-Info'>";
  echo "<table>";
  echo "<tr><th colspan='2'>Team Name</th></tr>";
  echo "<tr><td class='first'>".$NBATeam1->teamName."</td><td class='second'>".$NBATeam2->teamName."</td></tr>";
  echo "<tr><th colspan='2'>Star Player</th></tr>";
  echo "<tr><td class='first'>".$NBATeam1->starPlayer."</td><td class='second'>".$NBATeam2->starPlayer."</td></tr>";
  echo "<tr><th colspan='2'>Championships</th></tr>";
  echo "<tr><td class='first'>".$NBATeam1->championships."</td><td class='second'>".$NBATeam2->championships."</td></tr>";
  echo "</table>";
  echo "</div>";
?>
</body>
</html>

