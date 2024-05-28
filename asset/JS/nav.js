$(document).ready(function () {
  $('.right').click(function () {
    $('.nav-right').slideToggle();
  });
});
$(document).ready(function () {
  $('.lef').click(function () {
    $('.nav-left').toggleClass('active'); // Thêm hoặc loại bỏ class .active
  });
});
