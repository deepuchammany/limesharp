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