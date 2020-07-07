$(document).ready(function(){
  $("#logOut").on('click',function(){
    window.location.href = "../lib/endSession.php";
  });
  $("#logOut2").on('click',function(){
    window.location.href = "../lib/endSession.php";
  });

    $(".submenu > a").click(function(e) {
    e.preventDefault();
    var $li = $(this).parent("li");
    var $ul = $(this).next("ul");
    if($li.hasClass("open")) {
      $ul.slideUp(350);
      $li.removeClass("open");
    } else {
      $(".nav > li > ul").slideUp(350);
      $(".nav > li").removeClass("open");
      $ul.slideDown(350);
      $li.addClass("open");
    }
  }); 
});