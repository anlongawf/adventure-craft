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
            <button><a href="?act=insert-rank">Thêm rank</a></button>
            <button><a href="?act=insert-pet">Thêm pet</a></button>
        </div>
        <div>
            <h1>Danh sách Rank</h1>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Tên rank</th>
                <th>Ảnh</th>
                <th>Group</th>
                <th>Giá</th>
                <th>Quyền lợi</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <?php foreach ($rank as $value):?>
                <tr>
                    <td><?= $value['rank_id']?></td>
                    <td><?= $value['rank_nameRank']?></td>
                    <td><img width="100px" src="../asset/img-ranks/<?= $value['rank_img']?>" alt=""></td>
                    <td><?= $value["rank_group"]?></td>
                    <td><?= $value['rank_price']?></td>
                    <td>
                        <?php
                            require_once "commons/function.php";
                            $group = $value["rank_group"];
                            $quyenLoi = connectDatabase()->query("SELECT quyen_loi FROM quyenloi where rank_group = '$group'")->fetchAll();
                            foreach ($quyenLoi as $item){
                                echo "<p>".$item['quyen_loi']."</p>";
                            }
                                
                        
                        ?>
                        
                    </td>
                    <td><button><a href="?act=update-rank&id=<?= $value['rank_id']?>">Sửa</a></button></td>
                    <td><button onclick="return confirm('Bạn có chắc chắn muốn xóa không?????')"><a href="?act=delete-rank&id=<?= $value['rank_id']?>">Xóa</a></button></td>
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
                    <th>Sửa</th>
                    <th>Xóa</th>
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
                        <td><button><a href="?act=update-pet&id=<?= $item['pet_id']?>">Sửa</a></button></td>
                        <td><button onclick="return confirm('Bạn có chắc chắn muốn xóa không?????')"><a href="?act=delete-pet&id=<?= $item['pet_id']?>">Xóa</a></button></td>
                    </tr>
                <?php endforeach?>
            </table>
        </div>
    </div>
    <?php require_once "views/components/footer.php" ?>
</body>
</html>