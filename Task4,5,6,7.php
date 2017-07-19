<?php
  //STR_REPLACE
//1
       $str='31.12.2013';
       echo str_replace(".","-",$str),"\n";
       ?>
 <?php
//2 
       $str="somabjc";
       echo str_replace(array("a","b","c"),"\n";
       array(1,2,3),$str);
	    ?>
<?php
//3
	    $str='1a2b3c4b5d6e7f8h0';
       echo preg_replace('~[0-9]+~','',$str),"\n";
      ?>
	         
 //STRTR
//1
      echo strtr("akbcdef", "abc", 123),"\n";
// 2
      $some_str=array(
          'a'=>1,
          'b'=>2,
          'c'=>3);
          echo strtr("ghfhajblc",$some_str);
  //SUBSTR_REPLACE
//1
echo substr_replace("akbcdeff","!!!",2);
//STRPOS, STRRPOS
//1
$str="abc abc abc";
echo strpos($str, "b"),"\n";
//2
$str="abc abc abc";
echo strrpos($str, "b"),"\n";
//3
$str="abc abc abc";
echo strpos($str, "b",2),"\n";
//4
$str="abc abc abc";
echo "4-е.",strpos($str, " ", 4),"\n";
//5
$str="abc abcab..c";
$iff= strpos($str, "..");
if ($iff==true){
echo "Yes!","\n";
}else{
echo "No";}
//6
$str="http://abc abc abc";
$iff= strpos($str, "http://");
if ($iff==0){
echo "Yes!","\n";
}else{
echo "No";}
//6
$str="abc abc abc";
echo strpos($str, "b",2),"\n";
