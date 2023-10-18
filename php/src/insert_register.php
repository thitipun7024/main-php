<?php
include("conn.php");
$user = $_POST['username'];
$pass = $_POST['password'];
$role = "1";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$tmp = $_FILES['img']['tmp_name'];
$img = $_FILES['img']['name'];

$extArray = explode('.',$img);
$ext = strtolower(end($extArray));

$nameimg = $user.".".$ext;
$location = "image2/";
move_uploaded_file($tmp,$location.$nameimg);
//echo "<img src='/image/button-add.png'>";

//$date = getdate();

$sql2 = "SELECT username FROM register WHERE username = '$user'";
$result2 = mysqli_query($conn, $sql2);
$num = mysqli_num_rows($result2);
if($num > 0){
    echo "<script>";
    echo "alert(\"user ซ้ำ กรุณาลองใหม่อีกครั้ง \");";
    echo "window.history.back()";
    echo "</script>";
}else{
    $sql3 = "INSERT INTO register VALUES (null,'$user','$pass','$role','$firstname','$lastname','$email','$nameimg', NOW(), null)";
    $result3 = mysqli_query($conn, $sql3);
    $sql4 = "INSERT INTO login VALUES (null,'$user','$pass','$role')"; 
    $result4 = mysqli_query($conn, $sql4);
    echo "<script>";
    echo "alert(\"register success\");";
    echo "window.location.href='login.php'";
    echo "</script>";
}
mysqli_close($conn);
?>