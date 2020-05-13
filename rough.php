<?php
    $arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
    echo "unsorted:" . implode(",", $arr) . "\n";

    $length = count($arr);
    $bound = $length - 1;

    $swapCount = 0;
    $count = 0;
    for ($i=0; $i < $length ; $i++) { 
        $swapFlag = false;
        $newBound = 0;
        for ($j=0; $j < $bound; $j++) {
            $count++;
            if ($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j+1] = $temp;
                $swapFlag = true;
                $swapCount++;
                $newBound = $j;
            }
        }
        if (!$swapFlag) {
            break;
        }
        $bound = $newBound;
    }

    echo "sorted:" . implode(",", $arr) . "\n";
    echo $swapCount . "\n";
    echo $count . "\n"; 
