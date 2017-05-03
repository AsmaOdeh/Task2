<html>
<head>
</head>

<body>
   //initialize connection
<?php
   

   $conn = mysqli_connect("localhost", "root", "","task1db");
 
   
 
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
