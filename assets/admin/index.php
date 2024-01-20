<?php

require_once "../db.php";

$stmt = $pdo->query("select * from messages");
$messages = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
  <h2>Сообщения</h2>

        <table>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Текст</th>
                <th>Дата и время</th>
            </tr>

            <?php foreach ($messages as $key => $message) : ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= htmlspecialchars($message['name']) ?></td>
                    <td><?= htmlspecialchars($message['email']) ?></td>
                    <td><?= htmlspecialchars($message['text']) ?></td>
                    <td><?= $message['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>           
        </table>
    </div>
</body>
</html>