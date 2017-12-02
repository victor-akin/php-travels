<?php

$parent_string = "Tunde Jolomi Stephen";
$child_string = "Jolomi";

echo strpos($parent_string,$child_string);

 /*
    if $child_string is found in $parent_string
    the starting position of $child_sting in parent_string is returned
    if not found false will be returned
    Strings are zero-indexed 
 */

$parent_string = "Tunde Jolomi Stephen";
$child_string = "sTunde";

if (strpos($parent_string,$child_string) <= 0) {
    echo "$child_string is in $parent_string";
} else {
    echo "$child_string is not in $parent_string";
}

/*
    This gives us the wrong output because the 
    starting position of $child_string in $parent_string
    is 0 which evaluates to false

    To fix we check if the returned value of strpos($parent_string,$child_string)
    is equal to false
    strpos($parent_string,$child_string) !=== false
*/

$parent_string = "Tunde Jolomi Stephen";
$child_string = "Tunde";
$offset = 4;

echo strpos($parent_string, $child_string, $offset);

/*
    The offset does not depend on 0-indexing of arrays
    and it specifies the position where the function will
     start searching for $child_string in $parent_string
*/

echo "<br>";
$x = 5;
echo $x++ + 1; //this is equal to 6 cos the operation executes before the value of $x is changed
echo "<br>";
echo $x; //at this  point $x becomes 6 cos it has added 1 but not the '+ 1' in '$x++ + 1'
echo "<br>";
echo $x-- + 1; //this evaluates to 7 cos it uses $x's current value which is 6
echo "<br>";
echo $x; // the value of $x is 5 cos it changes after the operation '$x-- + 1'
echo "<br>";
echo --$x;//the value of $x is 4
echo "<br>";
echo ++$x; //the value of $x is 5
echo "<br>";


$ref = ' a G ';// this is not assigning the value of $ref 
                //to $ref_2 but pointing the two variables to the same value
$ref_2 = &$ref; 
$ref_2 = "He is $ref_2";
echo $ref_2;
echo $ref; //any changes made to one of variable will take effect in the other

if(011 == 0011) echo 9; //this evaluates to true and prints 9 because the
                        // leading 0's tell th e PHP interpreter to treat the value as octal 

if('0011' === 0011) echo 0011; //this evaluates to false because the strict equality 
                                //test fails between a  string and an integer
echo "<br>";

$array_1 = [1,2,3];
$array_2 = 4;
$array_3 = [5,6,7];

$merged_array = [];

$merged_array = array_merge($array_1, $array_3); 
var_dump($merged_array); //the value of $merged_array is $array_1 and $array_2

$merged_array = array_merge($array_1, $array_2);
var_dump($merged_array);//$merged_array is NULL because the second parameter in array_merge is not an array

$merged_array = array_merge($merged_array, $array_3);
var_dump($merged_array);//$merged_array is NULL because the first parameter in array_merge() is null


$x = true && false;
echo gettype($x).'__'. $x;//$x will boolean true because operator precedence assigns true to $x 
                          //for proper evaluation (true && false)
echo "<br>";

$type_conversion = 5 + '55_&%^' + ')(*^%^8';
echo $type_conversion; //due to php type conversion '55_&%^ = 55 and ')(*^%^8' = 0 so $type_conversion = 60

$text = "text string";
$text[30] = 'kuguii';//sets the character at index[30] to 'k' because text is a string 
                    //and cannot contain an array then fills places inbetween with empty strings
echo strlen($text);// returns last index + 1 in this case 30 + 1 

echo "<br>";

$type = PHP_INT_MAX + 1; 
echo gettype($type);//PHP's auto type castiing will convert the largest integer PHP can hold to double 

