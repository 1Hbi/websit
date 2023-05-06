<form action="form.php" method="GET">
number: <input type="number" name="number11">
    <br>
    number of Repetition: <input type="number" name="number22">
    <br>
    <input type="submit">
</form>

<?php
$n1 =$_REQUEST["number11"];
$n2 =$_REQUEST["number22"];
for($i=0 ;$i<$n2; $i++){
    echo  $n1;
    echo "<br>";}
?>