<?php
//str_repeat
echo "<hr>"."(--str_repeat--):";
echo "<hr>"."Завдання 1:";
$x=1;
for($i=1; $i<10; $i++ ){

	$xx=$x++;
    echo str_repeat($xx, $i)."\n";
}
echo "<hr>"."Завдання 2:";
//2
$str='html,<b>php</b>,js';
	echo strip_tags($str);

//strip_tags and specialchars
//1

echo "<hr>"."(--strip_tags and specialchars--):";
echo "<hr>"."Завдання 1:";
$str='html,<b>php</b>,js</p>';
echo strip_tags($str,'<b></b>');

echo "<hr>"."Завдання 2:";
//2
$str='html,<b>php</b>,js</p>';
echo htmlspecialchars($str);
echo '<hr>';

//chr and ord
//1
echo "<hr>"."(--chr and ord--):";
echo "<hr>"."Завдання 1:";
echo ord('a'),'/', ord('b'),'/', ord('c'),'/', ord(' ');

//2
echo "<hr>"."Завдання 2:";
echo chr(33);

//3
echo "<hr>"."Завдання 3:";
$str=rand(65, 90);
echo chr($str);

//4
echo "<hr>"."Завдання 4:";
$len = rand(1,18);;
	for ($i = 1; $i <= $len; $i++) {
		$str .=chr(rand(97,112));
	}
echo $str;


//5
echo "<hr>"."Завдання 5:";
$len = rand(1,18);
	for ($i = 1; $i <= $len; $i++) {
		$str .=chr(rand(97,112));
	}
	echo $str;
	
//6
echo "<hr>"."Завдання 6:";
$a="K";
$str=ord($a);
   if($str>64&&$str<91){
	echo "Upper letter";
}else if($str>96&&$str<123){
    echo "Lower letter";
}else{
    echo "It's isn't a letter";
}

//strchr and strrchr
//1
echo "<hr>"."(--strchr and strrchr--)";
echo "<hr>"."Завдання 1:";
$str='ab-cd-ef';
echo strstr($str,'-');


//2
echo "<hr>"."Завдання 2:";
$str='ab-cd-ef';
echo strrchr($str,'-');

//strstr
//1
echo "<hr>"."(--strstr--)";
echo "<hr>"."Завдання 1:";
$str='ab--cd--ef';
echo strstr($str,'--');
echo '<hr>';

	
	