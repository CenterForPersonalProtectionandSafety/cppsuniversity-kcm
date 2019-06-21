function scrollToAnchor(aid){
    var aTag = $("section[id='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$("#link_about").click(function() {
   scrollToAnchor('aboutus');
});

$("#link_course").click(function() {
   scrollToAnchor('courseCards');
});




function stopVideoBL() {
  var $frame = $('iframe#bl-course');

  // saves the current iframe source
  var vidsrc = $frame.attr('src');

  // sets the source to nothing, stopping the video
  $frame.attr('src', '');

  // sets it back to the correct link so that it reloads immediately on the next window open
  $frame.attr('src', vidsrc);
}

$('#BLModal').on('hidden.bs.modal', function(e) {
  stopVideoBL();
})

function stopVideoFPDP() {
  var $frame = $('iframe#fpdp-course');

  // saves the current iframe source
  var vidsrc = $frame.attr('src');

  // sets the source to nothing, stopping the video
  $frame.attr('src', '');

  // sets it back to the correct link so that it reloads immediately on the next window open
  $frame.attr('src', vidsrc);
}

$('#FPDPModal').on('hidden.bs.modal', function(e) {
  stopVideoFPDP();
})

function stopVideoSP() {
  var $frame = $('iframe#sp-course');

  // saves the current iframe source
  var vidsrc = $frame.attr('src');

  // sets the source to nothing, stopping the video
  $frame.attr('src', '');

  // sets it back to the correct link so that it reloads immediately on the next window open
  $frame.attr('src', vidsrc);
}

$('#SPLModal').on('hidden.bs.modal', function(e) {
  stopVideoSP();
})

function stopVideoWLS() {
  var $frame = $('iframe#wls-course');

  // saves the current iframe source
  var vidsrc = $frame.attr('src');

  // sets the source to nothing, stopping the video
  $frame.attr('src', '');

  // sets it back to the correct link so that it reloads immediately on the next window open
  $frame.attr('src', vidsrc);
}

$('#WLSModal').on('hidden.bs.modal', function(e) {
  stopVideoWLS();
})
