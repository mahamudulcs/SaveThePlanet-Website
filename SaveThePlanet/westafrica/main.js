// Nav bar
$(document).ready(function(){
 $('.toggle').click(function(){
     $('.toggle').toggleClass('active')
     $('nav ul').toggleClass('active-menu') 
    })
});

// Map Pop-up Info box
$("a").hover(function(e) {
    $("#info-box").css("display", "block");
    $("#info-box").html($(this).data("info"));
  });
  
  $("a").mouseleave(function(e) {
    $("#info-box").css("display", "none");
  });
  
  $(document)
    .mousemove(function(e) {
      $("#info-box").css("top", e.pageY - $("#info-box").height() - 30);
      $("#info-box").css("left", e.pageX - $("#info-box").width() / 2);
    })
    .mouseover();
  
  