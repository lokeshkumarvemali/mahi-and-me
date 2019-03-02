<?php $dbhost='localhost';
  $dbuser='root';
  $dbpass='';
  $mydb='college details';

  $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$mydb);
  if(! $conn )  {
    echo('could not connect:'. mysql_error());
  }
  echo 'connected successfully';
  // mysqli_close($conn);
?>
