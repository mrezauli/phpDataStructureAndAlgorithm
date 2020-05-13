<?php
    $haystack = range(1, 333, 3);
    $needle = 33;
    if (linearSequentialSearch($haystack, $needle)) {
        echo "$needle Found!";
    } else {
        echo "$needle Not Found!";
    }

    function linearSequentialSearch($haystack, $needle) {
        $length = count($haystack);

        for ($i=0; $i < $length; $i++) { 
            if ($haystack[$i] == $needle) {
                return true;
            }
        }
        return false;
    }
    
?>