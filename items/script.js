$(document).ready(function () {
  /*$(".section").click(function () {
    var clicked = $(this);
    $(".section").each(function(index, element){
      if(!$(element).is(clicked))
      {
        $(element).css('display', 'none');
      }
    });
    console.log(clicked.find("figcaption").text());
    $("#categorie").val(clicked.find("figcaption").text());
  });*/


  $('.highlight').click(function(){
    var clicked = $(this);
    $("#vetements span").css('border-width', '7px');
    $("#decoration span").css('border-width', '2px');
    $("#food span").css('border-width', '2px');
    $("#categorie").val("vetements");
    //alert($("#categorie").val());
  });
  $('.highlight1').click(function(){
    var clicked = $(this);
    $("#decoration span").css('border-width', '7px');
      $("#vetements span").css('border-width', '2px');
    $("#food span").css('border-width', '2px');
    $("#categorie").val("decoration");
    //alert($("#categorie").val());
  });
  $('.highlight2').click(function(){
    var clicked = $(this);
    $("#decoration span").css('border-width', '2px');
      $("#vetements span").css('border-width', '2px');
    $("#food span").css('border-width', '7px');
    $("#categorie").val("food");
    //alert($("#categorie").val());
  });
});
//$('img').click(function(){

//});
