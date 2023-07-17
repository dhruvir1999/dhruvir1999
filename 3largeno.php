<?php

$num1 = readline("Enter First Number :");
$num2 = readline("Enter Second Number:");
$num3 = readline("Enter Third Number: ");

$res = ($num1>$num2)? ($num1>$num3 ? $num1:$num3) : ($num2>$num3 ? $num2:$num3);
//  echo "$res is Greater..";
// if ($num1>$num2 && $num1>$num3)
// {
    // echo "$num1 is greater.";
// }
// elseif($num2>$num1 && $num2>$num3)
// {
    // echo "$num2 is greater.";
// }
// elseif($num3>$num1 && $num3>$num2)
// {
    // echo "$num3 is greater. "
// }
// else
// {
    // echo "All are equal. "
// }

?>