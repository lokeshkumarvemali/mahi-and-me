<html>
<head>
  <style>
  h1 {
    text align: left;
    background-color: #34495E;
    color: white;
    margin: 0 px;
    letter-spacing: 2px;
    padding-left: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
     }
  table {
    border: 2px solid #CACFD2;
    font-size: 20px;
    text-align: center;
    }
    table:hover {
      box-shadow: 5px 5px 20px #85C1E9, -5px -5px 20px  #85C1E9;
    }

  </style>
</head>
<body>
<div>
  <h1> College Information</h1>
</div>
<div>
  <form action='index.php' method="post">
  <table align="center">
    <tr><td>GRE</td>
      <td><input type="g">
      </td>
    </tr>
    <tr><td>tofel</td>
      <td><input type="number" name="tf">
      </td>
    </tr>
    <tr><td>ielts</td>
      <td><input type="number" name="ie">
      </td>
    </tr>
  </table>
</form>
</div>
<hr>
<div style="border:1px solid black; height:75vh;overflow-y:scroll;">
  <div style="background-color:blue;height:30vh;">

  </div>
  <div style="background-color:yellow;height:30vh;">

  </div>
  <div style="background-color:pink;height:30vh;">

  </div>
</div>
<div>
<?php
include 'conn.php';
$sql="SELECT * FROM `college name` WHERE `gre score` >=$_POST['g'] AND( `ielts` >=$_POST['ie'] OR `toefl` >=$_POST['tf']);"

?>
</div>
</body>
</html>
