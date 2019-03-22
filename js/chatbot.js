var chatbot_open = false;
function expand()
{
	if (chatbot_open == false)
	{
		$("#chatbot").animate({bottom: "0"});
		$("#icon").removeClass("fa-chevron-up");
		$("#icon").addClass("fa-chevron-down");
		chatbot_open = true;
	}
  	else if(chatbot_open == true)
  	{
  		$("#chatbot").animate({bottom: "-456px"});
  		$("#icon").removeClass("fa-chevron-down");
		$("#icon").addClass("fa-chevron-up");
  		chatbot_open = false;
  	}
}

$("#submit").click(function(){
	var name = $("#fname").val();
	var mob = $("#mob").val();
	var mail = $("#mail").val();
	$("#form").hide();
	$("#apn_name").append(name);
	$("#first").css({
		"transition":"0.5s",
	    "opacity":"0",
	    "display":"block",
	}).show().animate({opacity:1})
	$("#cards").css({
		"transition":"0.5s",
	    "opacity":"0",
	    "display":"block",
	}).show().animate({opacity:1})
});

$("input[name=1-help]").on('change', function () {
    var help = this.id;
    console.log(help);
    $("#card_name").append(help);
    $("#cards").hide();
    $("#user").css({
		"transition":"0.5s",
	    "opacity":"0",
	    "display":"block",
	}).show().animate({opacity:1})
	$("#fake").css({
		"transition":"0.5s",
	    "opacity":"0",
	    "display":"block",
	}).delay(1500).animate({opacity:1})
});
