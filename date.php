<style>
    #main{width:100%;background:green;text-align:center;}
    #pic{width:50%;height:300px;box-shadow:10px 10px 10px gray;margin-auto;}
    </style>
<?php
$ourtime =  date_default_timezone_set("Asia/Kolkata");
$mydate = mktime(11,14,54,9,1,2023);
$d = date("D",$mydate);
echo $d;

$m = "<h1>Image of the day </h1>";
$im = "images/1.jpg";
switch($d)
{
    case:"Mon";
    echo $m;$im = "images/1.jpg";
    break;
    case :"Tue";
    echo $m;$im = "images/2.jpg";
    break;
    case :"Wed";
    echo $m;$im = "images/3.jpg";
    break;
    case :"Thur";
    echo $m;$im = "images/4.jpg";
    break;
    case :"Fri";
    echo $m;$im = "images/5.jpg";
    break;
    case:"Sat";
    echo $m;$im = "images/6.jpg";
    break;
default;
    echo $m;$im = "images/7.jpg";
    
}
<div id ="main">
<img id="pic" src="<?php echo $im  ?>">
</div>
?>