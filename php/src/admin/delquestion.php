<?php
include "../include/connect.php";
$id=$_GET['id'];

$deluser ="DELETE FROM tb_question WHERE id_ques='$id'";
$result=mysqli_query($conn, $deluser);

    if($result){
        echo "<script>";
        echo "alert(\" ลบข้อมูลเรียบร้อย\");"; 
        echo "window.location= 'index.php?&option=webbroad';";
        echo "</script>";
    }
    mysqli_close($conn);
?>