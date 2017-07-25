<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<pre>
<?php

$words  = 'html css php';
$pieces = explode(" ", $words);
echo "Завдання 1 (explode, implode)";
/*echo $pieces[0];
echo $pieces[1];
echo $pieces[2];*/
var_dump($pieces);
echo '<hr>';
$array = array('html', 'css', 'php');
echo "Завдання 2 (explode, implode)";
echo implode(",", $array);
echo '<hr>';

$words  = '2013-12-31';
$pieces = explode("-", $words);
//echo $pieces[0]; // кусок1
//echo $pieces[1];
//echo $pieces[2];
echo "Завдання 3 (explode, implode)";
echo implode(".", array($pieces[2], $pieces[1], $pieces[0]));

echo '<hr>';

echo "РОБОТА з str_split";

$str = "1234567890";


$arr1 = str_split($str, 2);
echo "Завдання 1: ";
print_r ($arr1)."\n";
echo '<hr>';
$arr2= str_split($str);
echo "Завдання 2: ";
print_r ($arr2)."\n";
echo '<hr>';

$arr2= str_split($str, 2);
echo "Завдання 3: ";
echo implode("-", $arr2)."\n";
echo '<hr>';

echo "РОБОТА з trim";
$str2="goto   c                      ";
echo "Завдання 1: ";
echo rtrim($str2)."<-------";
echo '<hr>';

$str3="/php/";
$trimmed = trim($str3,  "/");
echo "Завдання 2: ";
var_dump($trimmed)."<-------";
echo '<hr>';

$str3="строка строка строка.";
$tr = rtrim($str3,  ".");
echo "Завдання 3: ";
var_dump ($tr.".");
echo '<hr>';

echo "РОБОТА з strrev";
$strl="Hello world!";
echo "Завдання 1: ";
echo strrev($strl)."\n";
echo '<hr>';

$str5="madam";
$str0=strrev($str5);
echo "Завдання 2: ";
if($str5==$str0){
    echo "yes";
} else {
    echo 'no';
}
echo '<hr>';

echo "РОБОТА з str_shuffle";
$str = '123456';
echo "Завдання 1: ";
echo str_shuffle($str)."\n";
echo '<hr>';

$str = 'abcdefghijklmnopqrstuvwxyz';
echo "Завдання 2: ";
echo substr(str_shuffle($str), 0, 6);
echo '<hr>';

$str99="12345678";
echo number_format($str99, null, null, " ");
echo '<hr>';
for($i=1; $i<11; $i++ ){
    echo str_repeat("x", $i)."\n";
}
echo '<hr>';

?>
</body>
</html>
