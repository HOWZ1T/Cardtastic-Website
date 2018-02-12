let quantity = 0;

//HANDLE RADIO BUTTONS
let radios = document.getElementsByClassName("radio-list")[0].option;

let prev = null;
for(let i = 0; i < radios.length; i++)
{
	if(radios[i].checked)
	{
		//LOAD THE CORRECT INFORMATION
		let div = document.getElementsByClassName("description-col")[0];
		let h = div.getElementsByTagName("h1")[0];
		let p = div.getElementsByTagName("p")[0];
		let img = document.getElementsByClassName("product-col")[0].getElementsByTagName("img")[0];
		let priceP = document.getElementsByClassName("price")[0];

		let name = radios[i].dataset.name;
		let desc = radios[i].dataset.desc;
		let thumb = radios[i].dataset.thumb;
		let price = radios[i].dataset.price;

		//ALL IMAGES AND COPY SOURCED FROM JASON AT CARDTASTIC AND ADAPTED FOR EDUCATIONAL PURPOSES
		img.setAttribute("src", thumb);
		h.innerHTML = name;
		p.innerHTML = desc;
		if(quantity <= 0)
		{
			priceP.innerHTML = "&dollar;"+parseFloat(price).toFixed(2).toString();
		}
		else
		{
			priceP.innerHTML = "&dollar;"+(parseFloat(price) * parseFloat(quantity)).toFixed(2).toString();
		}
	}
	
	radios[i].onclick = function(){
		if(radios[i].value !== prev) //PREVENTS RELOADING THE PAGE DATA WHEN THE USER SELECTS AN ALREADY SELECTED OPTION
		{
			prev = radios[i].value;
			
			//LOAD THE CORRECT INFORMATION
			let div = document.getElementsByClassName("description-col")[0];
			let h = div.getElementsByTagName("h1")[0];
			let p = div.getElementsByTagName("p")[0];
			let img = document.getElementsByClassName("product-col")[0].getElementsByTagName("img")[0];
			let priceP = document.getElementsByClassName("price")[0];
			
			let name = radios[i].dataset.name;
			let desc = radios[i].dataset.desc;
			let thumb = radios[i].dataset.thumb;
			let price = radios[i].dataset.price;
			
			//ALL IMAGES AND COPY SOURCED FROM JASON AT CARDTASTIC AND ADAPTED FOR EDUCATIONAL PURPOSES
			img.setAttribute("src", thumb);
			h.innerHTML = name;
			p.innerHTML = desc;
			
			if(quantity <= 0)
			{
				priceP.innerHTML = "&dollar;"+parseFloat(price).toFixed(2).toString();
			}
			else
			{
				priceP.innerHTML = "&dollar;"+(parseFloat(price) * parseFloat(quantity)).toFixed(2).toString();
			}
		}
	};
}

//handle minus
function minus()
{
	if((quantity-1) >= 0)
	{
		setQty(--quantity);
	}
}
//handle plus
function plus()
{
	setQty(++quantity);
}

//handle quantity change
function setQty(quantity)
{
	let qty = document.getElementsByName("qty")[0];
	qty.value = quantity;
	
	//UPDATES PRICE BASED ON QUANTITY
	let priceP = document.getElementsByClassName("price")[0];
	
	let radios = document.getElementsByClassName("radio-list")[0].option;
	for(let i = 0; i < radios.length; i++)
	{
		if(radios[i].checked)
		{
			let price = radios[i].dataset.price;
			if(quantity <= 0)
			{
				priceP.innerHTML = "&dollar;"+parseFloat(price).toFixed(2).toString();
			}
			else
			{
				priceP.innerHTML = "&dollar;"+(parseFloat(price) * parseFloat(quantity)).toFixed(2).toString();
			}
			break;
		}
	}
}

function qtyChange()
{
	let qty = document.getElementsByName("qty")[0];
	let val = qty.value;
	
	if(isNaN(val) == false)
	{
		val = Math.round(Number(val));
		if(val >= 0)
		{
			quantity = val;
			setQty(quantity);
		}
		else
		{
			setQty(quantity); //RESETS THE QUANTITY VALUE TO THE LAST VALID VALUE
		}
	}
	else
	{
		setQty(quantity); //RESETS THE QUANTITY VALUE TO THE LAST VALID VALUE
	}
}

//VALIDATE THE FORM BEFORE SUBMISSION
function validate()
{
	let qty = document.getElementsByName("qty")[0].value;
	if(qty < 1)
	{
		alert("Invalid quantity!");
		return false;
	}
	
	return true;
}