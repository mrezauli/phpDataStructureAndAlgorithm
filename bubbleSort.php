<?php
    $arr = [24, 55, 23, 6, 8, 3, 7, 56, 45, 94];
    $sortedArray = bubbleSort($arr);
    echo "unsorted:" . implode(",", $arr) . "\n";
    echo "sorted:" . implode(",", $sortedArray) . "\n";

    function bubbleSort($arrayToBeSorted)
    {
        $length = count($arrayToBeSorted);
        $bound = $length - 1;

        $swapCount = 0;
        $count = 0;
        for ($i = 0; $i < $length; $i++) {
            $swapFlag = false;
            $newBound = 0;
            for ($j = 0; $j < $bound; $j++) {
                $count++;
                if ($arrayToBeSorted[$j] > $arrayToBeSorted[$j + 1]) {
                    $temp = $arrayToBeSorted[$j];
                    $arrayToBeSorted[$j] = $arrayToBeSorted[$j + 1];
                    $arrayToBeSorted[$j + 1] = $temp;
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
        return $arrayToBeSorted;
        //return [$count, $swapCount];
    }
?>