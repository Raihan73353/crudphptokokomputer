<?php
session_start();
session_unset();
session_destroy();


echo "<script type= 'text/javascript'>
alert('Anda sudah Logout');
window.location='login.php';
</script>";
