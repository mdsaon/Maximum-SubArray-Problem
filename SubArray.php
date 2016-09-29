<?php
/* PHP VERSION 5.3.10 */
/*create a function with a parameter $array*/
    function congiguous($array) {
        $length = count($array);/* count the lenght of the array */
        $max = 0; 
        $max_so_far = 0;
 
        /* create a loop to reverse through the array items to find the maximum*/
 
        for ( $i = 0; $i < $length; $i++) {
			
            $max = $max + $array[$i];
 
             if ($max < 0) {
                   $max = 0;
			}
            if ( $max > $max_so_far) {
                  $max_so_far = $max;
		    }
		}
 
   return $max_so_far;//return the sum of congiguous maximum items
   }
   
   $array = array(-1, 1, 5, -6, 3);
   echo congiguous($array);


?>

