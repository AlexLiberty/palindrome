<?php

$str = ' asda argentina manit negra k lol';

$arr = str_split (str_replace(' ', '', $str));

$palindromes = array();

$reverseArr = array_reverse($arr);

//$palindromes['full'] = '';
//for($i = 0; $i < count($arr); $i++){
//    if(strcasecmp($arr[$i], $reverseArr[$i]) == 0){
//        $palindromes['full'] .= $arr[$i];
//    }
//}

//$palindromes['full'] = '';
//var_dump($arr);
//for($i = 0; $i < count($arr); $i++){
//    $palindromes[$i] = '';
//    $j = $k = $i;
//    $next = isset($arr[$i+1]) ? $arr[$i+1] : '';
//    $prev = isset($arr[$i-1]) ? $arr[$i-1] : '';
//    if($arr[$i] == $next){
//        while(isset($arr[$k+1]) && strcasecmp($arr[$j], $arr[$k+1])==0){
//            var_dump($j);
//            var_dump(count($arr) - 1 - $j);
//            $palindromes[$i] = $arr[$j] . $palindromes[$i] . $arr[$k+1];
//            $j--;
//            $k++;
//        }
//    }elseif ($next == $prev){
//        $palindromes[$i] = $arr[$i];
//        while(isset($arr[$k+1]) && isset($arr[$j-1]) && strcasecmp($arr[$j-1], $arr[$k+1])==0){
//            $next = isset($arr[$k+1]) ? $arr[$k+1] : '';
//            $prev = isset($arr[$j-1]) ? $arr[$j-1] : '';
//            $palindromes[$i] = $prev . $palindromes[$i] . $next;
//            $j--;
//            $k++;
//        }
//    }
//}


function searchPalindrome($str){
    $arr = str_split (str_replace(' ', '', $str));
    $palindromes = array();
    $reverseArr = array_reverse($arr);

    for($i = 0; $i < count($arr); $i++){
        $palindromes[$i] = '';
        $j = $k = $i;
        $next = isset($arr[$i+1]) ? $arr[$i+1] : '';
        $prev = isset($arr[$i-1]) ? $arr[$i-1] : '';
        if($arr[$i] == $next){
            while(isset($arr[$k+1]) && strcasecmp($arr[$j], $arr[$k+1])==0){
                $palindromes[$i] = $arr[$j] . $palindromes[$i] . $arr[$k+1];
                $j--;
                $k++;
            }
        }elseif ($next == $prev){
            $palindromes[$i] = $arr[$i];
            while(isset($arr[$k+1]) && isset($arr[$j-1]) && strcasecmp($arr[$j-1], $arr[$k+1])==0){
                $next = isset($arr[$k+1]) ? $arr[$k+1] : '';
                $prev = isset($arr[$j-1]) ? $arr[$j-1] : '';
                $palindromes[$i] = $prev . $palindromes[$i] . $next;
                $j--;
                $k++;
            }
        }
    }

    var_dump($palindromes);
    var_dump(array_filter($palindromes));

    foreach ($palindromes as $palindrome){
        if(strlen($palindrome) == strlen($str)){
            echo "Строка является палиндромом: $palindrome";
            break;
        }elseif (strlen($palindrome) > 2){
            echo "Вся строка не является палиндромом, но найдены подпалиндромы: $palindrome\n";
        }else{
            echo "В строке не обнаружены палиндромы. $str[0]";
        }
    }
}

searchPalindrome('Madam Im Adam');

//var_dump($palindromes);
//var_dump($palindromes['full']);
