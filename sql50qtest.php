<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>50q</title>
</head>
<body>
    <h1>1</h1>
    <?php
include_once "function.php";


$dsn="mysql:host=localhost;charset=utf8;dbname=sql50q";
$pdo=new PDO($dsn,'root','');

$sql= "select * from `teacher`";
$rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
dd($rows);
?>
<h1>2</h1>
</body>
</html>
