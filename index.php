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
      <td><input type="number" name='g'>
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
    <tr>
      <td><input type='submit'>
      </td>
    </tr>
  </table>
</form>
</div>
<hr>
<div style="border:1px solid black; height:70vh;overflow-y:scroll;">
  <div style="background-color:lightblue;height:30vh;">
    <?php
    include 'conn.php';
    $gre=(isset($_POST['g']) ?$_POST['g'] : 360 );
    $toefl=(isset($_POST['tf']) ?$_POST['tf'] : 120 );
    $ielts=(isset($_POST['ie']) ?$_POST['ie'] : 9 );
    $sql="SELECT * FROM `college name` WHERE (`gre score`>=$gre AND `ielts`>=$ielts) OR (`gre score`>=$gre AND `toefl`>=$toefl)";
    $result = $conn->query($sql);
    ?>
<table>
<tr>
<th>serial no.</th>
<th>college name</th>
<th>gre score</th>
<th>ielts</th>
<th>toefl</th>
</tr>
<?php
 if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['serial no.']."</td><td>".$row['college name']."</td><td>". $row['gre score']."</td><td>".$row['ielts']."</td><td>".$row['toefl']."</td></tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
</table>
</div>
</body>
</html>
