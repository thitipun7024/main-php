<?php
session_start();
include "../include/connect.php";
$name=$_POST['namehospital'];
$address=$_POST['Address'];
$phone=$_POST['Phone'];

$sql="INSERT INTO tb_hospital(name_hospital, address_hospital, phone_hospital) VALUES('$name','$address','$phone')";

$result=mysqli_query($conn,$sql)or die("Error in query: $sql".mysqli_error());

if($result){
	echo "<script>";
    echo "alert(\" บันทึกข้อมูลเรียบร้อย\");"; 
    echo "window.location= 'index.php?&option=hospital';";
    echo "</script>";
}
mysqli_close($conn);
?>