<html>
<head>
</head>

<body>
   //initialize connection
<?php
   include "connect.php";
   
 
  $result= $conn->query( "SELECT * FROM blog");
  
  if(!$result){
  die (mysqli_error());
  } else {
  while($row = mysqli_fetch_array($result)){
  echo $row['title']."____".$row['body']."____".$row['created_at']."<br>";
  }
  } 
   
?>
</body>

</html>
