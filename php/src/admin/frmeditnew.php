<?php
	include "../include/connect.php";
    $id=$_GET['id'];
	$sqledit ="SELECT * FROM tb_new WHERE id_new='$id'";
	$resultedit = mysqli_query($conn,$sqledit);
    $edit=mysqli_fetch_array($resultedit);    
	?>
<center>
<form name="editnew" action="updatenew.php" method="post" enctype="multipart/form-data">
    <table border="0" width="600">
        <tr>
            <td colspan="2" class="text-info fs-1" align= "center">แก้ไขข้อมูลข่าว</td>
        </tr>
        <tr>
            <td>ชื่อ-นามสุกล : </td>
            <td><input type="text" name="Title" value="<?php echo $edit['title'];?>"></td>
        </tr>
        <tr>
            <td>รายละเอียด : </td>
            <td>
                <textarea name="Detail" rows="4" cols="50"><?php echo $edit['txtMessage'];?></textarea>
            </td>
        </tr>
        <tr>
            <td>รูปภาพ : </td>
            <td>
            <img src="../picnew/<?php echo $edit['photo_new'];?>" width="80">
            <br><br>
            <input type="hidden" name="hdnOldFile" value="<?php echo $edit["photo_new"];?>">
            <input type="file" name="filename">
            </td>
        </tr>
        <tr>
            <td colspan="2" align= "center">
                <input type="hidden" name="idnew" value="<?php echo $edit["id_new"];?>">
                <button class="btn btn-primary" type="sumbit" name="btnSubmit">บันทึก</button>
                <button class="btn btn-danger" type="reset" name="btnSubmit" onclick="history.back()">ยกเลิก</button>
            </td>
        </tr>
    </table>
</form>
</center>