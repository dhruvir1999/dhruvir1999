<?php

// / Print marks of subjects and calculate percentage and grade .

$sub1 = readline("Enter first Subject of Mark: ");
$sub2 = readline("Enter Second Subject of Mark: ");
$sub3 = readline("Enter Third Subject of Mark: ");
$sub4 = readline("Enter Fourth Subject of Mark: ");
$sub5 = readline("Enter Fifth Subject of Mark: ");
$total = $sub1+$sub2+$sub3+$sub4+$sub5;
$per = ($total*100)/500;
echo $total."\n";
echo $per."\n";
if($per>=80 && $per<=90)
{
    echo "Grade: A";
}
elseif($per>=75 && $per<80)
{
    echo "Grade: B";
}
elseif($per>=65 && $per<75)
{
    echo "Grade: c";
}
elseif($per>=55 && $per<65)
{
    echo "Grade: D";
}
elseif($per>=45 && $per<55)
{
    echo "Grade: E";
}
else
{
    echo "Grade: F";
}

?>