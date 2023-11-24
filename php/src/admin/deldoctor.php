<?php
include "../include/connect.php";
$id=$_GET['id'];
$photo="SELECT * FROM tb_doctor WHERE id_doctor='$id'";
$resultphoto=mysqli_query($conn, $photo);
$row_photo=mysqli_fetch_array($resultphoto);
@unlink("../picdoctor/".$row_photo['photo_doctor']);

$deluser ="DELETE FROM tb_doctor WHERE id_doctor='$id'";
$result=mysqli_query($conn, $deluser);

    if($result){
        echo "<script>";
        echo "alert(\" ลบข้อมูลเรียบร้อย\");"; 
        echo "window.location= 'index.php?&option=doctor';";
        echo "</script>";
    }
    mysqli_close($conn);
?>