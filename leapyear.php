<?php
$year = readline("Enter a Year to start search to leap year:");
$year1 = readline("Enter a year to end search to leap year:");
for($i=$year;$i<=$year1;$i++)
{
    if(($i%4==0 and $i%100!=00) or ($i%400==0))
    {
    echo "$i: Leap Year."."\n";
    }
    else
    {
    echo "$i: Not Leap Year."."\n";
    }
}
?>