<?php $dbhost='localhost';
  $dbuser='root';
  $dbpass='';
  $conn = mysqli_connect($dbhost,$dbuser,$dbpass);
  if(! $conn )  {
    echo('could not connect:'. mysql_error());
  }
  echo 'connected successfully';
  mysqli_close($conn);
?>
