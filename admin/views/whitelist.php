<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td a {
            color: black;
            background-color: #add;
            padding: 5px;
            
        }
        td{
            padding: 10px
        }
        .main{
            display: flex;
            justify-content: space-around;
        }
        @media screen and (max-width: 576px) {
            .main{
                display: block;
            }
        }
    </style>
</head>
<body>
    <?php require_once "views/components/navbar.php" ?>
    <div class="main">
        <div>
            <div>
                <h1>Danh sách người chơi trong whitelist</h1>
            </div>
            <div>
                <form action="" method="POST">
                    <table border="1">
                        <tr>
                            <th>Tên ingame</th>
                            <th>Xóa khỏi whitelist</th>
                        </tr>
                        <?php foreach($inWhitelist as $value): ?>
                            <tr>
                                <td><?= $value['realName']?></td>
                                <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="?act=deny-whitelist&name=<?= $value['name']?>">Xóa</a></td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                </form>
            </div>
        </div>
        <div>
            <div>
                <h1>Danh sách người chơi chưa được add whitelist</h1>
            </div>
            <div>
                <form action="" method="POST">
                    <table border="1">
                        <tr>
                            <th>Tên ingame</th>
                            <th>Thêm</th>
                            <th>Từ chối</th>
                        </tr>
                        <?php foreach ($outWhitelist as $value): ?>
                        <tr>
                            <td><?= $value['realName']?></td>
                            <td><a onclick="return confirm('Bạn có chắc chắn muốn thêm không?')" href="?act=add-whitelist&name=<?= $value['name']?>">Thêm</a></td>
                            <td><a onclick="return confirm('Bạn có chắc chắn từ chối không?')" href="?act=deny-whitelist&name=<?= $value['name']?>">Từ chối</a></td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </form>
            </div>
        </div>
        <div>
            <div>
                <h1>Danh sách người chơi bị từ chối whitelist</h1>
            </div>
            <div>
                <form action="" method="POST">
                    <table border="1">
                        <tr>
                            <th>Tên ingame</th>
                            <th>Thêm</th>
                            <th>Xóa dữ liệu</th>
                        </tr>
                        <?php foreach($deniedWhitelist as $value) :?>
                        <tr>
                            <td><?= $value['realName']?></td>
                            <td><a onclick="return confirm('Bạn có chắc chắn muốn thêm không?')" href="?act=add-whitelist&name=<?= $value['name']?>">Thêm</a></td>
                            <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="?act=remove-whitelist&name=<?= $value['name']?>">Xóa dữ liệu</a></td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php require_once "views/components/footer.php" ?>
</body>
</html>