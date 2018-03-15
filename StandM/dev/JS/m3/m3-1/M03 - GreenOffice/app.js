$("body").append("<h1>Goodbye World</h1>");
$("body").prepend("<h1>HelloWorld</h1>");

$("nav a").each(function(){
  console.log($(this));
});
$("nav a").hide();
$("nav a").show();
$("img").fadeOut();
$("img").fadeIn();
$("p").fadeOut().fadeIn();
