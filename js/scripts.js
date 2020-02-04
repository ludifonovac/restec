/*
// Header menu for responsive
*/
jQuery(function ($) {
	$(document).ready(function(){
		$("div.navicon").click(function(){
			$(".menu-top-menu-container").toggle('collapse');
      $(".menu-translations-container").toggle('collapse');
			$("div.navicon").toggleClass('open');
		});
	});
});
jQuery(function ($) {
  $(document).ready(function(){
    $(".language-link a").click(function(event){
      event.stopPropagation();
      $("div.translations-modal").toggle('collapse');
    });
    $(".modal-content").on("click", function (event) {
        event.stopPropagation();
    });
    $(".modal-content .close").click(function(event){
      event.stopPropagation();
      $("div.translations-modal").toggle('collapse');
    });
  });
  $("div.translations-modal").on("click", function () {
    $("div.translations-modal").toggle('collapse');
  });
});
jQuery(function ($) {
  $('#ISCarousel').carousel({
    interval: 4000
  })

  $('.carousel item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
      next=next.next();
      if (!next.length) {
      	next = $(this).siblings(':first');
    	}
      
      next.children(':first-child').clone().appendTo($(this));
    }
  });
});
jQuery(function ($) {
  $(".main-navigation ul li").hover(function(){
      $("div.grayed").toggle();
  });
  $(".main-navigation ul ul>li").hover(function(){
      $("div.grayed").toggle();
  });
});
