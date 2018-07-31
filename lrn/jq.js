$(document).ready(function()
{
  $(window).scroll(function()
  {
    if ($(this).scrollTop() > 500 )
    {
      $("#scr").fadeIn();
    }
    else
    {
      $("#scr").fadeOut();}
    });

$("#scr").click (function()
{
  $("body,html").animate({scrollTop:0},1200);
    return false;
  });

//------------hover function
    $(".down").hover(function()
	{
		$(this).children(".menu").slideDown();
		}, function()
	{
		$(this).children(".menu").slideUp();
		});


//----------------------common height contact
var common_height=0;
var col1=$(".loc");
var col2=$(".cfrm");

if ($(col1).height() > $ (col2).height() )
{
	common_height=$(col1).height()
}
else
{
	common_height=$(col2).height()
}
  $(".loc").css('min-height',common_height);
  $(".cfrm").css('min-height',common_height);


//---------------form validate

 $("form").submit(function()
	{
        var mob = /^[1-9]{1}[0-9]{9}$/;
		
        var enteredValue = $(".tl").val();
		
        if(mob.test(enteredValue) == false && enteredValue != 10)
		{
            $(".cfrm").html("<b>Invalid mobile number</b>").css("color","red").show();
        } else{
            $(".cfrm").html("<b>welcome to negi website</b>").css("color","red").show();
        }
        event.preventDefault();
    });
    
 //----------toggle function
 $(".downslb").click(function()
{
  
  $(".oss").slideToggle('slow');
 
  return false;})
  

  

 
//----------call slide

  $(".cll ").click(function()
{
  $(".clm").fadeToggle('slow');
//  $("#side2").toggle('slow');
  return false;

});



 // Prevent console.log from generating errors in IE for the purposes of the demo
            if ( ! window.console ) console = { log: function(){} };

            // The actual plugin
            $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
           
         });

         $(".mobi").click(function()
{
  
  $(".navm").slideToggle('slow');
 
  return false;})
  

         });
  

 