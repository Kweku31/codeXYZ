<?php
/*$num = 29;

if($num == 29){
    echo '29 failed';

}elseif($num == 30){
    echo '30 failed';
}else{
    echo 'fuck off bruh';
}
*/
$num = 12;
if($num > 4 && $num < 20){
    echo "$num passed\n";
}

$favFood = 'pink';
switch($favFood){
    case 'Jollof':
        echo 'Your favourite food is jollof';
        break;
    case 'Emo Tuo':
        echo 'Your favourite food is emo tuo';
        break;
    case 'Fufu':
        echo 'Your favourite food is fufu';
        break;
    default :
        echo 'Your favourite food is fried yam';
        
}
?>