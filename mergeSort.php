<?php
    $arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
    $sortedArray = mergeSort($arr);
    echo "unsorted:" . implode(",", $arr) . "\n";
    echo "sorted:" . implode(",", $sortedArray) . "\n";
    //echo "count:" . $sortedArray . "\n";

    function mergeSort($arrayToBeSorted)
    {
        $length = count($arrayToBeSorted);

        if ($length == 1) {
            return $arrayToBeSorted;
        }

        $halfLength = $length / 2;
        
        
        $left = mergeSort(array_slice($arrayToBeSorted, 0, $halfLength));
        $right = mergeSort(array_slice($arrayToBeSorted, $halfLength));

        return merge($left, $right);
    }

    function merge($leftArr, $rightArr) {
        $combined = [];
        $lengthLeftArr = count($leftArr);
        $lengthRightArr = count($rightArr);
        $leftIndex = $rightIndex = 0;

        for (; $leftIndex < $lengthLeftArr && $rightIndex < $lengthRightArr; ) { 
            if ($leftArr[$leftIndex] > $rightArr[$rightIndex]) {
                $combined[] = $rightArr[$rightIndex];
                $rightIndex++;
            } else {
                $combined[] = $leftArr[$leftIndex];
                $leftIndex++;
            }
            
        }
        for (; $leftIndex < $lengthLeftArr; ) {
            $combined[] = $leftArr[$leftIndex];
            $leftIndex++;
        }
        for (; $rightIndex < $lengthRightArr;) {
            $combined[] = $rightArr[$rightIndex];
            $rightIndex++;
        }

        return $combined;
    }
?>