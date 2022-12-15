<?php
$people = array('Emma','Kwame','Okyere');
$ids = array(23,55,12);

$ids[3] = 31;
$ids[] = 23;
//echo $people[3];
//echo $ids[3];
//echo count($ids);
//print_r($ids)
//var_dump($ids)

$name = array(
    array('Kwame',10,20),
    array('Emma',20,40),
    array('Okyere',30,50)


);
echo $name[0][2];
echo "\n";
$phil = array('Kweku' => 50, 'Ama' => 40);
echo  $phil['Kweku'];
print_r($people);
var_dump($people);
echo "\n";
?>