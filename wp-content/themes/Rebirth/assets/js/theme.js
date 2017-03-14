$(function() {

  //mobile nav toggle
  $('.navbar-toggle').on('click', function() {
    $(this).toggleClass('active')
    $('#primary-nav-items').toggleClass('active');
  });

});  