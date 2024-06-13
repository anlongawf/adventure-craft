
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

// function buyRank(item) {
//   var viTri = 0;
//   for (let i = 0; i < shop.rank.length; i++) {
//     if (shop.rank[i].group === item) {
//       viTri = i;
//       break;
//     }
//   }
//   sendData(
//     'backend/PHP/check-point.php',
//     'POST',
//     'data_here',
//     function (error, response) {
//       if (error) {
//         console.error('Đã xảy ra lỗi:', error);
//       } else {
//         priceRank = shop.rank[viTri].price;
//         if (response >= priceRank) {
//           check = confirm('Bạn có chắc chắn muốn mua rank ' + item + ' không?');
//           if (check) {
//             console.log('check');
//             sendData(
//               'backend/PHP/shop.php',
//               'POST',
//               'buyRank=true&rank=' + item + '&price=' + priceRank,
//               function (error, res) {
//                 if (error) {
//                   console.error('Đã xảy ra lỗi:', error);
//                 } else {
//                   console.log(res);
//                 }
//               }
//             );
//           } else {
//             console.log('noo');
//           }
//         } else {
//           alert('Không đủ số point');
//         }
//       }
//     }
//   );
// }
function buyRank(item){
  sendData("backend/PHP/buyRank.php","POST",`buyRank=${item}`,function (error,response){
    if(error){
      console.log("Đã xảy ra lỗi");
    } else {
      response = JSON.parse(response);
      sendData("backend/PHP/check-point.php","POST",'check-point',function (err,res){
        if(err){
          console.log("Đã xảy ra lỗi");
          
        } else {
          // res là số points của người chơi
          // response.rank_price là giá points của rank
          if (parseInt(res) >= parseInt(response.rank_price)){
            Swal.fire({
              title: "Bạn có chắc chắn muốn mua không",
              text: `Nếu mua bạn sẽ bị trừ ${response.rank_price} xu và nhận được rank ${response.rank_nameRank}`,
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Có",
              cancelButtonText: "Không",
            }).then((result) => {
              if (result.isConfirmed) {
                Swal.fire({
                  title: "Thành công",
                  text: `Bạn đã mua rank ${response.rank_nameRank} thành công`,
                  icon: "success"
                });
                sendData("backend/PHP/shop.php","POST",`buyRank=${item}`,function(e,r){
                  if (e){
                    console.log("Đã có lỗi xảy ra");
                  } else {
                    
                  }
                })
                
              }
            });
          } else {
            Swal.fire({
              icon: "error",
              title: "Mua thất bại",
              text: "Bạn không đủ points",
            });
          }
          
        }
      })
    }
  })
}
function buyPet(item) {
  sendData(
    'backend/PHP/check-point.php',
    'POST',
    'data_here',
    function (error, response) {
      if (error) {
        console.error('Đã xảy ra lỗi:', error);
      } else {
        pricePet = shop.pet[item].price;
        if (response >= pricePet) {
          check = confirm('Bạn có chắc chắn muốn mua pet', item, 'không?');
          if (check) {
            sendData(
              'backend/PHP/shop.php',
              'POST',
              'buyPet=true&pet=' + item + '&price=' + pricePet,
              function (error, response) {
                if (error) {
                  console.error('Đã xảy ra lỗi:', error);
                } else {
                  console.log(response);
                }
              }
            );
          }
        } else {
          alert('Không đủ points');
        }
      }
    }
  );
}
