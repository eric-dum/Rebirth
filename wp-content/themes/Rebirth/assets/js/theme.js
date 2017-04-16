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








  // auto-generate carousel indicator based on aamouunt of slides
  var heroCarousel = $('#carousel-hero');
  heroCarousel.append("<ol class='carousel-indicators'></ol>");
  var indicators = $(".carousel-indicators"); 
  heroCarousel.find('.carousel-inner').children('.item').each(function(index) {
      (index === 0) ? 
      indicators.append("<li data-target='#carousel-hero' data-slide-to='"+index+"' class='active'></li>") : 
      indicators.append("<li data-target='#carousel-hero' data-slide-to='"+index+"'></li>");
  });
    
  //call carousel
  heroCarousel.carousel();
  
  //force first slide active
  $('#carousel-hero .carousel-inner .item').first().addClass('active');







  //faq functions








  //initiate the plugin and pass the id of the div containing gallery images
  $("#work-zoom").elevateZoom({
    gallery:'gal1',
    zoomType: 'inner',
    cursor: 'pointer', 
    galleryActiveClass: 'active', 
    imageCrossfade: true, 
    loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
  }); 

  //pass the images to Fancybox
  $("#work-zoom").bind("click", function(e) {  
    var ez =   $('#work-zoom').data('elevateZoom'); 
    $.fancybox(ez.getGalleryList());
    return false;
  });

});  