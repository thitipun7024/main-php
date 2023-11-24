<?php
session_start();
include "../include/connect.php";
$topic=$_POST['Topic'];
$detail=$_POST['Detail'];
$datetime=date('d-m-y h:i:s');

$sql="INSERT INTO tb_question(topic, detail, name_ques, datetime_ques, view, reply, id_user) VALUES('$topic','$detail','".$_SESSION["Username"]."','$datetime','','','".$_SESSION["ID"]."')";

$result=mysqli_query($conn,$sql)or die("Error in query: $sql".mysqli_error());

if($result){
	echo "<script>";
    echo "alert(\" บันทึกข้อมูลเรียบร้อย\");"; 
    echo "window.location= 'index.php?&option=webbroad';";
    echo "</script>";
}
mysqli_close($conn);
?>