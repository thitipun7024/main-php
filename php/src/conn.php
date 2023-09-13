<?php
    $host = "db";
    $user = "MYSQL_USER";
    $pass = "MYSQL_PASSWORD";
    $dbname = "mphp";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    mysqli_set_charset($conn, "SET  NAME UTF8");
    date_default_timezone_set("Asia/Bangkok");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

   ?>