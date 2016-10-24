function handleRadioClick(myRadio)
{
	if (myRadio.value == "ta")
	{
		$('#raFundingSource').hide();
		$('#taPercentFTE').show();
	}
	else
	{
		$('#raFundingSource').show();
		$('#taPercentFTE').hide();
	}
}
$(document).ready(function(e)
{
	// add another course section to the page
	$("#addCourse").on("click", function(e)
	{
		// make the page not reload on button click
		e.preventDefault();

		$("#courses").append("<div class=\"form-group col-xs-12 col-sm-3\"><label for=\"cIdInput\">Course ID</label><input type=\"text\" class=\"form-control\" id=\"cIdInput\" placeholder=\"ex: MECH207\"></div><div class=\"form-group col-xs-12 col-sm-6\"><label for=\"courseInput\">Course Title</label><input type=\"text\" class=\"form-control\" id=\"courseInput\" placeholder=\"ex: Mechanical Systems\"></div><div class=\"form-group col-xs-12 col-sm-3\"><label for=\"creditInput\"># of Credits</label><input type=\"text\" class=\"form-control\" id=\"creditInput\" placeholder=\"ex: 4\"></div>");
	});
});
