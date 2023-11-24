<?php
	include "../include/connect.php";
    $id=$_GET['id'];
	$sqledit ="SELECT * FROM tb_doctor WHERE id_doctor='$id'";
	$resultedit = mysqli_query($conn,$sqledit);
    $edit=mysqli_fetch_array($resultedit);    
	?>
<center>
<form name="editdoctor" action="updatedoctor.php" method="post" enctype="multipart/form-data">
    <table border="0" width="600">
        <tr>
            <td colspan="2" class="text-info fs-1" align= "center">แก้ไขข้อมูลหมอ</td>
        </tr>
        <tr>
            <td>ชื่อ-นามสุกล : </td>
            <td><input type="text" name="Name" value="<?php echo $edit['name_doctor'];?>"></td>
        </tr>
        <tr>
            <td>รายละเอียด : </td>
            <td>
                <textarea name="Detail" rows="4" cols="50"><?php echo $edit['detail_doctor'];?></textarea>
            </td>
        </tr>
        <tr>
            <td>เบอร์โทรศัพท์ : </td>
            <td>
            <input type="text" class="form-control" name="Phone" maxlength="10" pattern="^0([8|9|6])([0-9]{8}$)" value="<?php echo $edit['phone_doctor'];?>">
            </td>
        </tr>
        <tr>
            <td>รูปภาพ : </td>
            <td>
            <img src="../picdoctor/<?php echo $edit['photo_doctor'];?>" width="80">
            <br><br>
            <input type="hidden" name="hdnOldFile" value="<?php echo $edit["photo_doctor"];?>">
            <input type="file" name="filename">
            </td>
        </tr>
        <tr>
            <td colspan="2" align= "center">
                <input type="hidden" name="iddoctor" value="<?php echo $edit["id_doctor"];?>">
                <button class="btn btn-primary" type="sumbit" name="btnSubmit">บันทึก</button>
                <button class="btn btn-danger" type="reset" name="btnSubmit" onclick="history.back()">ยกเลิก</button>
            </td>
        </tr>
    </table>
</form>
</center>