<center>
<form name="question" action="insertquestion.php" method="post" enctype="multipart/form-data">
    <table border="0" width="550">
        <tr>
            <td colspan="2" class="text-info fs-1" align= "center">ตั้งกระทู้</td>
        </tr>
        <tr>
            <td>หัวข้อกระทู้ : </td>
            <td><input type="text" class="form-control" name="Topic"></td>
        </tr>
        <tr>
            <td>รายละเอียด : </td>
            <td>
                <textarea name="Detail" class="form-control" rows="4" cols="50"></textarea>
            </td>
        </tr>
        <tr height="70">
            <td colspan="2" align= "center">
                <button class="btn btn-primary" type="sumbit" name="btnSubmit">ตกลง</button>
                <button class="btn btn-danger" type="reset" name="btnSubmit">ยกเลิก</button>
            </td>
        </tr>
    </table>
</form>
</center>