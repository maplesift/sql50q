<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>50q</title>
    <?php
    include_once "function.php";
    ?>
</head>
<body>
    <h1>3:查詢老師 “諶燕” 所帶的課程設數量</h1>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=sql50q";
    $pdo=new PDO($dsn,'root','');
    $sql= "SELECT count(*) from `course` left join `teacher`on course.tno=teacher.tno WHERE tname='諶燕'";
    $rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
    dd($rows);
    ?>
    <h1>2:查詢成績表所有成績的最低分,平均分,總分</h1>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=sql50q";
    $pdo=new PDO($dsn,'root','');
    $sql= "SELECT max(score),min(score),avg(score),sum(score) from `sc` ";
    $rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
    dd($rows);
    ?>
    <h1>1:查詢學生表的 前10條資料</h1>
    <?php
$dsn="mysql:host=localhost;charset=utf8;dbname=sql50q";
$pdo=new PDO($dsn,'root','');

$sql= "select * from `student` limit 10 ";
$rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
dd($rows);
echo "select * from `student` limit 10 "
?>
</body>
</html>
