<?php
echo "<h1>Working with While Loop </h1>";
$c = 1;
while($c<=10)
{
    if($c==4)
    {
        $c++;
        continue;

    }
    echo "<h1>$c</h1>;
    $c++;
}

?>

