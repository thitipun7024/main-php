<center>
<form name="new" action="insertnew.php" method="post" enctype="multipart/form-data">
    <table border="0" width="550">
        <tr>
            <td colspan="2" class="text-info fs-1" align= "center">เพิ่มข้อมูลข่าว</td>
        </tr>
        <tr>
            <td>หัวข้อข่าว : </td>
            <td><input type="text" class="form-control" name="title"></td>
        </tr>
        <tr>
            <td>รายละเอียด : </td>
            <td>
                <textarea name="Detail" class="form-control" rows="4" cols="50"></textarea>
            </td>
        </tr>
        <tr>
            <td>รูปภาพ : </td>
            <td>
            <input type="file" name="filename">
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