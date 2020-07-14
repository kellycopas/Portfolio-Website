// Code for scrolling down and back to top of page, based on: https://codepad.co/snippet/YPDXE33r

// When down arrow is clicked, scroll to first section of page content.
$(function() {
    $('#arrow').click (function(e) {
    	e.preventDefault();
      $('html, body').animate({scrollTop: $('div.top').offset().top }, 'slow');
      return false;
    });
  });

// Arrow to appear to return to top. 
$(window).scroll(function() {
    // If page is scrolled more than 1000px
    if ($(this).scrollTop() >= 1000) { 
        // Fade in the arrow.       
        $('#arrow-up').fadeIn(200);    
    } else {
        $('#arrow-up').fadeOut(200);   
    }
});
// When arrow is clicked, scroll back to section 1.
$(function() {
    $('#arrow-up').click (function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop: $('div.top').offset().top }, 2000);
      return false;
    });
  });
