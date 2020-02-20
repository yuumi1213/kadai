<?php
/*
1.引数に数値を指定して実行すると、
数値を2倍にして返す関数を作成してください
*/
$i = 1;
function a($i){
    $result = $i * 2;
    return $result;
}
echo a($i);
echo "\n";
/*
2.$a と $b を仮引数に持ち、
$a と $b　を足した結果を返す関数を作成してください。
*/

$a = 1;
$b = 2;

function sum($a,$b){
    $result = $a + $b;
    echo $result;
}
sum($a,$b);
echo "\n";

/*
3.$arr という配列の仮引数を持ち、
数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください。
*/

function b($arr){
    $total = 1;
    foreach ($arr as $ar){
        $total *= $ar;
    }
    return $total;
}
echo b (array(1,3,5,7,9));
echo "\n";


/*
4.【応用】　次のプログラムは、配列の中で一番大きい値を返す
max_array という関数を実装しようとしています。
途中の部分を完成させてください。
*/

function max_array($arr){

 $max_number = $arr[0];
 foreach($arr as $a){
  
  if ($max_number < $a){
    $max_number = $a;
  }
 }
 return $max_number;
 }
 echo max_array(array(5,8,17,15));
 echo "\n";


/*
5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
strip_tags
array_push
array_merge
time, mktime
date
*/



?>
