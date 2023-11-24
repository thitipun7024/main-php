<?php
include "../include/connect.php";
$id=$_GET['id'];

$deluser ="DELETE FROM tb_hospital WHERE id_hospital='$id'";
$result=mysqli_query($conn, $deluser);

    if($result){
        echo "<script>";
        echo "alert(\" ลบข้อมูลเรียบร้อย\");"; 
        echo "window.location= 'index.php?&option=hospital';";
        echo "</script>";
    }
    mysqli_close($conn);
?>