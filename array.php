<form action="array.php" method="GET">
    Name: <input type="text" name="xname">
    <input type="submit">
</form>
<?php
$xname = $_GET["xname"];
$family= [
    "designer" => "ahmad",
    "programer" =>"mohmmad",
    "gamer"=> "amjad" 
];
echo $family[$xname];
?>