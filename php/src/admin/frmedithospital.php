<?php
	include "../include/connect.php";
    $id=$_GET['id'];
	$sqledit ="SELECT * FROM tb_hospital WHERE id_hospital='$id'";
	$resultedit = mysqli_query($conn,$sqledit);
    $rowedit=mysqli_fetch_array($resultedit);    
	?>
<center>
<form name="hospital" action="updatehospital.php" method="post" enctype="multipart/form-data">
    <table border="0" width="550">
        <tr>
            <td colspan="2" class="text-info fs-1" align= "center">แก้ไขข้อมูลโรงพยาบาล</td>
        </tr>
        <tr>
            <td>ชื่อโรงพยาบาล : </td>
            <td><input type="text" class="form-control" name="namehospital" value="<?php echo $rowedit['name_hospital'];?>"></td>
        </tr>
        <tr>
            <td>ที่อยู่ : </td>
            <td>
                <textarea name="Address" class="form-control" rows="4" cols="50"><?php echo $rowedit['address_hospital'];?></textarea>
            </td>
        </tr>
        <tr>
            <td>เบอร์โทรศัพท์ : </td>
            <td>
            <input type="text" class="form-control" name="Phone" maxlength="10" pattern="^0([8|9|6])([0-9]{8}$)" value="<?php echo $rowedit['phone_hospital'];?>">
            </td>
        </tr>
        <tr height="70">
            <td colspan="2" align= "center">
                <input type="hidden" name="idhospital" value="<?php echo $rowedit["id_hospital"];?>">
                <button class="btn btn-primary" type="sumbit" name="btnSubmit">บันทึก</button>
                <button class="btn btn-danger" type="reset" name="btnSubmit" onclick="history.back()">ยกเลิก</button>
            </td>
        </tr>
    </table>
</form>
</center>