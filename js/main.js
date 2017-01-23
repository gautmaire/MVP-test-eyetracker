function getPosition(element)
{
	var left = 0;
	var top = 0;
	/*On récupère l'élément*/
	var e = document.getElementById(element);
	/*Tant que l'on a un élément parent*/
	while (e.offsetParent != undefined && e.offsetParent != null)
	{
		/*On ajoute la position de l'élément parent*/
		left += e.offsetLeft + (e.clientLeft != null ? e.clientLeft : 0);
		top += e.offsetTop + (e.clientTop != null ? e.clientTop : 0);
		e = e.offsetParent;
	}
	return new Array(left,top);
}


$( function() {

	var posP1= getPosition('pTest');

	alert('x : '+posP1[0]+' / y : '+posP1[1]);

	var posP2= getPosition('span');

	alert('x : '+posP2[0]+' / y : '+posP2[1]);

});
