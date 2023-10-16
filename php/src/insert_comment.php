<?php
    session_start();
    include("conn.php");
    $comment = $_POST['comment'];
    $datetime = date('Y-m-d H:i:s');

    $sql = "INSERT INTO comment VALUES (null, '{$_POST['relation_id']}', '".$_SESSION['id']."', '$comment', '$datetime')";
    $result = mysqli_query($conn, $sql);
    
    $sql2 = "UPDATE relations SET all_comment = all_comment+1 WHERE relation_id = '{$_POST['relation_id']}'";
    $result2 = mysqli_query($conn, $sql2);

    echo "<script>";
    echo "alert(\"register success\");";
    echo "window.history.back()";
    echo "</script>";
?>