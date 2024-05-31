$(document).ready(function () {
  $('.right').click(function () {
    $('.nav-right').slideToggle();
  });
});
$(document).ready(function () {
  $('.lef').click(function () {
    $('.nav-left').toggleClass('active');
  });
});

$(document).ready(function () {
  $('.top-ingame').click(function () {
    $('.sub-menu').slideToggle();
  });
});
