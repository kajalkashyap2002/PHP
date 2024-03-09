<style>
</style>
<?php
echo "<h1>Working with PHP Array</h1>";
$socialmedia = array("youtube","twitter","instagram");
$link = ("https://www.youtube.com/" , "https://twitter.com/" , "https://www.instagram.com/",);
echo "<ol>";
for($i=0;$i<=($link);$i++)
{
    echo "<li><a href=".$link[$i]. ">".$socialmedia[$i]."</li>";
}
?>