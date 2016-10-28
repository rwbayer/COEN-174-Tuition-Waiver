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
	var courseCounter=1;
	updateTotal();
	// add another course section to the page
	$("#addCourse").on("click", function(e)
	{
		// make the page not reload on button click
		e.preventDefault();

		$("#courses").append("<div class=\"form-group col-xs-12 col-sm-3\"><label for=\"cId" + courseCounter + "\">Course ID</label><input type=\"text\" class=\"form-control\" id=\"cId" + courseCounter + "\" placeholder=\"ex: MECH207\"></div><div class=\"form-group col-xs-12 col-sm-6\"><label for=\"courseInput\">Course Title</label><input type=\"text\" class=\"form-control\" id=\"cTitle" + courseCounter + "\" placeholder=\"ex: Mechanical Systems\"></div><div class=\"form-group col-xs-12 col-sm-3\"><label for=\"creditInput\"># of Credits</label><input type=\"text\" class=\"form-control\" class=\"cCredit" + courseCounter + "\" id=\"cCredit" + courseCounter + "\" placeholder=\"ex: 4\"></div>");
	});

	$(".creditInput").each(function()
	{
			$(this).change(function() {
				updateTotal();
			});
	});
});

function updateTotal()
{
	var totalUnits = 0;
	$(".creditInput").each(function() {
		console.log($(this).val());
    	totalUnits += $(this).val();
	});

	if (totalUnits > 8)
	{
		totalUnits = 8;
		$("#totalUnits").text(totalUnits + " (max. allowed)");
	}
	else
	{
		$("#totalUnits").text(totalUnits);
	}

	var totalCash = totalUnits * 928;


	$("#totalCash").text(totalCash);

}