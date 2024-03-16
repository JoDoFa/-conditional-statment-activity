<?php
$Grade = $_GET["Grade"];

if($Grade >= 90){
    echo "The Score is: Grade A";
}elseif($Grade >= 80){
    echo "The Score is: Grade B";
}elseif($Grade >= 70){
    echo "The Score is: Grade C";
}elseif($Grade >=60){
    echo "The Score is: Grade D";
}else if($Grade <= 60){
    echo "The Score is: Failed" ;
}
?>