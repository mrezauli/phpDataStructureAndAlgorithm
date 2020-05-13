<?php
    $arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
    $sortedArray = selectionSort($arr);
    echo "unsorted:" . implode(",", $arr) . "\n";
    echo "sorted:" . implode(",", $sortedArray) . "\n";
    //echo "count:" . $sortedArray . "\n";

    function selectionSort($arrayToBeSorted)
    {
        $length = count($arrayToBeSorted);

        $count = 0;
        for ($i = 0; $i < $length; $i++) {
            $minimum = $i;
            for ($j = $i + 1; $j < $length; $j++) {
                $count++;
                if ($arrayToBeSorted[$minimum] > $arrayToBeSorted[$j]) {
                    $minimum = $j;
                }
            }
            if ($minimum != $i) {
                $temp = $arrayToBeSorted[$minimum];
                $arrayToBeSorted[$minimum] = $arrayToBeSorted[$i];
                $arrayToBeSorted[$i] = $temp;
            }
        }
        return $arrayToBeSorted;
        //return $count;
    }
?>