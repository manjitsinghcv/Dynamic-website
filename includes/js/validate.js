
	
$(document).ready( function() {
	$('#emailForm').submit( function() {
		if( !FirstName( this.fname.value ) ) {
			return false;
		}
	});
});
$(document).ready( function() {
	$('#emailForm').submit( function() {
		if( !SurName( this.sname.value ) ) {
			return false;
		}
	});
});



function FirstName(string)
{
	// A variable containing a regular expression representing FirstName
	var FirstNameString = /^[a-z][a-z0-9_\.]{0,24}$/; 

	if (FirstNameString.test(string))
	{
		return true;
	}
	else 
	{
		alert("Please enter a  valid Firstname.");
		return false; // Stops form details from being submitted
	}
}
function SurName(string)
{
	// A variable containing a regular expression representing FirstName
	var FirstNameString = /^[a-z][a-z0-9_\.]{0,24}$/; 

	if (FirstNameString.test(string))
	{
		return true;
	}
	else 
	{
		alert("Please enter a  valid SurName.");
		return false; // Stops form details from being submitted
	}
}
