<?php
#Sparse Arrays
function matchingStrings($strings, $queries) {
    $words = array();
    $ans = array();

    foreach ($strings as $w) {
        if (!isset($words[$w])) {
            $words[$w] = 1;
        } else {
            $words[$w] += 1;
        }
    }

    foreach ($queries as $q) {
        if (!isset($words[$q])) {
            print_r($words);
            array_push($ans, 0);
        } else {
            print_r($ans);
            array_push($ans, $words[$q]);
        }
    }

    return $ans;
}

$query = ['aba','xzxb','ab'];
$strignList = ['abc','baba','aba','xzxb'];

$output = matchingStrings($strignList,$query);
print_r($output);


