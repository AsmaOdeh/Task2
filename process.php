<html>
<body>



<?php

 include "connect.php";
 
 $ID = $_POST ['ID'];
 $title = $_POST ['title'];
 $body = $_POST ['body'];
 $date = $_POST ['date'];
 
 
 $sql = "INSERT INTO blog (ID, title, body, created_at)
VALUES ('$ID', '$title', '$body', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 ?>


</body>
</html>
