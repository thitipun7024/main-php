<?php
session_start();
?>
<?php
    if(isset($_POST['username'])){
        include("conn.php");
        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql1 = "SELECT * FROM login WHERE username = '".$username."' AND password = '".$password."' ";
        $query = mysqli_query($conn, $sql1);
        
        if(mysqli_num_rows($query) == 1){
            
            $row = mysqli_fetch_array($query);

            $_SESSION["id"] = $row['id_login'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['role'] = $row['role'];

            if( $_SESSION['role'] == 1);
                header("Location: index.php"); 
        }else{
            echo "<script>";
            echo "alert(\" user หรือ pass ไม่ถูกต้อง\");";
            echo "window.history.back()";
            echo "</script>" ;
        }

    }else{
        header("Location: login.php");
    }
?>
