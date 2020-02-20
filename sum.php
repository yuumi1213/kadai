<?php
function sum($max) {
    $result = 0;
    // $i は1から始まり、$max より大きくなるまでループする
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }
    return $result;
}
// 関数を実行
echo sum(100);
?>

<?php
$string = "ABCDEF";
echo strlen($string);
?>

<?php
$string = "I love Ruby!";
$new_string = str_replace("Ruby","PHP",$string);
echo $new_string;
?>

<?php
$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
?>

<?php
$array = array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);

arsort($array);
print_r($array);
?>