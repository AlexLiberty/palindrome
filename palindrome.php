<?php

$str = 'Sum summus mus';

$arr = str_split (str_replace(' ', '', $str));

$palindromes = array();

$reverseArr = array_reverse($arr);

//$palindromes['full'] = '';
//for($i = 0; $i < count($arr); $i++){
//    if(strcasecmp($arr[$i], $reverseArr[$i]) == 0){
//        $palindromes['full'] .= $arr[$i];
//    }
//}

$palindromes['full'] = '';
var_dump($arr);
for($i = 0; $i < count($arr); $i++){
    $palindromes[$i] = '';
//        if(isset($arr[$i + $j]) && $arr[$i + $j] == $arr[$i]) {
//            while ($j < count($arr) - $i) {
//                    $palindromes[$i] = $palindromes[$i] . $arr[$i + $j];
//                $j++;
//            }
//        }
//        elseif(isset($arr[$i - $j]) && $arr[$i - $j] == $arr[$i]) {
//            while ($j < count($arr) - $i) {
//                $palindromes[$i] = $arr[$i - $j] . $palindromes[$i];
//                $j++;
//            }
//        }
    $next = isset($arr[$i+1]) ? $arr[$i+1] : '';
    if($arr[$i] == $next){
        for($j = $i; $j >= $i; $j--){
            var_dump($j);
            if($arr[$j] == $arr[$i + $j]){
                $palindromes['full'] = $arr[$j] . $palindromes['full'] . $arr[count($arr) - $j];
            }
        }
    }

}

var_dump($palindromes);
var_dump($palindromes['full']);
