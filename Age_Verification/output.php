<html lang>
<head>

</head>
<body>

<?php
$input = $_GET["Age"];

if($input >=18){
    echo "You are old enough to enter.";
}elseif($input <18){
    echo "You are to young to enter.";
}

?>

</body> 
</html>