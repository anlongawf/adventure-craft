<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once "views/components/navbar.php" ?>
    <div>
        <div>
            <h1>Danh sách người chơi chưa được add whitelist</h1>
        </div>
        <div>
            <form action="" method="POST">
                <table>
                    <tr>
                        <th>Tên ingame</th>
                        <th>Thêm</th>
                        <th>Xóa</th>
                    </tr>
                    <?php foreach ($allUser as $value): ?>
                    <tr>
                        <td><?= $value['realName']?></td>
                        <td><a onclick="return confirm('Bạn có chắc chắn muốn thêm không?')" href="?act=add-whitelist&name=<?= $value['name']?>">Thêm</a></td>
                        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="?act=remove-whitelist&name=<?= $value['name']?>">Xóa</a></td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </form>
        </div>
    </div>
    <?php require_once "views/components/footer.php" ?>
</body>
</html>