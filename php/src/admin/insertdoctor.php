<?php
session_start();
include "../include/connect.php";
$name=$_POST['namedoctor'];
$detail=$_POST['Detail'];
$phone=$_POST['Phone'];
$idhospital=$_POST['id_hospital'];

$photo_name=$_FILES['filename'] ['name'];
$photo_temp=$_FILES['filename'] ['tmp_name'];

$sql="INSERT INTO tb_doctor(name_doctor, detail_doctor, phone_doctor, photo_doctor, id_hospital) VALUES('$name','$detail','$phone', '', '$idhospital')";

$result=mysqli_query($conn,$sql)or die("Error in query: $sql".mysqli_error());

$sql_id = "SELECT MAX(id_doctor)AS id_doctor FROM tb_doctor";
		$result = mysqli_query($conn, $sql_id);
		$row = mysqli_fetch_array($result);

		if($photo_name!=''){
		$tmp           = explode('.', $photo_name);
		$fileExtension = end($tmp);
		$filename = $row[0] . "." . $fileExtension;
		copy($photo_temp,"../picdoctor/$filename");

		$sql_update = "UPDATE tb_doctor SET photo_doctor='$filename' where id_doctor=$row[0]";
		mysqli_query($conn, $sql_update);
        }

if($result){
	echo "<script>";
    echo "alert(\" บันทึกข้อมูลเรียบร้อย\");"; 
    echo "window.location= 'index.php?&option=doctor';";
    echo "</script>";
}
mysqli_close($conn);
?>