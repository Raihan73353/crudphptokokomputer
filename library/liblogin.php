<?php
function ceklogin()
{
    if (empty($_SESSION['username'])) {
        return false;
    } else {
        return true;
    }
}


function cek_timout(){
    $waktu_idle=time()-$_SESSION['waktu'];
    if($waktu_idle>100) 
    session_unset();
    session_destroy();   
    
    echo "<script type= 'text/javascript'>
    alert('Anda sudah Logout');
    window.location='login.php';
    </script>";
    
}