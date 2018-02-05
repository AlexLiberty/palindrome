<?php

$str = 'Argentina manit negra';

$arr = str_split (str_replace(' ', '', $str));

$palindromes = array();

$reverseArr = array_reverse($arr);

$palindromes['full'] = '';
for($i = 0; $i < count($arr); $i++){
    if(strcasecmp($arr[$i], $reverseArr[$i]) == 0){
        $palindromes['full'] .= $arr[$i];
    }
}

//for($i = 0; $i < count($arr); $i++){
//    $j = 1;
//    $palindromes[$i] = $arr[$i];
//    while(isset($arr[$i - $j]) || isset($arr[$i + $j])) {
//        $iprev = isset($arr[$i - $j]) ? $arr[$i - $j] : '';
//        $inext = isset($arr[$i + $j]) ? $arr[$i + $j] : '';
//        if ($iprev == $inext) {
//            $palindromes[$i] = $iprev . $palindromes[$i] . $inext;
//        }elseif($arr[$i] == $inext) {
//            $palindromes[$i] = $palindromes[$i] . $inext;
//        }elseif($arr[$i] == $iprev){
//            $palindromes[$i] = $iprev . $palindromes[$i];
//        }else{
//            break;
//        }
//        $j++;
//    }
//}

var_dump($palindromes);
