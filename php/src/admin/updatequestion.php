<?php
include "../include/connect.php";
$id=$_POST['idques'];
$topic=$_POST['Topic'];
$detail=$_POST['Detail'];

$update ="UPDATE tb_question SET topic='$topic', detail='$detail' WHERE id_ques ='$id'";
$result=mysqli_query($conn, $update);
    if($result){
        echo "<script>";
        echo "alert(\" แก้ไขข้อมูลเรียบร้อย\");"; 
        echo "window.location= 'index.php?&option=webbroad';";
        echo "</script>";
    }
    mysqli_close($conn);
?>