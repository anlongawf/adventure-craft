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
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?= $updateRank["rank_id"]?>" name="rank_id">
            <table>
                <tr>
                    <td><label>Tên rank</label></td>
                    <td><input type="text" value="<?= $updateRank['rank_nameRank']?>" name="nameRank"></td>
                </tr>
                
                <tr>
                    <td><label>Ảnh</label></td>
                    <td><input type="file" name="img"></td>
                </tr>
                <img width="100px" src="../asset/img-ranks/<?= $updateRank['rank_img']?>" alt="">
                <tr>
                    <td><label>Group</label></td>
                    <td><input type="text" value="<?= $updateRank['rank_group']?>" name="group"></td>
                </tr>
                <tr>
                    <td><label>Giá</label></td>
                    <td><input type="number" min="0" value="<?= $updateRank['rank_price']?>" name="price"></td>
                </tr>
                <tr>
                    <td><label>Quyền lợi</label></td>
                    <td><textarea name="quyenLoi" cols="30" rows="10"><?php
                    foreach ($group as $item){
                        echo $item['quyen_loi']."\n";
                    }
                    ?></textarea></td>
                </tr>
            </table>
            <button name="btn_updateRank">Sửa</button>
        </form>
    </div>
    <?php require_once "views/components/footer.php" ?>
</body>
</html>