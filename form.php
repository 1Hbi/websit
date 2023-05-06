<form action="form.php" method="GET">
    Name: <input type="text" name="name">
    <br>
    Name2: <input type="text" name="name2">
    <br>
    <input type="submit">
</form>

<?php
echo $_GET["name"];
echo "<br>";
echo $_REQUEST["name2"];
?>