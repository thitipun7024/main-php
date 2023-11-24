<?php
	include "../include/connect.php";
    $id=$_GET['id'];
	$sqledituser ="SELECT * FROM tb_user WHERE id_user='$id'";
	$resultedituser = mysqli_query($conn,$sqledituser);
    $edit_user=mysqli_fetch_array($resultedituser);    
	?>
<center>
<form name="edituser" action="updateuser.php" method="post" enctype="multipart/form-data">
    <table border="0" width="600">
        <tr>
            <td colspan="2" class="text-info fs-1" align= "center">แก้ไขข้อมูลสมาชิก</td>
        </tr>
        <tr>
            <td>ชื่อผู้ใช้งาน : </td>
            <td><input type="text" name="User" value="<?php echo $edit_user['login_user'];?>"></td>
        </tr>
        <tr>
            <td>ชื่อ-นามสุกล : </td>
            <td><input type="text" name="Name" value="<?php echo $edit_user['name_user'];?>"></td>
        </tr>
        <tr>
            <td>เพศ : </td>
            <td>
                <input type="radio" name="Sex" value="1" <?php if($edit_user['sex_user']=='1'){?> checked="" <?php }?>/>ชาย
                <input type="radio" name="Sex" value="2" <?php if($edit_user['sex_user']=='2'){?> checked="" <?php }?>/>หญิง
            </td>
        </tr>
        <tr>
            <td>ที่อยู่ : </td>
            <td>
                <textarea name="Address" rows="4" cols="50"><?php echo $edit_user['address_user'];?></textarea>
            </td>
        </tr>
        <tr>
            <td>อีเมล์ : </td>
            <td>
            <input type="text" class="form-control" name="Email" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $edit_user['email_user'];?>">
            </td>
        </tr>
        <tr>
            <td>เบอร์โทรศัพท์ : </td>
            <td>
            <input type="text" class="form-control" name="Phone" maxlength="10" pattern="^0([8|9|6])([0-9]{8}$)" value="<?php echo $edit_user['phone_user'];?>">
            </td>
        </tr>
        <tr>
            <td>รูปภาพ : </td>
            <td>
            <img src="../picuser/<?php echo $edit_user['photo_user'];?>" width="80">
            <br><br>
            <input type="hidden" name="hdnOldFile" value="<?php echo $edit_user["photo_user"];?>">
            <input type="file" name="filename">
            </td>
        </tr>
        <tr>
            <td colspan="2" align= "center">
                <input type="hidden" name="iduser" value="<?php echo $edit_user["id_user"];?>">
                <button class="btn btn-primary" type="sumbit" name="btnSubmit">บันทึก</button>
                <button class="btn btn-danger" type="reset" name="btnSubmit" onclick="history.back()">ยกเลิก</button>
            </td>
        </tr>
    </table>
</form>
</center>