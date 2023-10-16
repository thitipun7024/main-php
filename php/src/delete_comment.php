<?php
    include("conn.php");
    $comment_id = $_REQUEST['comment_id'];

    $sql = "DELETE FROM comment WHERE comment_id = '$comment_id'";
    $result = mysqli_query($conn, $sql);

    $sql2 = "UPDATE relations SET all_comment = all_comment-1 WHERE relation_id = '{$_POST['relation_id']}'";
    $result2 = mysqli_query($conn, $sql2);


    // echo "<script>";
    // echo "alert(\" ลบ Comment สำเร็จ \");";
    // echo "window.history.back()";
    // echo "</script>";
?>