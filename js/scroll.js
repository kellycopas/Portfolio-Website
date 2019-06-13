// code based on: https://codepad.co/snippet/YPDXE33r

$(function() {
    $('#arrow').click (function() {
      $('html, body').animate({scrollTop: $('section.about').offset().top }, 'slow');
      return false;
    });
  });

// Arrow to appear to return to top. 
$(window).scroll(function() {
    // If page is scrolled more than 900px
    if ($(this).scrollTop() >= 900) { 
        // Fade in the arrow.       
        $('#arrow-up').fadeIn(200);    
    } else {
        $('#arrow-up').fadeOut(200);   
    }
});

// When arrow is clicked, scroll back to top.
$(function() {
    $('#arrow-up').click (function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop: $('section.hero').offset().top }, 2000);
      return false;
    });
  });