<?php
  // Task with STRLEN
  //1
  $d='html css php';
  echo strlen($d);
  echo '<hr>';

 //2
 $password='1234';
 $passlen=strlen($password);
 if($passlen>5 &&  $passlen <10){
  echo $password;
 } else {
 echo "Невірна кількість символів, придумайте новий";
 }
 echo '<hr>';
 
 //Task with SUBSTR
 //1
 function finder ($strof){
  $o="html css php";
  $ht=strpos($o, $strof);
  $htl=strlen($strof);
  echo substr($o, $ht, $htl); 
  }
       echo "'",finder("php"),"',";
       echo "'",finder("css"),"',";
       echo "'",finder("html"),"'.";
  echo '<hr>';
 
  
  //2
   $r="Ukranian";
   $m=strrev($r);
   $rr=substr ($m,0,3);
   echo strrev($rr);
   echo '<hr>';

  //3
   $str = 'http://somestring';
	if (substr($str, 0, 7) == 'http://') {
		echo 'Yes';
	} else {
		echo 'No';
	}
 echo '<hr>';
    
	//4
 $k1='http://..';
 $k2='https://..';
 $some_str='http://epam.com';
 $e= substr($k1, 0,7);
 $m= substr($k2, 0,7);
 //echo $e,$m;

 if(substr($some_str, 0,7)==$m){
     echo "Yes"; 
 }else if( substr($some_str, 0,7)==$e){ 
    echo "Yes";
 }else{
      echo "No";
 }
 echo '<hr>';
  //5
  $new_string='mokochoko';
  $new_string2='image.png';
  $n_s_rev=strrev($new_string2);
 // echo substr($n_s_rev,0,4);
   if(substr($n_s_rev,0,4)=="gnp."){
      echo "Yes!";
      } else{
      echo "Sorry, but No!";
      }
  echo '<hr>';
  //6
  $str='mokochoko.png';
  $n_s_rev=substr($str,-4);
   if($n_s_rev==".png"){
      echo "Yes!";
   } else if ($n_s_rev====".jpg"){
      echo "Great, Yes!";
       } else{
      echo "Sorry, but No!";
      }
 echo '<hr>';
  //7  
 $ryadok="Mockachino";
 $ryadok2="Milk";
    if(strlen($ryadok)>5){
        echo substr($ryadok, 0,5)."...";
        }  if (strlen($ryadok)<5){
            echo $ryadok;
        }
  ?>