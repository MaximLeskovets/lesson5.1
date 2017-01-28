<?php
    require "function.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Телефонная книга</title>
</head>
<body>
<table>
    <thead>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Телефон</th>
    </thead>
    <?php foreach (getProfiles() as $item): ?>
    <tbody>
        <td><?= $item['firstname'] ?></td>
        <td><?= $item['lastname'] ?></td>
        <td><?= $item['phonenumber'] ?></td>
    </tbody>
    <?php endforeach;?>
</table>
</body>
</html>