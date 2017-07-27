<?php
//str_repeat
//1
$x=1;
for($i=1; $i<10; $i++ ){

	$xx=$x++;
    echo str_repeat($xx, $i)."\n";
}
echo '<hr>';

//2
$str='html,<b>php</b>,js';
	echo strip_tags($str);
echo '<hr>';

//strip_tags and specialchars
//1
$str='html,<b>php</b>,js</p>';
echo strip_tags($str,'<b></b>');
echo '<hr>';

//2
$str='html,<b>php</b>,js</p>';
echo htmlspecialchars($str);
echo '<hr>';

//chr and ord
//1
echo ord('a'),'/', ord('b'),'/', ord('c'),'/', ord(' ');
echo '<hr>';
//2
echo chr(33);
echo '<hr>';
//3
$str=rand(65, 90);
echo chr($str);
echo '<hr>';
//4
$len = rand(1,18);;
	for ($i = 1; $i <= $len; $i++) {
		$str .=chr(rand(97,112));
	}
echo $str;
echo '<hr>';

//5
$len = rand(1,18);;
	for ($i = 1; $i <= $len; $i++) {
		$str .=chr(rand(97,112));
	}
	echo $str;
//6
$a="K";
$str=ord($a);
   if($str>64&&$str<91){
	echo "Upper letter";
}else if($str>96&&$str<123){
    echo "Lower letter";
}else{
    echo "It's isn't a letter";
}
echo '<hr>';
//strchr and strrchr
//1
$str='ab-cd-ef';
echo strstr($str,'-');
echo '<hr>';

//2
$str='ab-cd-ef';
echo strrchr($str,'-');
echo '<hr>';
//strstr
//1
$str='ab--cd--ef';
echo strstr($str,'--');
echo '<hr>';

	
	