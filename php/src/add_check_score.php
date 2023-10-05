<?php 
session_start();
    include("conn.php");
    $sql = "SELECT * FROM checklist";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);

    for($i = 1; $i <= $row; $i++){
        if($_POST["radio".$i]!== ""){
            $row1 = mysqli_fetch_array($result);
            $sql2 = "INSERT INTO check_score (score, checklist_id, register_id) VALUES ('".$_POST["radio"]."','".$row1['checklist_id']."','".$_SESSION['id']."')";
            $result2 = mysqli_query($conn, $sql2);

            // echo "<script>";
            // echo "alert(\" ส่งเเบบประเมินสำเร็จ \");";
            // echo "window.location.href='index.php'";
            // echo "</script>" ;
        }
    }
?>