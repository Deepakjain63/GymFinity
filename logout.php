<?php
if(isset($_SESSION["User_ID"]))
{
    unset($_SESSION);
    session_destroy();
    header("location:login.php");

}
?>