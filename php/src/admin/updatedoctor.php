<?php
include "../include/connect.php";
$id=$_POST['iddoctor'];
$name=$_POST['Name'];
$detail=$_POST['Detail'];
$phone=$_POST['Phone'];

$name_photo=$_POST["hdnOldFile"];
$photo_name=$_FILES['filename'] ['name'];
$photo_temp=$_FILES['filename'] ['tmp_name'];

$update ="UPDATE tb_doctor SET name_doctor='$name', detail_doctor='$detail', phone_doctor='$phone' WHERE id_doctor ='$id'";
$result=mysqli_query($conn, $update);
if($photo_name != "")
	{
        //*** Delete Old File ***//			
			@unlink("../picdoctor/".$name_photo);
		if(move_uploaded_file($photo_temp,"../picdoctor/$name_photo")){
			//*** Update New File ***//
			$updatephoto = "UPDATE tb_doctor SET photo_doctor = '$name_photo' WHERE id_doctor = '$id' ";
			mysqli_query($conn,$updatephoto);		
		}
	}
    if($result){
        echo "<script>";
        echo "alert(\" แก้ไขข้อมูลเรียบร้อย\");"; 
        echo "window.location= 'index.php?&option=doctor';";
        echo "</script>";
    }
    mysqli_close($conn);
?>