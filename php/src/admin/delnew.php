<?php
include "../include/connect.php";
$id=$_GET['id'];
$photo="SELECT * FROM tb_new WHERE id_new='$id'";
$resultphoto=mysqli_query($conn, $photo);
$row_photo=mysqli_fetch_array($resultphoto);
@unlink("../picnew/".$row_photo['photo_new']);

$deluser ="DELETE FROM tb_new WHERE id_new='$id'";
$result=mysqli_query($conn, $deluser);

    if($result){
        echo "<script>";
        echo "alert(\" ลบข้อมูลเรียบร้อย\");"; 
        echo "window.location= 'index.php?&option=new';";
        echo "</script>";
    }
    mysqli_close($conn);
?>