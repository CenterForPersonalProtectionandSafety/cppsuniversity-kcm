function scrollToAnchor(aid){
    var aTag = $("section[id='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$("#link_about").click(function() {
   scrollToAnchor('aboutus');
});

$("#link_course").click(function() {
   scrollToAnchor('aboutus');
});
