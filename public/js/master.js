$(document).ready(function() {
    var panelOne = $('.gssform-panel.two').height(),
      panelTwo = $('.gssform-panel.two')[0].scrollHeight;
  
    $('.gssform-panel.two').not('.gssform-panel.two.active').on('click', function(e) {
      e.preventDefault();
  
      $('.gssform-toggle').addClass('visible');
      $('.gssform-panel.one').addClass('hidden');
      $('.gssform-panel.two').addClass('active');
      $('.gssform').animate({
        'height': panelTwo
      }, 200);
    });
  
    $('.gssform-toggle').on('click', function(e) {
      e.preventDefault();
      $(this).removeClass('visible');
      $('.gssform-panel.one').removeClass('hidden');
      $('.gssform-panel.two').removeClass('active');
      $('.gssform').animate({
        'height': panelOne
      }, 200);
    });
  });