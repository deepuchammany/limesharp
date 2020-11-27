<?php
function repeat($a) //Function to repeat the array

{
    if ((is_array($a)) && (!empty($a))) {
        //Check if the input is an array and not empty to continue
        $result = array(); //Result array declaration
        for ($i = 0; $i < 3; $i++) { //For loop to make 3 instances of the array
            $result = array_merge($result, $a); //Merging the reapeated array
        }
        return $result;
    } else {
        echo "Error - Incorrect Input";
    }
}