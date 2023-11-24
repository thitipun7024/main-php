<?php
include "../include/connect.php";
$id=$_POST['iduser'];
$name=$_POST['Name'];
$sex=$_POST['Sex'];
$address=$_POST['Address'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];

$name_photo=$_POST["hdnOldFile"];
$photo_name=$_FILES['filename'] ['name'];
$photo_temp=$_FILES['filename'] ['tmp_name'];

$updateuser ="UPDATE tb_user SET name_user='$name', sex_user='$sex', address_user='$address', email_user='$email', phone_user='$phone' WHERE id_user ='$id'";
$result=mysqli_query($conn, $updateuser);
if($photo_name != "")
	{
        //*** Delete Old File ***//			
			@unlink("../picuser/".$name_photo);
		if(move_uploaded_file($photo_temp,"../picuser/$name_photo"))
		{
			//*** Update New File ***//
			$updatephoto = "UPDATE tb_user SET photo_user = '$name_photo' WHERE id_user = '$id' ";
			mysqli_query($conn,$updatephoto);		
		}
	}
    if($result){
        echo "<script>";
        echo "alert(\" แก้ไขข้อมูลเรียบร้อย\");"; 
        echo "window.location= 'index.php?&option=user';";
        echo "</script>";
    }
    mysqli_close($conn);
?>