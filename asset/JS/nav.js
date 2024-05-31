$(document).ready(function () {
  $('.right').click(function () {
    $('.nav-right').slideToggle();
  });
});
$(document).ready(function () {
  // Kiểm tra nếu đây là thiết bị di động
  if ($(window).width() <= 650) {
    // Thiết lập sự kiện click cho .lef chỉ trên thiết bị di động
    $('.lef').click(function () {
      $('.nav-left').slideToggle();
    });
  }
});

$(document).ready(function () {
  $('.top-ingame').click(function () {
    $('.sub-menu').fadeToggle();
  });
});
