<?php

$str = '1 -2 -3 4 5 -6f ss3 0 0 0 -0 0.0 0.05';
$one_operation = preg_replace('/\S+[a-zA-Z]+\S+|\S+[a-zA-Z]+|[a-zA-Z]+\S+|(\d+\.\d+)/','',$str);
$two_operation = preg_replace('/(\x20+)/'," ",$one_operation);
$three_operation = preg_replace('/(\x20+)$/',"",$two_operation);
$four_operation = preg_replace('/(\x200){1,}/'," 0",$three_operation);
$five_operation = preg_replace('/-0/',"",$four_operation);
$six_operation = preg_replace('/\s+$/',"",$five_operation);
$arrayResult = explode(" ",$six_operation);
//Функция сравнения
function arrUp($a,$b){
return $a - $b;
}
uasort($arrayResult,'arrUp');
foreach ($arrayResult as $value){
    print ($value);
    print (" ");
}



phpinfo();


