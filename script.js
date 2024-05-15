const listRank = [
  { id: 1, group: 'staff', price: 200, thoiGian: 30, donViThoiGian: 'd' },
  { id: 2, group: 'trader', price: 150, thoiGian: 15, donViThoiGian: 'm' },
  { id: 3, group: 'default', price: 100, thoiGian: 60, donViThoiGian: 's' },
];
function handleResponse(response, id) {
  var ketQua = document.getElementById(id);
  ketQua.innerHTML = response;
}
function handleResponseClass(response, lop) {
  var ketQua = document.getElementsByClassName(lop);
  for (let i of ketQua) {
    i.innerText = response;
  }
}
// function checkLogin() {
//   data = 'login=false';
//   console.log(data);
//   sendHttpRequest('backend\check-login.php', 'POST', data, function (response) {
//     response = response.substr(0, 4);
//     console.log(response);
//     if (response !== 'true') {
//       logout = document.getElementsByClassName('log-out');
//       for (let i of logout) {
//         i.style.display = 'none';
//       }
//     } else {
//       login = document.getElementsByClassName('log-in');
//       for (let i of login) {
//         i.style.display = 'none';
//       }
//       register = document.getElementsByClassName('register');
//       for (let i of register) {
//         i.style.display = 'none';
//       }
//     }
//   });
// }
function loadWeb() {
  // point();
  // checkLogin();
}
function sendHttpRequest(url, method, data, callback) {
  var xhr = new XMLHttpRequest();
  xhr.open(method, url, true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      callback(xhr.responseText);
    }
  };
  xhr.send(data);
}

function buyRank(rank) {
  document.getElementById('ketQua').innerText = ' ';
  if (rank === 'default') {
    rankMember = 'member';
  } else {
    rankMember = rank;
  }
  var checkPoint = document.getElementById('points').innerText;
  for (let rankName of listRank) {
    if (rankName.group === rank) {
      if (checkPoint >= rankName.price) {
        var check = confirm(
          'Bạn có chắc chắn mua rank ' + rankMember + ' không'
        );
        if (check) {
          var data =
            'rank=' +
            rankName.group +
            '&price=' +
            rankName.price +
            '&time=' +
            rankName.thoiGian +
            '&donViThoiGian=' +
            rankName.donViThoiGian;
          sendHttpRequest('shop2.php', 'POST', data, function (response) {
            handleResponse(response, 'ketQua');
          });
        }
      } else {
        document.getElementById('ketQua').innerText = 'Không đủ point';
      }
    }
  }
}

// function point() {
//   var data = 'point=checkPoint';
//   sendHttpRequest('shop2.php', 'POST', data, function (response) {
//     var ketQua = document.getElementsByClassName('point');
//     for (let i of ketQua) {
//       i.innerText = response;
//     }
//   });
// }
