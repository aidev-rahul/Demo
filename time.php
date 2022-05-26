<?php
   date_default_timezone_set('Asia/Kolkata'); 
   $timezone_object = date_default_timezone_get();
   
   print $timezone_object; 
   print "</br>";
   
   print time();
   print "</br>";

   print date("d/m/y G:i:s A",time());
   print "</br>";
   
   print date("d",time());
   print "</br>"; 
   $datetime = new DateTime();

var_dump($datetime);
print "</br>"; 


$indiatime = new DateTime();
echo $indiatime->format('d/m/y g:i:s A'); 
echo "</br>";

$singaporetime = new DateTime('',new DateTimeZone('Singapore'));
echo $singaporetime->format('d/m/y g:i:s A');
echo "</br>";

$diff = $indiatime->diff($singaporetime);
echo $diff->format('%R%a days');
?>