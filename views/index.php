<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<table border="1">
    <tr>
        <th>Название</th>
        <th>Картинка</th>
        <th>Действие</th>
    </tr>
<?php foreach ($items as $item): ?>
    <tr>
        <td>
            <?php echo $item['title']; ?>
        </td>
        <td>
            <img src=" <?php echo $item['path']; ?> " style="max-height: 100px">
        </td>
        <td>

        </td>
    </tr>
<?php endforeach; ?>
</table>

<a href="../add.php">Добавить фото</a>

<?php include __DIR__ . '/form.php'; ?>

</body>
</html>