function trim(txt_value) { return (txt_value.replace(/^\s|\s*$/g,"")); }

function CompleteOrderbilling()
{
	if(trim(document.frmCompleteOrder.cardNumber.value) == "" )
	{
		alert("Please enter credit card number.");
		document.frmCompleteOrder.cardNumber.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) != "" )
	{
		var len=document.frmCompleteOrder.cardNumber.value.length;
		var iChars = "0123456789";
		for (var i = 0; i < document.frmCompleteOrder.cardNumber.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.cardNumber.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in Card Number.");
				document.frmCompleteOrder.cardNumber.focus();
				return false;
			}
		}
		if(document.frmCompleteOrder.cardNumber.value.length != 16)
		{
			alert("Please enter 16-digit credit card number.");
			document.frmCompleteOrder.cardNumber.focus();
			return false;
		}
	}
	
	if(trim(document.frmCompleteOrder.cardHolderName.value) == "" )
	{
		alert("Please enter card holder‘s name");
		document.frmCompleteOrder.cardHolderName.focus();
		return false;
	}
	
	if(trim(document.frmCompleteOrder.expiry_date.value) == "" )
	{
		alert("Please enter expiration date.");
		document.frmCompleteOrder.expiry_date.focus();
		return false;
	}
	
	var expire = document.getElementById("expiry_date").value;
	if(!expire.match(/(0[1-9]|1[0-2])[/][0-9]{2}/)){
	  alert("The expire date formate is not correct!\n");
	  document.frmCompleteOrder.expiry_date.focus();
	  return false;
	} else {
	  // get current year and month
	  var d = new Date();
	  var currentYear = d.getFullYear();
	  var currentMonth = d.getMonth() + 1;
	  // get parts of the expiration date
	  var parts = expire.split('/');
	  var year = parseInt(parts[1], 10) + 2000;
	  var month = parseInt(parts[0], 10);
	  // compare the dates
	  if (year < currentYear || (year == currentYear && month < currentMonth)) {
		alert("The expiry date has passed.\n");
		document.frmCompleteOrder.expiry_date.focus();
		return false;
	  }
	}
	
	if(trim(document.frmCompleteOrder.card_cvv_no.value) == "" )
	{
		alert("Please enter card cvv number.");
		document.frmCompleteOrder.card_cvv_no.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.card_cvv_no.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.frmCompleteOrder.card_cvv_no.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.card_cvv_no.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in Card CVV Number.");
				document.frmCompleteOrder.card_cvv_no.focus();
				return false;
			}
		}
		if(document.frmCompleteOrder.card_cvv_no.value.length != 3)
		{
			alert("Please enter 3-digit Card CVV Number.");
			document.frmCompleteOrder.card_cvv_no.focus();
			return false;
		}
	}
	
	if(trim(document.frmCompleteOrder.address1.value) == "" )
	{
		alert("Please enter Address1.");
		document.frmCompleteOrder.address1.focus();
		return false;
	}
	
	if(trim(document.frmCompleteOrder.city.value) == "" )
	{
		alert("Please enter city.");
		document.frmCompleteOrder.city.focus();
		return false;
	}
	
	if(trim(document.frmCompleteOrder.postal.value) == "" )
	{
		alert("Please enter ZIP/ Postal Code.");
		document.frmCompleteOrder.postal.focus();
		return false;
	}
	
	if(trim(document.frmCompleteOrder.country.value) == "" )
	{
		alert("Please select country.");
		document.frmCompleteOrder.country.focus();
		return false;
	}
	
	if(trim(document.frmCompleteOrder.state.value) == "" )
	{
		alert("Please select state.");
		document.frmCompleteOrder.state.focus();
		return false;
	}
	
}

var country_arr = new Array("Canada", "USA","United Kingdom");

