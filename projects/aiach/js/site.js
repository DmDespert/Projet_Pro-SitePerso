//document.onmousedown	= function(){return false;};
//document.oncontextmenu	= function(){return false;};
window.onload		= firstLoad();


function firstLoad()
{
	SalarieEmployeurDelegue();
	document.getElementById('boutonEnvoi').onclick = afficherModalCaptcha;
}

function	SalarieEmployeurDelegue()
{
	var sal = document.getElementById('salarie');
	var emp = document.getElementById('employeur');
	var del = document.getElementById('representant');
	var choice = document.getElementById('choiceZone');
	
	var els = document.getElementsByClassName('choice1');
	for (var i = 0; i < els.length; ++i)
		els[i].onclick	= function()
				{	
					sal.style.display	= "block";
					emp.style.display	= "none";
					del.style.display	= "none";
					choice.style.display	= "none";
				};
	
	var els = document.getElementsByClassName('choice2');
	for (var i = 0; i < els.length; ++i)
		els[i].onclick	= function()
				{	
					sal.style.display	= "none";
					emp.style.display	= "block";
					del.style.display	= "none";
					choice.style.display	= "none";
				};
				
	var els = document.getElementsByClassName('choice3');
	for (var i = 0; i < els.length; ++i)
		els[i].onclick	= function()
				{	
					sal.style.display	= "none";
					emp.style.display	= "none";
					del.style.display	= "block";
					choice.style.display	= "none";
				};
	
	var els = document.getElementsByClassName('return');
	for (var i = 0; i < els.length; ++i)
		els[i].onclick	= function()
				{	
					sal.style.display	= "none";
					emp.style.display	= "none";
					del.style.display	= "none";
					choice.style.display	= "block";
				};
}

function	afficherModalCaptcha()
{	
	document.getElementById('modal_nomprenom').innerHTML = document.getElementById('nomprenom').value;
	document.getElementById('modal_emailphone').innerHTML = document.getElementById('emailphone').value;
	document.getElementById('modal_zonemotif').innerHTML = document.getElementById('zonemotif').value;
	document.getElementById('modal_statut').innerHTML = document.getElementById('statut').value;
}