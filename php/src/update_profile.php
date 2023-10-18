<?php
session_start();
include("conn.php");

$id = $_POST['id'];
$user = $_SESSION['username'];
$pass = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$update_date = date('Y-m-d H:i:s');

$tmp = $_FILES['img']['tmp_name'];
$img = $_FILES['img']['name'];

// $extArray = explode('.',$img);
// $ext = strtolower(end($extArray));

// $nameimg = $user.".".$ext;
// $location = "image2/";
// move_uploaded_file($tmp,$location.$nameimg);

if($img != null){
    $sql1 = "SELECT image FROM register WHERE id = $id";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($result1);
    $file = $row1['image'];
    if(mysqli_num_rows($result1) != 0){
        $delete = "image2/$file";
        @unlink($delete);
    }
    $extArray = explode('.',$img);
    $ext = strtolower(end($extArray));

    $nameimg = $user."-".$update_date.".".$ext;
    $location = "image2/";
    move_uploaded_file($tmp,$location.$nameimg);

    $sql2 = "UPDATE register SET image = '$nameimg' WHERE id = '$id'";
    $result2 = mysqli_query($conn, $sql2);
}
    $sql = "UPDATE register SET password='$pass', firstname='$firstname',lastname='$lastname',email='$email', update_date='$update_date' WHERE id = $id";
    $result2 = mysqli_query($conn, $sql);

    echo "<script>alert('แก้ไขสำเร็จ');window.location.href = 'profile.php';</script>";
?>