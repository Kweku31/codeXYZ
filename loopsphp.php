<?php
/*
for($i = 0;$i <= 12;$i++){
    //echo $i;
    //echo "The number is: $i \n";
    //echo "<br>";
    echo 'The number is:'.$i;
}

*/
/*
$i=0;
while($i < 12){
    echo $i;
    echo "\n";
    //echo '<br>';
    $i++;
}
*/
// $i = 0;
// do{
//     echo $i;
//     echo "\n";
//     $i++;

// }
// while($i<10);

$people = array('Kofi' => '50', 'Kwame' => '70', 'Kweku'=> '38');
foreach($people as $person => $number){
    echo $person.':'.$number;
    echo "\n";
}
?>