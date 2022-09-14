<?php
if(!isset($_SESSION)){
    session_start();
}
$_SESSION = NULL;
session_destroy();
echo "<script>location.href='../index.php'</script>";
?>