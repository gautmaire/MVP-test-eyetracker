function mouse_position(event)
{
	console.log("CA MARCHE");
}

$( function() {

	var posP1= getPosition('pTest');

	alert('x : '+posP1[0]+' / y : '+posP1[1]);

	var posP2= getPosition('span');

	alert('x : '+posP2[0]+' / y : '+posP2[1]);

});
