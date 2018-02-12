//TOGGLES BETWEEN HIDING AND SHOWING THE DROPMENU
function onClick()
{
	document.getElementById("dropmenu").classList.toggle("show");
}

//Close the dropdown if user clicks outside of the dropdown.
window.onclick = function(event)
{
	if(!event.target.matches('.dropLink'))
	{
		let dropdowns = document.getElementsByClassName("dropdown-content");
		let i;
		for(i = 0; i < dropdowns.length; i++)
		{
			let openDropdown = dropdowns[i];
			if(openDropdown.classList.contains('show'))
			{
				openDropdown.classList.remove('show');			
			}
		}
	}
}