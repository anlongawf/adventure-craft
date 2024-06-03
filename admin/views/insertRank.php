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
            <h1>Thêm rank</h1>
        </div>
        <div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <label>Tên rank</label>
                    <input type="text" name="nameRank" required>
                </div>
                <div>
                    <label for="">Ảnh</label>
                    <input type="file" name="img" required>
                </div>
                <div>
                    <label for="">Group</label>
                    <input type="text" name="group" required>
                </div>
                <div>
                    <label>Giá</label>
                    <input type="number" name="price" min="0" required>
                </div>
                <button name="btn_insertRank">Thêm</button>
            </form>
        </div>
    </div>
    <?php require_once "views/components/footer.php" ?>
</body>
</html>