<?php
//Site visiting counter
session_start();


$cf ="counter.txt";
if(!file_exists($cf))
{
$f = fopen($cf, "w");
fwrite($f,"0");
fclose($f);
}

$f = fopen($cf,"r");
$cn = fread($f,filesize($cf));
fclose($f);


if(!isset($_SESSION['visting_not_refreshing']))
{
$_SESSION['visting_not_refreshing']="yes";
$cn++;

$f = fopen($cf, "w");
fwrite($f,$cn);
fclose($f);
}

?>

<div style='color:white;font-family:Arial Black;position:relative;background:cyan;display:inline-block;padding:10px;box-shadow:10px 10px 10px gray;'>
Visit Count:<?php echo $cn; ?>
</div>





