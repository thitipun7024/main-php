<?php
session_start();
include "../include/connect.php";
$user=$_POST['User'];
$password=$_POST['Password1'];
$name=$_POST['Name'];
$sex=$_POST['Sex'];
$address=$_POST['Address'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$role=$_POST['Role_user'];

$photo_name=$_FILES['filename'] ['name'];
$photo_temp=$_FILES['filename'] ['tmp_name'];

$sql="INSERT INTO tb_user(login_user, pass_user, role_user, name_user, sex_user, address_user, email_user, phone_user, photo_user, status_user) VALUES('$user', '$password', '$role','$name','$sex','$address','$email','$phone', '', '0')";

$result=mysqli_query($conn,$sql)or die("Error in query: $sql".mysqli_error());

$sql_id = "SELECT MAX(id_user)AS id_user FROM tb_user";
		$result = mysqli_query($conn, $sql_id);
		$row = mysqli_fetch_array($result);

		if($photo_name!=''){
		$tmp           = explode('.', $photo_name);
		$fileExtension = end($tmp);
		$filename = $row[0] . "." . $fileExtension;
		copy($photo_temp,"../picuser/$filename");

		$sql_update = "UPDATE tb_user SET photo_user='$filename' where id_user=$row[0]";
		mysqli_query($conn, $sql_update);
        }

if($result){
	echo "<script>";
    echo "alert(\" บันทึกข้อมูลเรียบร้อย\");"; 
    echo "window.location= 'index.php?&option=user';";
    echo "</script>";
}
mysqli_close($conn);
?>