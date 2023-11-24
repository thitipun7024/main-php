<?php
include "../include/connect.php";
$id=$_POST['idnew'];
$title=$_POST['Title'];
$detail=$_POST['Detail'];

$name_photo=$_POST["hdnOldFile"];
$photo_name=$_FILES['filename'] ['name'];
$photo_temp=$_FILES['filename'] ['tmp_name'];

$update ="UPDATE tb_new SET title='$title', txtMessage='$detail' WHERE id_new ='$id'";
$result=mysqli_query($conn, $update);
if($photo_name != "")
	{
        //*** Delete Old File ***//			
			@unlink("../picnew/".$name_photo);
		if(move_uploaded_file($photo_temp,"../picdnew/$name_photo"))
		{
			//*** Update New File ***//
			$updatephoto = "UPDATE tb_new SET photo_new = '$name_photo' WHERE id_new = '$id' ";
			mysqli_query($conn,$updatephoto);		
		}
	}
    if($result){
        echo "<script>";
        echo "alert(\" แก้ไขข้อมูลเรียบร้อย\");"; 
        echo "window.location= 'index.php?&option=new';";
        echo "</script>";
    }
    mysqli_close($conn);
?>