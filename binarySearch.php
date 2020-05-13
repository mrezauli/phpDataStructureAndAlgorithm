<?php
    $haystack = range(1, 200, 5);
    $needle = 36;
    echo implode(",", $haystack). "\n";
    if (binarySearch($haystack, $needle)) {
        echo "$needle Found!";
    } else {
        echo "$needle Not Found!";
    }

    function binarySearch($haystack, $needle) {
        $low = 0;
        $high = count($haystack) - 1;

        for (; $low <= $high; ) { 
            $mid = ($low + $high) / 2;
            if ($haystack[$mid] > $needle) {
                $high = $mid - 1;
            }elseif ($haystack[$mid] < $needle) {
                $low = $mid + 1;
            }else {
                return true;
            }
        }
        return false;
    }
