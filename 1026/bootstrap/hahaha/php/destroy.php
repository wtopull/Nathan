<?php
    session_start();
    session_destroy();
    setcookie("user","a",time()-1,"/");
    setcookie("password","123",time()-1,"/");
    echo "<script type='text/javascript'>";
    echo "window.location.href='../index.php'";
    echo "</script>";
//    include "exit.php";
?>