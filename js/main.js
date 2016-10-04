function handleRadioClick(myRadio)
{
	if (myRadio.value == "ta")
	{
		// hide
		$('#raFundingSource').hide();
	}
	else
	{
		// show
		$('#raFundingSource').show();

	}
}