<?php
include "../include/connect.php";
$id=$_GET['id'];
$photo="SELECT * FROM tb_user WHERE id_user='$id'";
$resultphoto=mysqli_query($conn, $photo);
$row_photo=mysqli_fetch_array($resultphoto);
@unlink("../picuser/".$row_photo['photo_user']);

$deluser ="DELETE FROM tb_user WHERE id_user='$id'";
$result=mysqli_query($conn, $deluser);

    if($result){
        echo "<script>";
        echo "alert(\" ลบข้อมูลเรียบร้อย\");"; 
        echo "window.location= 'index.php?&option=user';";
        echo "</script>";
    }
    mysqli_close($conn);
?>