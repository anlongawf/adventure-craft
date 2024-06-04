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
            <h1>Sửa Pet</h1>
        </div>
        <div>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $pet['pet_id']?>">
                <div>
                    <label for="">Tên pet</label>
                    <input type="text" name="namePet" value="<?= $pet['pet_namePet']?>">
                </div>
                <div>
                    <img width="200px" src="../asset/img-pets/<?= $pet['pet_img']?>" alt="">
                </div>
                <div>
                    <label for="">Ảnh</label>
                    <input type="file" name="img">
                </div>
                <div>
                    <label for="">Giá</label>
                    <input type="number" min="0" name="price" value="<?= $pet['pet_price']?>">
                </div>
                <div>
                   <label>Số lượng skin</label>
                    <textarea name="skin" cols="30" rows="10"><?php
                    foreach ($perm as $item){
                        echo $item['permission']."\n";
                    }
                    ?></textarea>
                </div>
                <div>
                    <label for="">Cưỡi</label>
                    <select name="canRide" id="">
                        <?php
                        $canRide = $pet['pet_canRide'];
                        if ($canRide) {
                            
                            echo "<option value='$canRide'>Có</option>";
                            echo "<option value='0'>Không</option>";
                        } else {
                            echo "<option value='$canRide'>Không</option>";
                            echo "<option value='1'>Có</option>";
                        }
                        
                        ?>
                    </select>
                </div>
                <div>
                    <label for="">Bay</label>
                    <select name="canFly" id="">
                    <?php
                        $canFly = $pet['pet_canFly'];
                        if ($canFly) {
                            
                            echo "<option value='$canFly'>Có</option>";
                            echo "<option value='0'>Không</option>";
                        } else {
                            echo "<option value='$canFly'>Không</option>";
                            echo "<option value='1'>Có</option>";
                        }
                        
                        ?>
                    </select>
                </div>
                <div>
                    <label for="">Permission</label>
                    <input type="text" name="permission" value="<?= $pet['pet_permission']?>">
                </div>
                <button name="btn_updatePet">Sửa pet</button>
            </form>
        </div>
    </div>
    <?php require_once "views/components/footer.php" ?>
</body>
</html>