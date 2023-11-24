<?php
	include "../include/connect.php";
    $id=$_GET['id'];
	$sqledit ="SELECT * FROM tb_question WHERE id_ques='$id'";
	$resultedit = mysqli_query($conn,$sqledit);
    $edit=mysqli_fetch_array($resultedit);    
	?>
<center>
<form name="editquestion" action="updatequestion.php" method="post" enctype="multipart/form-data">
    <table border="0" width="550">
        <tr>
            <td colspan="2" class="text-info fs-1" align= "center">แก้ไขหัวข้อกระทู้</td>
        </tr>
        <tr>
            <td>หัวข้อกระทู้ : </td>
            <td><input type="text" class="form-control" name="Topic" value="<?php echo $edit['topic'];?>"></td>
        </tr>
        <tr>
            <td>รายละเอียด : </td>
            <td>
                <textarea name="Detail" class="form-control" rows="4" cols="50"><?php echo $edit['detail'];?></textarea>
            </td>
        </tr>
        <tr height="70">
            <td colspan="2" align= "center">
                <input type="hidden" name="idques" value="<?php echo $edit["id_ques"];?>">
                <button class="btn btn-primary" type="sumbit" name="btnSubmit">ตกลง</button>
                <button class="btn btn-danger" type="reset" name="btnSubmit" onclick="history.back()">ยกเลิก</button>
            </td>
        </tr>
    </table>
</form>
</center>