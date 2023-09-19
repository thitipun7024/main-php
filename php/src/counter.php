<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=;, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conn.php");
        if(file_exists("view.php")){
            $f = fopen("view.php","r");
            $data = fread($f,5);
            fclose($f);
            $data++;
        }else{
            $data = 0;
        }
            $f = fopen("view.php","w");
            fputs($f,$data);
            fclose($f);
            $data = sprintf("%02d",$data);
            echo $data;

            $sql = "UPDATE counter SET counter_number = '$data'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

    ?>
</body>
</html>