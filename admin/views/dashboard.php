<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once "views/component/navbar.php" ?>
    <div>
        <div>
            <h1>Danh sách Rank</h1>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Tên rank</th>
                <th>Ảnh</th>
                <th>Group</th>
                <th>Giá</th>
            </tr>
            <?php foreach ($rank as $value):?>
                <tr>
                    <td><?= $value['rank_id']?></td>
                    <td><?= $value['rank_nameRank']?></td>
                    <td><img src="<?= $value['rank_img']?>" alt=""></td>
                    <td><?= $value["rank_group"]?></td>
                    <td><?= $value['rank_price']?></td>
                </tr>
            <?php endforeach;?>
        </table>
        <div>
            <h1>Danh sách Pet</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Tên pet</th>
                    <th>Ảnh</th>
                    <th>Giá</th>
                    <th>Skin</th>
                    <th>Cưỡi</th>
                    <th>Bay</th>
                    <th>Quyền</th>
                </tr>
                <?php foreach($pet as $item):?>
                    <tr>
                        <td><?= $item['pet_id']?></td>
                        <td><?= $item['pet_namePet']?></td>
                        <td><img src="<?= $item['pet_img']?>" alt=""></td>
                        <td><?= $item['pet_price']?></td>
                        <td><?= $item['pet_skinAmount']?></td>
                        <td><?= $item['pet_canRide']?></td>
                        <td><?= $item['pet_canFly']?></td>
                        <td><?= $item['pet_permission']?></td>
                    </tr>
                <?php endforeach?>
            </table>
        </div>
    </div>
    <?php require_once "views/component/footer.php" ?>
</body>
</html>