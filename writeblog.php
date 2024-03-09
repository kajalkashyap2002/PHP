<html>
    <body>
        <?php
$ourtimezone = date_default_timezone_set("Asia/Kolkata");
$d1 = date("d-m-y h:i:s A");
/*
$r = rand("1,255");
$g = rand("1,255");
$b = rand("1,255");
*/

$n = $_POST['blogername'];
$b = $_POST['blog'];

$m = "<h1> Bloger Name ".$n." </h1>";
$p = "<h1> Date ".$d1." </h1>";
$p ="<hr/>";
/*$p = "<div style = 'background:rgb($r,$g,$b)";font-size:20px;width:70%;height:auto;border:1px green dotted;padding:20px;margin:auto;'> ".$b." </div>; */

$f = fopen("showblog.html","a+");
fwrite($f,$m);
fclose($f);
?>
<h1>Your Blog is published.......<a href="showblog.html">"Click to see published blog...</a></h1>
</body>
</html>
