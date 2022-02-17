<?php

function oneOrEightyNine($n) {
    if ($n == 0) return false;
    if ($n == 1) return $n;
    
    $n = str_split($n);
    
    $sum = 0;
    for($i = 0; $i < count($n); $i++) {
        $sum += $n[$i]**2;
    }

    if (($sum == 1) || ($sum == 89))  {
        return $sum;
    }
  
    return oneOrEightyNine($sum);
}

// Test 1-100,000
$oneCount = 0;
$eightyNineCount = 0;
for ($i = 1; $i <= 100000; $i++) {
    $oneOrEightyNine = oneOrEightyNine($i);
    switch ($oneOrEightyNine) {
        case 1:
            $oneCount++;
            break;
        case 89:
            $eightyNineCount++;
            break;
    }
}

echo 'oneCount: '.$oneCount."\n";
echo 'eightyNineCount: '.$eightyNineCount;
?>
