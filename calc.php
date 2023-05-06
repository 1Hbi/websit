
<?php
$num1= $_GET["naber1"] ;
$num2= $_REQUEST["naber2"];
$opr =$_REQUEST["op"];
if($opr === "+"){
$result =$_GET["naber1"] + $_REQUEST["naber2"];}
elseif($opr === "-"){$result =$_GET["naber1"] - $_REQUEST["naber2"];}
elseif($opr === "*"){$result =$_GET["naber1"] * $_REQUEST["naber2"];}
elseif($opr === "/"){$result =$_GET["naber1"] / $_REQUEST["naber2"];}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="calc.php" method="GET" class="form">
            <div>
                <label>Enter number 1</label>
                <input type="number" name="naber1" class="form-control">
            </div>
            <div><label>Enter number 2</label>
            <input type="number"   name="naber2" class="form-control">
            </div>
            <br>
            <div>
                <label>select the operation</label>
                <input type="texr" name="op" class="form-control">
            </div>
            <br>
            <div>
            <input type="submit" class="btn btn-primary">
            </div>
            <br>
            <div class="alert alert-success">
            <?php echo $result ?></div>
        </form>

    </div>
  </body>