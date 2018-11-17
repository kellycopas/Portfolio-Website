// code based on: https://codepad.co/snippet/YPDXE33r

$(function() {
    $('#arrow').click (function() {
      $('html, body').animate({scrollTop: $('section.about').offset().top }, 'slow');
      return false;
    });
  });