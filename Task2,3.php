<?php
  // Task with STRLEN
  //1
  $d='html css php';
  echo strlen($d);
  ?>
  <br>
<?php
 //2
 $password='1234';
 $passlen=strlen($password);
 if($passlen>5 &&  $passlen <10){
  echo $password;
 } else {
 echo "Невірна кількість символів, придумайте новий";
 }
 ?>
  <br>
<?php
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
      ?>
 
  <br>
<?php
  //2
   $r="Ukranian";
   $m=strrev($r);
   $rr=substr ($m,0,3);
   echo strrev($rr);
 ?>
  <br>
<?php
  //3
 $m="mong_o";
 echo substr($m, 3, 5);
 ?>
  <br>
<?php
    //4
 $k1='http://..';
 $k2='https://..';
 $some_str='http://epam.com';
 $e= substr($k1, 0,7);
 $m= substr($k2, 0,7);
 echo $e,$m;

 if(substr($some_str, 0,7)==$m){
 echo "Yes"; 
 } else if ( substr($some_str, 0,7)==$e){ 
 echo "Yes";
 }else{
     echo "No";
 }
 ?><br>
<?php
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
  ?>
  <br>
<?php
  //6
  $new_string='mokochoko.jpg';
  $new_string2='image.png';
  $n_s_rev=strrev($new_string);
  // echo substr($n_s_rev,0,4);
   if(substr($n_s_rev,0,4)=="gnp."){
      echo "Yes!";
   } else if (substr($n_s_rev,0,4)=="gpj."){
      echo "Great, Yes!";
      
      } else{
      echo "Sorry, but No!";
      }
	 ?>
  <br>
<?php
  //7  
 $ryadok="Mockachino";
 $ryadok2="Milk";
    if(strlen($ryadok)>5){
        echo substr($ryadok, 0,5)."...";
        }  if (strlen($ryadok)<5){
            echo $ryadok;
        }
  ?>