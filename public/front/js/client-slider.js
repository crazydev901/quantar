$(".s-sidebar__nav-link").click(function() {
  console.log('clicked');
  $(".s-sidebar__nav-link").removeClass('s-sidebar__nav-active');
  $(this).addClass('s-sidebar__nav-active');
});