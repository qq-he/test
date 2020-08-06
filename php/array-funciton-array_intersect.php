<?php    
$name1=array("maxsu","john","vivek","minsu");    
$name2=array("umesh","maxsu","kartik","minsu");    
$name3=array_intersect($name1,$name2);  
foreach( $name3 as $n )    
{    
  echo "$n<br />";    
}    
?>