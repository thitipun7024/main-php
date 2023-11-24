<center>
<form name="register" action="insertregister.php" method="post" enctype="multipart/form-data" onsubmit="return checkPassword()">
    <table border="0" width="600">
        <tr>
            <td colspan="2" class="text-info fs-1" align= "center">สมัครสมาชิก</td>
        </tr>
        <tr>
            <td>ชื่อผู้ใช้งาน : </td>
            <td><input type="text" name="User"></td>
        </tr>
        <tr>
            <td>รหัสผ่าน : </td>
            <td><input type="password" name="Password1" id="Password1"></td>
        </tr>
        <tr>
            <td>ยืนยันรหัสผ่าน : </td>
            <td><input type="password" name="Password2" id="Password2"></td>
        </tr>
        <tr>
            <td>ชื่อ-นามสุกล : </td>
            <td><input type="text" name="Name"></td>
        </tr>
        <tr>
            <td>เพศ : </td>
            <td>
                <input type="radio" name="Sex" value="1" checked>ชาย
                <input type="radio" name="Sex" value="2">หญิง
            </td>
        </tr>
        <tr>
            <td>ที่อยู่ : </td>
            <td>
                <textarea name="Address" rows="4" cols="50"></textarea>
            </td>
        </tr>
        <tr>
            <td>อีเมล์ : </td>
            <td>
            <input type="text" class="form-control" name="Email" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
            </td>
        </tr>
        <tr>
            <td>เบอร์โทรศัพท์ : </td>
            <td>
            <input type="text" class="form-control" name="Phone" maxlength="10" pattern="^0([8|9|6])([0-9]{8}$)">
            </td>
        </tr>
        <tr>
            <td>รูปภาพ : </td>
            <td>
            <input type="file" name="filename">
            </td>
        </tr>
        <tr>
            <td>สถานะผู้ใช้งาน : </td>
            <td>
                <select name="Role_user">
                    <option value="user" checked>User</option>
                    <option value="staff">Staff</option>
                    <option value="admin">Admin</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align= "center">
                <button class="btn btn-primary" type="sumbit" name="btnSubmit">ตกลง</button>
                <button class="btn btn-danger" type="reset" name="btnSubmit">ยกเลิก</button>
            </td>
        </tr>
    </table>
</form>
</center>

<script> 
	function checkPassword() {
        let password_1 = document.getElementById("Password1");
        let password_2 = document.getElementById("Password2");
        if( password_1.value != password_2.value ) {
            alert("กรุณากรอกรหัสผ่าน และยืนยันรหัสผ่านให้ตรงกัน");
            return false;
        }
    }
</script> 