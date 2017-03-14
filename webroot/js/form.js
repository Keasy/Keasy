$( "#connexionOn" ).click(function() {
  $('.fil').addClass('filter');
  $('.wrapper').css('display', 'flex');
  $('.coco').css('position', 'fixed');
  $('.coco').css('display', 'flex');
});

$( "#inscriptionOn" ).click(function() {
  $('.fil').addClass('filter');
  $('.wrapper2').css('display', 'flex');
  $('.coco2').css('position', 'static');
  $('.coco2').css('width', '600px');
  $('.coco2').css('margin-top', '200px');
  $('.coco2').css('display', 'flex');
});
