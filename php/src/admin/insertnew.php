<?php
session_start();
include "../include/connect.php";
$title=$_POST['title'];
$detail=$_POST['Detail'];
$datetime=date('d-m-y h:i:s');

$photo_name=$_FILES['filename'] ['name'];
$photo_temp=$_FILES['filename'] ['tmp_name'];

$sql="INSERT INTO tb_new(title, txtMessage, photo_new, name_user, datesave) VALUES('$title', '$detail', '', '".$_SESSION["Username"]."','$datetime')";

$result=mysqli_query($conn,$sql)or die("Error in query: $sql".mysqli_error());

$sql_id = "SELECT MAX(id_new)AS id_new FROM tb_new";
		$result = mysqli_query($conn, $sql_id);
		$row = mysqli_fetch_array($result);

		if($photo_name!=''){
		$tmp           = explode('.', $photo_name);
		$fileExtension = end($tmp);
		$filename = $row[0] . "." . $fileExtension;
		copy($photo_temp,"../picnew/$filename");

		$sql_update = "UPDATE tb_new SET photo_new='$filename' where id_new=$row[0]";
		mysqli_query($conn, $sql_update);
        }

if($result){
	echo "<script>";
    echo "alert(\" บันทึกข้อมูลเรียบร้อย\");"; 
    echo "window.location= 'index.php?&option=new';";
    echo "</script>";
}
mysqli_close($conn);
?>