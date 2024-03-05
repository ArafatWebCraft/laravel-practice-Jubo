<?php

function matchingStrings($querys,$strignList)
{
    $result = [];
    foreach ($querys as $query) {
        echo $query."\n";
        $count = 0;
        foreach ($strignList as $item) {
            echo $item."\n";
            if ($item === $query){
                $count++;
            }
        }
        array_push($result,$count);
    }
    return $result;
}
$query = ['aba','xzxb','ab'];
$strignList = ['abc','baba','aba','xzxb'];

$output = matchingStrings($query,$strignList);
print_r($output);