// States
var s_a = new Array();
s_a[0] = "";
s_a[1] = "Alberta|British Columbia|Manitoba|New Brunswick|Newfoundland|Northwest Territories|Nova Scotia|Nunavut|Ontario|Prince Edward Island|Quebec|Saskatchewan|Yukon Territory";
s_a[2] = "Alabama|Alaska|Arizona|Arkansas|California|Colorado|Connecticut|Delaware|District of Columbia|Florida|Georgia|Hawaii|Idaho|Illinois|Indiana|Iowa|Kansas|Kentucky|Louisiana|Maine|Maryland|Massachusetts|Michigan|Minnesota|Mississippi|Missouri|Montana|Nebraska|Nevada|New Hampshire|New Jersey|New Mexico|New York|North Carolina|North Dakota|Ohio|Oklahoma|Oregon|Pennsylvania|Rhode Island|South Carolina|South Dakota|Tennessee|Texas|Utah|Vermont|Virginia|Washington|West Virginia|Wisconsin|Wyoming";
s_a[3] = "Barking and Dagenham|Barnet|Barnsley|Bath and North East Somerset|Bedfordshire|Bexley|Birmingham|Blackburn with Darwen|Blackpool|Bolton|Bournemouth|Bracknell Forest|Bradford|Brent|Brighton and Hove|Bromley|Buckinghamshire|Bury|Calderdale|Cambridgeshire|Camden|Cheshire|City of Bristol|City of Kingston upon Hull|City of London|Cornwall|Coventry|Croydon|Cumbria|Darlington|Derby|Derbyshire|Devon|Doncaster|Dorset|Dudley|Durham|Ealing|East Riding of Yorkshire|East Sussex|Enfield|Essex|Gateshead|Gloucestershire|Greenwich|Hackney|Halton|Hammersmith and Fulham|Hampshire|Haringey|Harrow|Hartlepool|Havering|Herefordshire|Hertfordshire|Hillingdon|Hounslow|Isle of Wight|Islington|Kensington and Chelsea|Kent|Kingston upon Thames|Kirklees|Knowsley|Lambeth|Lancashire|Leeds|Leicester|Leicestershire|Lewisham|Lincolnshire|Liverpool|Luton|Manchester|Medway|Merton|Middlesbrough|Milton Keynes|Newcastle upon Tyne|Newham|Norfolk|North East Lincolnshire|North Lincolnshire|North Somerset|North Tyneside|North Yorkshire|Northamptonshire|Northumberland|Nottingham|Nottinghamshire|Oldham|Oxfordshire|Peterborough|Plymouth|Poole|Portsmouth|Reading|Redbridge|Redcar and Cleveland|Richmond upon Thames|Rochdale|Rotherham|Rutland|Salford|Sandwell|Sefton|Sheffield|Shropshire|Slough|Solihull|Somerset|South Gloucestershire|South Tyneside|Southampton|Southend-on-Sea|Southwark|St. Helens|Staffordshire|Stockport|Stockton-on-Tees|Stoke-on-Trent|Suffolk|Sunderland|Surrey|Sutton|Swindon|Tameside|Telford and Wrekin|Thurrock|Torbay|Tower Hamlets|Trafford|Wakefield|Walsall|Waltham Forest|Wandsworth|Warrington|Warwickshire|West Berkshire|West Sussex|Westminster|Wigan|Wiltshire|Windsor and Maidenhead|Wirral|Wokingham|Wolverhampton|Worcestershire|York";

function setCountry()
{
	
}

function populateStates(countryElementId, stateElementId) {

    var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;
    
    var stateElement = document.getElementById(stateElementId);

    stateElement.length = 0;
    stateElement.options[0] = new Option('Select Province', '');
    stateElement.selectedIndex = 0;

    var state_arr = s_a[selectedCountryIndex].split("|");

    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }
    
}

function populateCountries(countryElementId, stateElementId) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('Select Country', '');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (stateElementId) {
        countryElement.onchange = function () {
            populateStates(countryElementId, stateElementId);
        };
    }
}
