var shop = {
    rank: [
        {
            name: "Copper",
            price: 120,
            time: 30,
            donViThoiGian: "d"
        },
        {
            name: "Gold",
            price: 150,
            time: 30,
            donViThoiGian: "d"
        }
    ],
    pet: [
        {
            srcImage: "asset/img-pets/Assassin.png",
            realName: "assassin",
            namePet: "Assassin",
            skinAmount: 0,
            canRide: false,
            canFly: false,
            price: 35,
            permission: "pet.zombie"
        },
        {
            srcImage: "asset/img-pets/Capybara.png",
            realName: "capybara",
            namePet: "Capybara",
            skinAmount: 0,
            canRide: true,
            canFly: false,
            price: 60,
            permission: "pet.creeper"
        }
    ]
};
document.addEventListener('DOMContentLoaded', function () {
    const cardContainer = document.getElementById('cardss');

    for (let i = 0; i < shop.pet.length; i++) {
        const card = document.createElement('div');
        card.className = 'card';

        const Fly = shop.pet[i].canFly ? '<i class="fa-solid fa-x"></i>' : '<i class="fa-solid fa-check"></i>';
        const Ride = shop.pet[i].canRide ? '<i class="fa-solid fa-x"></i>' : '<i class="fa-solid fa-check"></i>';
        const cardHTML = `
            <img src="${shop.pet[i].srcImage}" alt="">
            <div class="card-content">
                <h2>${shop.pet[i].namePet}</h2>
                <p><span>Skin:&nbsp</span><span>${shop.pet[i].skinAmount}</span></p>
                <p><span>Thú cưỡi:&nbsp</span><span>${Ride}</span></p>
                <p><span>Có thể bay:&nbsp</span><span>${Fly}</span></p>
                <br>
                <p><strong><span>Giá bán:&nbsp</span><span>${shop.pet[i].price}</span><span>&nbspxu</span></strong></p>
            </div>
            <button class="buy-button btn btn-dark" type="button" onclick="buyPet('${shop.pet[i].realName}')">Mua</button>
        `;

        card.innerHTML = cardHTML;
        cardContainer.appendChild(card);
    }
});
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
