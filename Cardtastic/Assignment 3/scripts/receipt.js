function printReceipt(divID)
{
	let printContents = document.getElementById(divID).innerHTML;
	let originalContents = document.body.innerHTML;
	
	document.body.innerHTML = printContents;
	window.print();
	document.body.innerHTML = originalContents;
}

function redirect()
{
	window.location = "index.php";
}