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

		$("#courses").append("<div class=\"row courseRow\"><div class=\"form-group col-xs-12 col-sm-3\"><label for=\"cId" + courseCounter + "\">Course ID</label><input type=\"text\" class=\"form-control\" id=\"cId" + courseCounter + "\" placeholder=\"ex: MECH207\"></div><div class=\"form-group col-xs-12 col-sm-6\"><label for=\"courseInput\">Course Title</label><input type=\"text\" class=\"form-control\" id=\"cTitle" + courseCounter + "\" placeholder=\"ex: Mechanical Systems\"></div><div class=\"form-group col-xs-12 col-sm-2\"><label for=\"creditInput\"># of Credits</label><input type=\"text\" class=\"form-control creditInput\" class=\"cCredit" + courseCounter + "\" id=\"cCredit" + courseCounter + "\" placeholder=\"ex: 4\"></div><div class=\"form-group col-xs-12 col-sm-1\"><button class=\"btn  btn-danger removeRow\" type=\"button\">Remove</button></div></div>");

		courseCounter++;
	});

	$(document.body).on('change', '.creditInput', function() 
	{
		updateTotal();
	});

	$(document.body).on('change', '#associationFeeCheck', function() 
	{
		updateTotal();
	});

	$(document.body).on('click', '.removeRow', function(e)
	{
		// make the page not reload on button click
		e.preventDefault();

		$(".courseRow:last").remove();
	});

	if (location.hash.substr(1) == "triggerFinalScreen")
	{
		location.hash = "";
		$(".hideOnLastScreen").hide();
		$(".lastScreen").show();
	}
});

function updateTotal()
{
	var totalUnits = 0;
	$(".creditInput").each(function() {
		var currentVal =  parseInt($(this).val());
		if (isNaN(currentVal))
		{
			currentVal = 0;
		}
    	totalUnits = (totalUnits + currentVal);
	});

	if (isNaN(totalUnits))
	{
		$("#totalUnits").text("0");
	}
	else if (totalUnits > 8)
	{
		totalUnits = 8;
		$("#totalUnits").text(totalUnits + " (max. allowed)");
	}
	else 
	{
		$("#totalUnits").text(totalUnits);
	}

	var totalCash = totalUnits * 928;

	if ($("#associationFeeCheck:checked").length > 0)
	{
		totalCash += 150;
	}

	$("#totalCash").text(totalCash);

}