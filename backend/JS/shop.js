var shop = {
    rank : {
        copper: {
            name: "Copper",
            price: 120,
            time: 30,
            donViThoiGian: "d"
        },
        gold: {
            name: "Gold",
            price: 150,
            time: 30,
            donViThoiGian: "d"
        }
    },
    pet : {
        pet1: {
            name: "Zombie",
            price: 50,
            permission: "pet.zombie"
        },
        pet2: {
            name: "Creeper",
            price: 150,
            permission: "pet.creeper"
        }
    }
}
function sendData(url, method, data, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                callback(null, xhr.responseText); // Không có lỗi, trả về kết quả
            } else {
                callback(xhr.status); // Trả về mã lỗi nếu có lỗi xảy ra
            }
        }
    };
    xhr.send(data);
}

// Khởi tạo một biến để lưu kết quả

// Sử dụng hàm sendData
// sendData('backend/PHP/check-point.php', 'POST', 'data_here', function(error, response) {
//     if (error) {
//         console.error('Đã xảy ra lỗi:', error);
//     } else {
//         console.log('Kết quả:', response);
//     }
// });
// Bây giờ, bạn có thể sử dụng giá trị của responseData ở đây sau khi request hoàn thành
function buyRank(item) {
    sendData('backend/PHP/check-point.php', 'POST', 'data_here', function(error, response) {
        if (error) {
            console.error('Đã xảy ra lỗi:', error);
        } else {
            priceRank = shop.rank[item].price;
            if (response>=priceRank){
                check = confirm("Bạn có chắc chắn muốn mua rank "+item+" không?")
                if (check){
                    console.log("check");
                    sendData('backend/PHP/shop.php','POST',"buyRank=true&rank="+item+"&price="+priceRank,function(error, res){
                        if (error){
                            console.error("Đã xảy ra lỗi:",error);
                        } else {
                            console.log(res);
                        }
                    })
                } else {
                    console.log("noo");
                }
            } else {
                alert("Không đủ số point");
            }
        }
    });
}
function buyPet(item){
    sendData('backend/PHP/check-point.php','POST','data_here',function (error,response){
        if (error){
            console.error("Đã xảy ra lỗi:",error);
        } else {
            pricePet = shop.pet[item].price;
            if (response >= pricePet){
                check = confirm("Bạn có chắc chắn muốn mua pet",item,"không?");
                if (check){
                    sendData("backend/PHP/shop.php",'POST','buyPet=true&pet='+item+"&price="+pricePet,function (error,response){
                        if (error){
                            console.error("Đã xảy ra lỗi:",error);
                        } else {
                            console.log(response);
                        }
                    })
                }
            } else {
                alert("Không đủ points");
            }
        }
    })
}
