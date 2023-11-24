<?php
include "../include/connect.php";
$id=$_POST['idhospital'];
$name=$_POST['namehospital'];
$address=$_POST['Address'];
$phone=$_POST['Phone'];

$update ="UPDATE tb_hospital SET name_hospital='$name', address_hospital='$address', phone_hospital='$phone' WHERE id_hospital ='$id'";
$result=mysqli_query($conn, $update);
    if($result){
        echo "<script>";
        echo "alert(\" แก้ไขข้อมูลเรียบร้อย\");"; 
        echo "window.location= 'index.php?&option=hospital';";
        echo "</script>";
    }
    mysqli_close($conn);
?>