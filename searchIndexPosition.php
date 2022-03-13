<?php

// Given a sorted array of distinct integers and a target value, 
// return the index if the target is found. If not, return the 
// index where it would be if it were inserted in order.

// Example 1:

// Input: nums = [1,3,5,6], target = 5
// Output: 2

// Example 2:

// Input: nums = [1,3,5,6], target = 2
// Output: 1

// Example 3:

// Input: nums = [1,3,5,6], target = 7
// Output: 4


function searchIndexPosition($array, $target) {
$targetPos = 0;

    for($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $target) {
            $targetPos = $i;
            break;
        } else if ($array[$i] < $target) {
            $targetPos = $i - 1;
        } else if ($array[$i] > $target){
            $targetPos = $i;
            break;
        }
    }

    return $targetPos;
}

// searchIndexPosition([1,3,5,6], 7); //+
searchIndexPosition([1,3,5,6], 5); //+
// searchIndexPosition([1,3,5,6], 2); //+