<form action="form.php" method="GET">
    Name: <input type="text" name="name">
    <br>
    Name2: <input type="text" name="name2">
    <br>
    <input type="submit">
</form>

<?php
function  hi(){
   return 1+1;
};
echo hi();
?>