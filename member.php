<?php
    $keyword = $_GET["keyword"];
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");

    $stmt=$pdo->prepare("SELECT * FROM member WHERE name LIKE '%$keyword%'");
    $stmt->execute();

    while($row=$stmt->fetch()){
?>
        ชื่อ: <?= $row["name"] ?><br>
        ที่อยู่: <?= $row["address"] ?><br>
        เบอร์: <?= $row["mobile"] ?><br>
        email: <?= $row["email"] ?><br>
        <hr>
<?php
    }
?>