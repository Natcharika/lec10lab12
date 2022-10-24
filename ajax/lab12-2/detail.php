
<html>
<head><meta charset="utf-8"></head>    
<body>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<div style="display:flex">
    <div>
    <img src='../../lec8workshop/member_photo/<?=$row["username"]?>.jpg'>
    </div>
    <div style="padding: 15px">
        <h1><?=$row["name"]?></h1>
        Username: <?=$row["username"]?><br>
        ที่อยู่: <?=$row["address"]?><br>
        อีเมล: <?=$row["email"]?> 
    </div>
</div>
</body>
</html>