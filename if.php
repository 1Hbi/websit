<?php
    $check = false;
    $username = "ALhassan alharbi";
    $email = "h@gmail.com";

    if($username !== "ALhassan alharbi" AND $email !== "h@gmail.com"){
        echo "Welcome Admin";
    }

?>

<?php

$number1 = 20;
$number2 = 30;

if($number1 > $number2){
    echo "الرقم الأول أكبر" ;
    
    if($number1 === 20){
        echo "<br>";
        echo "الرقم الأول عشرون" ;
    }

}elseif($number1 < $number2){
    echo "الرقم الأول أصغر" ;
}else{
    echo "الرقمين متساويين" ;
}
?>