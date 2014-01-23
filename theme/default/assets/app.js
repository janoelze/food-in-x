function redraw_boxes(){

  var cols = Math.floor($(window).width() / 300);

  $('#venues').BlocksIt({
    numOfCol: cols,
    offsetX: 0,
    offsetY: 50,
    blockElement: '.venue'
  });

}

function main(){
  $(window).resize(redraw_boxes);
  redraw_boxes();
}

$(document).ready(main);

$(document).ready(function() {
  $('h1,p,.desc,blockquote').widowFix();
});
