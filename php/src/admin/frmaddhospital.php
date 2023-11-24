<center>
<form name="hospital" action="inserthospital.php" method="post" enctype="multipart/form-data">
    <table border="0" width="550">
        <tr>
            <td colspan="2" class="text-info fs-1" align= "center">เพิ่มข้อมูลโรงพยาบาล</td>
        </tr>
        <tr>
            <td>ชื่อโรงพยาบาล : </td>
            <td><input type="text" class="form-control" name="namehospital"></td>
        </tr>
        <tr>
            <td>ที่อยู่ : </td>
            <td>
                <textarea name="Address" class="form-control" rows="4" cols="50"></textarea>
            </td>
        </tr>
        <tr>
            <td>เบอร์โทรศัพท์ : </td>
            <td>
            <input type="text" class="form-control" name="Phone" maxlength="10" pattern="^0([8|9|6])([0-9]{8}$)">
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