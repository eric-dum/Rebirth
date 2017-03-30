$(function() {

  //mobile nav toggle
  $('.navbar-toggle').on('click', function() {
    $(this).toggleClass('active')
    $('#primary-nav-items').toggleClass('active');
  });



  //jersey carousel
  var item =        $('.marquee-item');
  var container =   $('.nav-container');
  var itemWidth =   item.outerWidth(); //Width of each element

  var index =       0; //Starting index
  var endIndex =    item.length - 1; //End index

  //Set active class to vehicle based on data-vehicle attribute on body
  //$('.vehicle[data-vehicle="' + activeVehicle + '"]').addClass('active');


  //Set width of container based on number of elements
  container.width((itemWidth * item.length));


  //Add index value for each element as data attribute
  $(item).each(function() {
    $(this).attr('data-index', $(this).index());
  });



  //adds a class to currently active element
  function activeIndex() {
    item.removeClass('active');
    $('.marquee-item[data-index="' + index + '"]').addClass('active');
  }



  //Next/Prev Arrows
  $('.btn-next').on('click', function() {
    if (index < endIndex) {
      index++;
      activeIndex();
      container.animate({left:'-=' + itemWidth + 'px'});
      console.log(index);
    }
  });

  $('.btn-prev').on('click', function() {
    if (index > 0) {
      index--;
      activeIndex();
      container.animate({left: '+=' + itemWidth + 'px'});
    }
  });

});  