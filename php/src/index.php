<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include("conn.php"); // Assuming "conn.php" contains your database connection settings.
    
    $result = mysqli_query($conn, "SELECT * FROM login");
    $row = mysqli_fetch_assoc($result);
    echo $row["username"];   

    mysqli_close($conn); // Close the database connection when done.
?>

</body>
</html>