<?php 

if($_SERVER['HTTP_HOST'] === 'localhost') {
    $connect = mysqli_connect("localhost","root","","bautizo");
}elseif ($_SERVER['HTTP_HOST'] === 'goandcleanup.com') {
    $connect = mysqli_connect("68.70.163.43","goandcl2_raul_walls","R4h*gGgqOkd_","goandcl2_bautizo");
}


if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
