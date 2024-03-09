<html>
    <body style="text-align:center;">
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

<h1>Website Visit Count</h1>
<div style='width:50px;height:30px;font-size:20px;color:black;font-family:Arial Black;position:relative;background:orange;display:inline-block;padding:10px;box-shadow:10px 10px 10px gray;'>
<?php echo $cn; ?>
</div>
</body>
</html>




