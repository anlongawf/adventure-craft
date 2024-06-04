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
            <h1>Thêm Pet</h1>
        </div>
        <div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div>
                    <label>Tên pet</label>
                    <input type="text" name="namePet" required>
                </div>
                <div>
                    <label>Ảnh pet</label>
                    <input type="file" name="img" required>
                </div>
                <div>
                    <label>Permission của pet</label>
                    <input type="text" required name="permission">
                </div>
                <div>
                    <label>Giá</label>
                    <input type="number" min="0" name="price" required>
                </div>
                <div>
                    <label>Số lượng skin</label>
                    <input type="number"   min="0" name="skinAmount" required>
                </div>
                <div>
                    <label>Có thể cưỡi</label>
                    <select name="canRide" id="" required >
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                    </select>
                </div>
                <div>
                    <label>Có thể bay</label>
                    <select name="canFly" required>
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                    </select>
                </div>
                <button name="btn_insertPet">Thêm pet</button>
            </form>
        </div>
    </div>
    <?php require_once "views/components/footer.php" ?>
</body>
</html>