<?php
/*
echo date('d');
echo date('m');
echo date('Y');
echo date('l');  //Day

echo date('Y/m/d');

echo date('h');
echo date('i');   //min
echo date('s');
echo date('a');   //am or pm

date_default_timezone_set('America/New_York');
echo date('h:i:sa');


$timestamp = mktime(11,12,45,3,12,2000);

echo date('m/d/Y h:i:sa',$timestamp);
*/

$timestamp2 = strtotime('8:30pm May 31 2000');
$timestamp3 = strtotime('now');
echo date('m/d/Y h:i:sa',$timestamp3);

?>