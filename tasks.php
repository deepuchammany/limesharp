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
function reformat($a)
{
    if (is_string($a)) {
        //Check if the input is a string to continue
        $b      = strtolower($a); //Converting the string to lower case
        $result = ""; //Result array declaration
        for ($i = 0; $i < strlen($a); $i++) {
            if (($b[$i] != 'a') && ($b[$i] != 'e') && ($b[$i] != 'i') && ($b[$i] != 'o') && ($b[$i] != 'u')) {
                //Checking if the character is not a vowel to append it to the result string
                $result = $result . $b[$i];
            }
        }
        $result[0] = strtoupper($result[0]); //Converitng the first cahracter to upper case
        return $result;
    } else {
        echo "Error - Incorrect Input";
    }
}
function next_binary_number($a)
{

    if ((is_array($a)) && (!empty($a))) {
        //Check if the input is an array and not empty to continue
        $length = count($a); //Counting the length of the binary number
        $last   = $length - 1; //Calculating the last index of the array
        for ($i = $last; $i >= 0; $i--) {
            if ($a[$i] == 0) {
                //Checking if the digit is 0
                $a[$i]++;
                break;
            } else {
                $a[$i] = 0;
            }
        }
        if ($a[0] == 0) {
            //Checking if the resultant array has a 0 in the first position
            $temp = [1];
            $a    = array_merge($temp, $a); //Adding a 1 to make the binary number complete
        }
        return $a;
    } else {
        echo "Error - Incorrect Input";
    }
}
