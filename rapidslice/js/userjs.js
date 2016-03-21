function trim(str)
{
	return str.replace(/^\s+|\s+$/g,'');
}

// E-mail validation
function isAValidEmail( emailField )
{
	// var emailregex=/^[\w]+\+?\w*@[\w]+\.[\w.]+\w$/;
	var emailregex=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var match=emailField.match( emailregex );
	if ( !match )
	{
		return false;
	}
	else
	{
		return true;
	}
}
function validateTextCheck_marker_index(value,spanid,tdid)
{
	if(trim(value)!="")
	{
		document.getElementById(spanid).innerHTML ="<img src='images/checkmark_small.gif' border='0' alt='Correct' />";
		document.getElementById(tdid).style.backgroundColor="#99FF99";
		return false;
	}
	else
	{
		document.getElementById(spanid).innerHTML ="";
		document.getElementById(tdid).style.backgroundColor="#FFFFFF";
		return false;
	}
}
function phonePatternCheck(phone)
{
	var pt1=/^\(([0-9]{3}\))+([0-9]{3})-+([0-9]{4}$)/
	var pt2=/^([0-9]{10}$)/
	var pt3=/^([0-9]{3})-+([0-9]{3})-+([0-9]{4}$)/
	var pt4=/^([0-9]{3})+ +([0-9]{3})+ +([0-9]{4}$)/
	if (phone.match(pt1) || phone.match(pt2) || phone.match(pt3) || phone.match(pt4))
	{
		return true;
	}
	else
	{
		return false;
	}
}
 function chk_frmphone()
{	
	if(trim(document.frmSignUpN.phone.value) == "" )
	{
		alert("Please enter valid phone number.");
		document.frmSignUpN.phone.focus();
		return false;
	}
	else
	{
		var re = /^([0-9]{10}$)/;
		if(!re.test(trim(document.frmSignUpN.phone.value)))
		{
			alert("Please enter a valid 10-digit phone number, use only numeric value.");
			document.frmSignUpN.phone.focus();
			return false;
		}
	}
	return true;
}

function chk_frmphone1()
{
	
	if(document.frmSignUpN1.phone.value == "" )
	{
		alert("Please enter valid phone number.");
		document.frmSignUpN1.phone.focus();
		return false;
	}
	return true;
}
function chk_frmphoneFormat()
{
	var str=trim(document.frmSignUpN.phone.value);
	var pt2=/^([0-9]{10}$)/
	if(document.frmSignUpN.phone.value == "" )
	{
		alert("Please enter valid phone number.");
		document.frmSignUpN.phone.focus();
		return false;
	}
	if(!phonePatternCheck(document.frmSignUpN.phone.value))
	{
		alert("Please enter valid phone number in valid format.");
		document.frmSignUpN.phone.focus();
		return false;
	}
	return true;
}

function chk_CompleteOrder()
{
	
	if(document.frmCompleteOrder.first_name.value =="")
	{
		alert("Please enter your first name.");
		document.frmCompleteOrder.first_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.first_name.value!= "")
	{
		var iChars = "?1234567890";
		for (var i = 0; i < document.frmCompleteOrder.first_name.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.first_name.value.charAt(i)) != -1)
			{
				alert ("Numeric values doesnot allow in first name.");
				document.frmCompleteOrder.first_name.focus();
				return false;
			}
		}
	}
	if(document.frmCompleteOrder.last_name.value =="")
	{
		alert("Please enter your last name.");
		document.frmCompleteOrder.last_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.last_name.value!= "")
	{
		var iChars = "?1234567890";
		for (var i = 0; i < document.frmCompleteOrder.last_name.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.last_name.value.charAt(i)) != -1)
			{
				alert ("Numeric values doesnot allow in last name.");
				document.frmCompleteOrder.last_name.focus();
				return false;
			}
		}
	}
	if(document.frmCompleteOrder.location.value =="")
	{
		alert("Please select Location.");
		document.frmCompleteOrder.location.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.zipcode.value) == "" )
	{
		alert("Please enter postal/zip code.");
		document.frmCompleteOrder.zipcode.focus();
		return false;
	}
	/*if(trim(document.frmCompleteOrder.customer_phone.value) == "" )
	{
		alert("Please enter phone number.");
		document.frmCompleteOrder.customer_phone.focus();
		return false;
	}*/
	
	if(trim(document.frmCompleteOrder.email.value) =="")
	{
		alert("Please enter email address.");
		document.frmCompleteOrder.email.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.email.value) != "" )
	{
		if(!isAValidEmail(document.frmCompleteOrder.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.frmCompleteOrder.email.focus();
			return(false);
		}
	}
	if(trim(document.frmCompleteOrder.cardType.value) == "" )
	{
		alert("Please select credit card type.");
		document.frmCompleteOrder.cardType.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) == "" )
	{
		alert("Please enter credit card number.");
		document.frmCompleteOrder.cardNumber.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.frmCompleteOrder.cardNumber.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.cardNumber.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in card number.");
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
	if(document.frmCompleteOrder.terms.checked == false)
	{
	alert("Please accept terms and conditions.");
	return false;
	}
	//document.getElementById("submitButton").style.display="none";
	
}

function chk_CompleteOrderbilling()
{
	
	if(document.frmCompleteOrder.first_name.value =="")
	{
		alert("Please enter your first name.");
		document.frmCompleteOrder.first_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.first_name.value!= "")
	{
		var iChars = "?1234567890";
		for (var i = 0; i < document.frmCompleteOrder.first_name.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.first_name.value.charAt(i)) != -1)
			{
				alert ("Numeric values doesnot allow in first name.");
				document.frmCompleteOrder.first_name.focus();
				return false;
			}
		}
	}
	if(document.frmCompleteOrder.last_name.value =="")
	{
		alert("Please enter your last name.");
		document.frmCompleteOrder.last_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.last_name.value!= "")
	{
		var iChars = "?1234567890";
		for (var i = 0; i < document.frmCompleteOrder.last_name.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.last_name.value.charAt(i)) != -1)
			{
				alert ("Numeric values doesnot allow in last name.");
				document.frmCompleteOrder.last_name.focus();
				return false;
			}
		}
	}
	if(document.frmCompleteOrder.location.value =="")
	{
		alert("Please select Location.");
		document.frmCompleteOrder.location.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.zipcode.value) == "" )
	{
		alert("Please enter postal/zip code.");
		document.frmCompleteOrder.zipcode.focus();
		return false;
	}
	/*if(trim(document.frmCompleteOrder.customer_phone.value) == "" )
	{
		alert("Please enter phone number.");
		document.frmCompleteOrder.customer_phone.focus();
		return false;
	}*/
	
	if(trim(document.frmCompleteOrder.email.value) =="")
	{
		alert("Please enter email address.");
		document.frmCompleteOrder.email.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.email.value) != "" )
	{
		if(!isAValidEmail(document.frmCompleteOrder.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.frmCompleteOrder.email.focus();
			return(false);
		}
	}
	if(trim(document.frmCompleteOrder.cardType.value) == "" )
	{
		alert("Please select credit card type.");
		document.frmCompleteOrder.cardType.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) == "" )
	{
		alert("Please enter credit card number.");
		document.frmCompleteOrder.cardNumber.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.frmCompleteOrder.cardNumber.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.cardNumber.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in card number.");
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
	if(document.frmCompleteOrder.expMonth.value!= "" && document.frmCompleteOrder.expYear.value != "")
	{
		var myDate	= new Date();
		var months = document.frmCompleteOrder.expMonth.value;
		var years = document.frmCompleteOrder.expYear.value;
		myDate.setFullYear(years,months,0);
		var today = new Date();
		
		if (today > myDate)
		{
		  alert("Please enter expiry date greater than current date.");
		  document.frmCompleteOrder.expMonth.focus();
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
	
	//document.getElementById("submitButton").style.display="none";
	
}

function chk_frmSignUpnew()
{
	if(trim(document.frmSignUp.zipcode.value) =="")
	{
		alert("Please enter zipcode.");
		document.frmSignUp.zipcode.focus();
		return false;
	}
	
	if(trim(document.frmSignUp.zipcode.value) != "" )
		{
			var iChars = "!@#$%^&*()+=-[]~`\\\';,./{}|\":<>?";
			for (var i = 0; i < document.frmSignUp.zipcode.value.length; i++)
			{
				if (iChars.indexOf(document.frmSignUp.zipcode.value.charAt(i)) != -1)
				{
					alert ("Zip Code contains special characters. \nPlease remove them and try again.");
					document.frmSignUp.zipcode.focus();
					return false;
				}
			}
		}
	
	return true;
}

 function check_val2()
{
	if(document.frmSignUp.many_hours.value == "More than 16 hours")
	{
		alert("Sorry, you do not qualify. Please try again!");
		document.frmSignUp.many_hours.focus();
		return false;
	}
	if(document.frmSignUp.many_hours.value == "No Time")
	{
		alert("Sorry, you do not qualify. Please try again!");
		document.frmSignUp.many_hours.focus();
		return false;
	}
	if(document.frmSignUp.computer_skills.value == "Beginner user with no computer and no internet access")
	{
		alert("Sorry, but you will require a computer with internet access to make use of the QuickProfit Kit.");
		document.frmSignUp.computer_skills.focus();
		return false;
	}
	return true;
}
function validateSearchName()
{
	if(trim(document.nameSearch.fname.value)=="")
	{
		alert("Please enter first name to search.");
		document.nameSearch.fname.focus();
		return false;
	}
	if(trim(document.nameSearch.lname.value)=="")
	{
		alert("Please enter last name to search.");
		document.nameSearch.lname.focus();
		return false;
	}
	/*if(trim(document.nameSearch.states.value)=="")
	{
		alert("Please select state.");
		document.nameSearch.states.focus();
		return false;
	}*/
}
function validateSearchName1()
{
	if(trim(document.nameSearch1.fname.value)=="")
	{
		alert("Please enter first name to search.");
		document.nameSearch1.fname.focus();
		return false;
	}
	if(trim(document.nameSearch1.lname.value)=="")
	{
		alert("Please enter last name to search.");
		document.nameSearch1.lname.focus();
		return false;
	}
	/*if(trim(document.nameSearch.states.value)=="")
	{
		alert("Please select state.");
		document.nameSearch.states.focus();
		return false;
	}*/
}
function validateSearchNameback()
{
	if(trim(document.nameSearchback.fname.value)=="" || trim(document.nameSearchback.fname.value)=="First Name")
	{
		alert("Please enter first name to search.");
		document.nameSearchback.fname.focus();
		return false;
	}
	if(trim(document.nameSearchback.lname.value)=="" || trim(document.nameSearchback.lname.value)=="Last Name")
	{
		alert("Please enter last name to search.");
		document.nameSearchback.lname.focus();
		return false;
	}
	/*if(trim(document.nameSearch.states.value)=="")
	{
		alert("Please select state.");
		document.nameSearch.states.focus();
		return false;
	}*/
}
 function validateSearchNameCriminal()
{
	if(trim(document.nameSearchcriminal.fname.value)=="")
	{
		alert("Please enter first name to search.");
		document.nameSearchcriminal.fname.focus();
		return false;
	}
	else
	{
		var re = /^[A-Za-z]+$/;
		if(!re.test(trim(document.nameSearchcriminal.fname.value)))
		{
			alert("Please enter a valid first name, use only alphabetic value.");
			document.nameSearchcriminal.fname.focus();
			return false;
		}
	}

	if(trim(document.nameSearchcriminal.lname.value)=="")
	{
		alert("Please enter last name to search.");
		document.nameSearchcriminal.lname.focus();
		return false;
	}
	else
	{
		var re = /^[A-Za-z]+$/;
		if(!re.test(trim(document.nameSearchcriminal.lname.value)))
		{
			alert("Please enter a valid last name, use only alphabetic value.");
			document.nameSearchcriminal.lname.focus();
			return false;
		}
		
	}
	
	/*if(trim(document.nameSearch.states.value)=="")
	{
		alert("Please select state.");
		document.nameSearch.states.focus();
		return false;
	}*/
	
	getresultfromajax();
	    return false;
}
function GetXmlHttpObject() 
{ 
	var objXMLHttp=null
	if (window.XMLHttpRequest) {
		objXMLHttp=new XMLHttpRequest()
	} else if (window.ActiveXObject) {
		objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP")
	}
	return objXMLHttp
}
function getresultfromajax()
{
   
	document.getElementById("subid").style.display="none";
	
	var alldata=document.nameSearchcriminal.fname.value+"**"+document.nameSearchcriminal.lname.value+"**"+document.nameSearchcriminal.states.value;
	var encodedata=encode64(alldata);
    xmlHttpgetres = GetXmlHttpObject();
	var url= "getsearchresult.php";
	xmlHttpgetres.open("POST",url,true);	
	xmlHttpgetres.onreadystatechange = finalgetresultfromajax
	xmlHttpgetres.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xmlHttpgetres.send("searchtype="+encodedata+"&process=getresult");
}
function finalgetresultfromajax()
{
  if(xmlHttpgetres.readyState == 4) 
	{
		responsestr= xmlHttpgetres.responseText;
		responsestrarr=responsestr.split(":;");	
		if(responsestrarr[2]==0 && responsestrarr[3]==0)
		{
			
			document.getElementById("subid").style.display="";
			
		}
		if(responsestrarr[1]=='fullnamefound')
		{
		document.nameSearchcriminal.submit();
		return true;
		}
		else
		{
		search_namepopup(responsestrarr[2],responsestrarr[3]);
		return false;
		}
	}
}

function search_namepopup(fncnt,lncnt)
{
	var alldata=fncnt+"**"+lncnt+"**"+document.nameSearchcriminal.fname.value+"**"+document.nameSearchcriminal.lname.value+"**"+document.nameSearchcriminal.states.value;
	var url="thickboxfiles/searchname_popup.php?encdatapa="+alldata+"&height=266&width=700&jssiteurl=http://www.deathrecord.com/";
	var imageGroup=false;
	var caption="test";
	tb_show(caption, url, imageGroup);

}


function validateSearchNameCriminal1()
{
	if(trim(document.nameSearchcriminal1.fname.value)=="")
	{
		alert("Please enter first name to search.");
		document.nameSearchcriminal1.fname.focus();
		return false;
	}
	if(trim(document.nameSearchcriminal1.lname.value)=="")
	{
		alert("Please enter last name to search.");
		document.nameSearchcriminal1.lname.focus();
		return false;
	}
	/*if(trim(document.nameSearch.states.value)=="")
	{
		alert("Please select state.");
		document.nameSearch.states.focus();
		return false;
	}*/
}
function validateSearchName_split()
{
	if(trim(document.nameSearch.fname.value)=="")
	{
		alert("Please enter first name to search.");
		document.nameSearch.fname.focus();
		return false;
	}
	
	/*if(trim(document.nameSearch.states.value)=="")
	{
		alert("Please select state.");
		document.nameSearch.states.focus();
		return false;
	}*/
}

function validateSearchAddress()
{
	if(trim(document.addressSearch.address.value)=="")
	{
		alert("Please enter address to search.");
		document.addressSearch.address.focus();
		return false;
	}
	if(trim(document.addressSearch.city.value)=="")
	{
		alert("Please enter city to search.");
		document.addressSearch.city.focus();
		return false;
	}
	/*if(trim(document.addressSearch.states.value)=="")
	{
		alert("Please select state.");
		document.addressSearch.states.focus();
		return false;
	}*/
}
function validateSearchAddress1()
{
	if(trim(document.addressSearch1.address.value)=="")
	{
		alert("Please enter address to search.");
		document.addressSearch1.address.focus();
		return false;
	}
	if(trim(document.addressSearch1.city.value)=="")
	{
		alert("Please enter city to search.");
		document.addressSearch1.city.focus();
		return false;
	}
	/*if(trim(document.addressSearch.states.value)=="")
	{
		alert("Please select state.");
		document.addressSearch.states.focus();
		return false;
	}*/
}
function validateSearchproperty()
{
	if(trim(document.propertySearch.address.value)=="" || trim(document.propertySearch.address.value)=="Address")
	{
		alert("Please enter address to search.");
		document.propertySearch.address.focus();
		return false;
	}
	if(trim(document.propertySearch.city.value)=="" || trim(document.propertySearch.city.value)=="City")
	{
		alert("Please enter city to search.");
		document.propertySearch.city.focus();
		return false;
	}
	/*if(trim(document.addressSearch.states.value)=="")
	{
		alert("Please select state.");
		document.addressSearch.states.focus();
		return false;
	}*/
}
function validateSearchAddress2()
{
	if(trim(document.addressSearch2.address.value)=="")
	{
		alert("Please enter address to search.");
		document.addressSearch2.address.focus();
		return false;
	}
	if(trim(document.addressSearch2.city.value)=="")
	{
		alert("Please enter city to search.");
		document.addressSearch2.city.focus();
		return false;
	}
	/*if(trim(document.addressSearch.states.value)=="")
	{
		alert("Please select state.");
		document.addressSearch.states.focus();
		return false;
	}*/
}
/*function loginForm()
{
	if(trim(document.login.username.value) == "")
	{
		alert("Please enter email address.");
		document.login.username.focus();
		return false;
	}
	if(!isAValidEmail(document.login.username.value))
	{
		alert("Please enter valid email address.");
		document.login.username.focus();
		return false;
	}
	if(trim(document.login.password.value)  == "")
	{
		alert("Please enter password.");
		document.login.password.focus();
		return false;
	}
}*/
function loginForm()
{
	if(trim(document.login.username.value) == "")
	{
		alert("Please enter username.");
		document.login.username.focus();
		return false;
	}
	
	if(trim(document.login.password.value)  == "")
	{
		alert("Please enter password.");
		document.login.password.focus();
		return false;
	}
}

function loginForm1()
{
	if(trim(document.loginfrm.username.value) == "")
	{
		alert("Please enter username.");
		document.loginfrm.username.focus();
		return false;
	}
	
	if(trim(document.loginfrm.password.value)  == "")
	{
		alert("Please enter password.");
		document.loginfrm.password.focus();
		return false;
	}
}
function hide(txtId)
{
	if(document.getElementById(txtId))
	{
		document.getElementById(txtId).style.visibility='hidden';
	}
}
function display(txtId,txt,colors)
{
	if(document.getElementById(txtId))
	{
		document.getElementById(txtId).innerHTML=txt;
		document.getElementById (txtId). style.color = colors; 
		document.getElementById(txtId).style.visibility='visible';
	}
}
function changeTxt_fullReport(){
	for(i=1500;i<=13000;i=i+=1000)
	{
		setTimeout("hide('full_report')",i);
		setTimeout("display('full_report','Searching','#F32929')",parseInt(i)+parseInt(500));
	}	
	setTimeout("hide('full_report')",13500);
	setTimeout("display('full_report','<u>Available!</u>','#116a9d')",14000);
}
function changeTxt_fullReport2(){
	for(i=1500;i<=13000;i=i+=1000)
	{
		setTimeout("hide('full_report')",i);
		setTimeout("display('full_report','Searching','#F32929')",parseInt(i)+parseInt(500));
	}	
	setTimeout("hide('full_report')",13500);
	setTimeout("display('full_report','Available!','#58BD41')",14000);
}
function changeTxt_location(){
	for(i=1500;i<=4000;i=i+=1000)
	{
		setTimeout("hide('location')",i);
		setTimeout("display('location','Searching','#F32929')",parseInt(i)+parseInt(500));
	}	
	setTimeout("hide('location')",4500);
	setTimeout("display('location','Available!','#58BD41')",5000);
}
function changeTxt()
{
		setTimeout("hide('txt1')",500);
		setTimeout("display('txt1','Searching','#F32929')",1000);
		setTimeout("hide('txt1')",1500);
		setTimeout("display('txt1','Searching','#F32929')",2000);
		setTimeout("hide('txt1')",2500);
		setTimeout("display('txt1','Complete!','#58BD41')",3000);
		
		setTimeout("hide('txt2')",1500);
		setTimeout("display('txt2','Searching','#F32929')",2000);
		setTimeout("hide('txt2')",2500);
		setTimeout("display('txt2','Searching','#F32929')",3000);
		setTimeout("hide('txt2')",3000);
		setTimeout("display('txt2','Complete!','#58BD41')",3500);
		
		
		setTimeout("hide('txt3')",2500);
		setTimeout("display('txt3','Searching','#F32929')",3000);
		setTimeout("hide('txt3')",3500);
		setTimeout("display('txt3','Searching','#F32929')",4000);
		setTimeout("hide('txt3')",4500);
		setTimeout("display('txt3','Complete!','#58BD41')",5000);
		
		
		setTimeout("hide('txt4')",3500);
		setTimeout("display('txt4','Searching','#F32929')",4000);
		setTimeout("hide('txt4')",4500);
		setTimeout("display('txt4','Searching','#F32929')",5000);
		setTimeout("hide('txt4')",5500);
		setTimeout("display('txt4','Complete!','#58BD41')",6000);
		
		
		setTimeout("hide('txt5')",4500);
		setTimeout("display('txt5','Searching','#F32929')",5000);
		setTimeout("hide('txt5')",5500);
		setTimeout("display('txt5','Searching','#F32929')",6000);
		setTimeout("hide('txt5')",6500);
		setTimeout("display('txt5','Complete!','#58BD41')",7000);
		
		
		setTimeout("hide('txt6')",5500);
		setTimeout("display('txt6','Searching','#F32929')",6000);
		setTimeout("hide('txt6')",6500);
		setTimeout("display('txt6','Searching','#F32929')",7000);
		setTimeout("hide('txt6')",7500);
		setTimeout("display('txt6','Complete!','#58BD41')",8000);
		
		
		setTimeout("hide('txt7')",6500);
		setTimeout("display('txt7','Searching','#F32929')",7000);
		setTimeout("hide('txt7')",7500);
		setTimeout("display('txt7','Searching','#F32929')",8000);
		setTimeout("hide('txt7')",8500);
		setTimeout("display('txt7','Complete!','#58BD41')",9000);
		
		
		setTimeout("hide('txt8')",7500);
		setTimeout("display('txt8','Searching','#F32929')",8000);
		setTimeout("hide('txt8')",8500);
		setTimeout("display('txt8','Searching','#F32929')",9000);
		setTimeout("hide('txt8')",9500);
		setTimeout("display('txt8','Complete!','#58BD41')",10000);
		
		
		setTimeout("hide('txt9')",8500);
		setTimeout("display('txt9','Searching','#F32929')",9000);
		setTimeout("hide('txt9')",9500);
		setTimeout("display('txt9','Searching','#F32929')",10000);
		setTimeout("hide('txt9')",10500);
		setTimeout("display('txt9','Complete!','#58BD41')",11000);
		
		
		setTimeout("hide('txt10')",9500);
		setTimeout("display('txt10','Searching','#F32929')",10000);
		setTimeout("hide('txt10')",10500);
		setTimeout("display('txt10','Searching','#F32929')",11000);
		setTimeout("hide('txt10')",11500);
		setTimeout("display('txt10','Complete!','#58BD41')",12000);
		
		
		setTimeout("hide('txt11')",10500);
		setTimeout("display('txt11','Searching','#F32929')",11000);
		setTimeout("hide('txt11')",11500);
		setTimeout("display('txt11','Searching','#F32929')",12000);
		setTimeout("hide('txt11')",12500);
		setTimeout("display('txt11','Complete!','#58BD41')",13000);
		
		
		setTimeout("hide('txt12')",11500);
		setTimeout("display('txt12','Searching','#F32929')",12000);
		setTimeout("hide('txt12')",12500);
		setTimeout("display('txt12','Searching','#F32929')",13000);
		setTimeout("hide('txt12')",13500);
		setTimeout("display('txt12','Complete!','#58BD41')",14000);
}
function showUSStates()
{
	if(document.frmCompleteOrder.country.value == "US" || document.frmCompleteOrder.country.value == "CA")
	{
		if(document.frmCompleteOrder.country.value == "US")
		{
			document.getElementById('stateTextbox').style.display = 'none';
			document.getElementById('stateDropdownCA').style.display = 'none';
			document.getElementById('stateDropdown').style.display = '';
		}
		else if(document.frmCompleteOrder.country.value == "CA")
		{
			document.getElementById('stateDropdown').style.display = 'none';
			document.getElementById('stateTextbox').style.display = 'none';
			document.getElementById('stateDropdownCA').style.display = '';
		}
	}
	else
	{
		document.getElementById('stateDropdown').style.display = 'none';
		document.getElementById('stateDropdownCA').style.display = 'none';
		document.getElementById('stateTextbox').style.display = '';
	}
}
function changeTxtPhone()
{
		setTimeout("hide('txt1')",500);
		setTimeout("display('txt1','Searching','#F32929')",1000);
		setTimeout("hide('txt1')",1500);
		setTimeout("display('txt1','Searching','#F32929')",2000);
		setTimeout("hide('txt1')",2500);
		setTimeout("display('txt1','Available!','#58BD41')",3000);
		
		setTimeout("hide('txt2')",1500);
		setTimeout("display('txt2','Searching','#F32929')",2000);
		setTimeout("hide('txt2')",2500);
		setTimeout("display('txt2','Searching','#F32929')",3000);
		setTimeout("hide('txt2')",3000);
		setTimeout("display('txt2','Available!','#58BD41')",3500);
		
		
		setTimeout("hide('txt3')",2500);
		setTimeout("display('txt3','Searching','#F32929')",3000);
		setTimeout("hide('txt3')",3500);
		setTimeout("display('txt3','Searching','#F32929')",4000);
		setTimeout("hide('txt3')",4500);
		setTimeout("display('txt3','Available!','#58BD41')",5000);
		
		
		setTimeout("hide('txt4')",3500);
		setTimeout("display('txt4','Searching','#F32929')",4000);
		setTimeout("hide('txt4')",4500);
		setTimeout("display('txt4','Searching','#F32929')",5000);
		setTimeout("hide('txt4')",5500);
		setTimeout("display('txt4','Available!','#58BD41')",6000);
		
		
		setTimeout("hide('txt5')",4500);
		setTimeout("display('txt5','Searching','#F32929')",5000);
		setTimeout("hide('txt5')",5500);
		setTimeout("display('txt5','Searching','#F32929')",6000);
		setTimeout("hide('txt5')",6500);
		setTimeout("display('txt5','Available!','#58BD41')",7000);
		
		
		setTimeout("hide('txt6')",5500);
		setTimeout("display('txt6','Searching','#F32929')",6000);
		setTimeout("hide('txt6')",6500);
		setTimeout("display('txt6','Searching','#F32929')",7000);
		setTimeout("hide('txt6')",7500);
		setTimeout("display('txt6','Available!','#58BD41')",8000);
		
		
		setTimeout("hide('txt7')",6500);
		setTimeout("display('txt7','Searching','#F32929')",7000);
		setTimeout("hide('txt7')",7500);
		setTimeout("display('txt7','Searching','#F32929')",8000);
		setTimeout("hide('txt7')",8500);
		setTimeout("display('txt7','Available!','#58BD41')",9000);
		
		
		setTimeout("hide('txt8')",7500);
		setTimeout("display('txt8','Searching','#F32929')",8000);
		setTimeout("hide('txt8')",8500);
		setTimeout("display('txt8','Searching','#F32929')",9000);
		setTimeout("hide('txt8')",9500);
		setTimeout("display('txt8','Available!','#58BD41')",10000);
		
}

function hide_address(txtId)
{
	document.getElementById(txtId).style.visibility='hidden';
}
function display_address(txtId,txt,colors)
{
	document.getElementById(txtId).innerHTML=txt;
	document.getElementById (txtId). style.color = colors; 
	document.getElementById(txtId).style.visibility='visible';
}
function changeTxtAddress()
{
	
		setTimeout("hide_address('txt1')",500);
		setTimeout("display_address('txt1','Searching','#F32929')",1000);
		setTimeout("hide_address('txt1')",1500);
		setTimeout("display_address('txt1','Searching','#F32929')",2000);
		setTimeout("hide_address('txt1')",2500);
		setTimeout("display_address('txt1','<strong>Search Complete!</strong>','#58BD41')",3000);
		
		setTimeout("hide_address('txt2')",1500);
		setTimeout("display_address('txt2','Searching','#F32929')",2000);
		setTimeout("hide_address('txt2')",2500);
		setTimeout("display_address('txt2','Searching','#F32929')",3000);
		setTimeout("hide_address('txt2')",3500);
		setTimeout("display_address('txt2','<strong>Search Complete!</strong>','#58BD41')",4000);
		
		setTimeout("hide_address('txt3')",2500);
		setTimeout("display_address('txt3','Searching','#F32929')",3000);
		setTimeout("hide_address('txt3')",3500);
		setTimeout("display_address('txt3','Searching','#F32929')",4000);
		setTimeout("hide_address('txt3')",4500);
		setTimeout("display_address('txt3','<strong>Search Complete!</strong>','#58BD41')",5000);
		
		setTimeout("hide_address('txt4')",2500);
		setTimeout("display_address('txt4','Searching','#F32929')",3000);
		setTimeout("hide_address('txt4')",3500);
		setTimeout("display_address('txt4','Searching','#F32929')",4000);
		setTimeout("hide_address('txt4')",4500);
		setTimeout("display_address('txt4','<strong>Search Complete!</strong>','#58BD41')",5000);
		
		setTimeout("hide_address('txt5')",3500);
		setTimeout("display_address('txt5','Searching','#F32929')",4000);
		setTimeout("hide_address('txt5')",4500);
		setTimeout("display_address('txt5','Searching','#F32929')",5000);
		setTimeout("hide_address('txt5')",5500);
		setTimeout("display_address('txt5','<strong>Search Complete!</strong>','#58BD41')",6000);
		
		setTimeout("hide_address('txt6')",4500);
		setTimeout("display_address('txt6','Searching','#F32929')",5000);
		setTimeout("hide_address('txt6')",5500);
		setTimeout("display_address('txt6','Searching','#F32929')",6000);
		setTimeout("hide_address('txt6')",6500);
		setTimeout("display_address('txt6','<strong>Search Complete!</strong>','#58BD41')",7000);
		
		setTimeout("hide_address('txt7')",5500);
		setTimeout("display_address('txt7','Searching','#F32929')",6000);
		setTimeout("hide_address('txt7')",6500);
		setTimeout("display_address('txt7','Searching','#F32929')",7000);
		setTimeout("hide_address('txt7')",7500);
		setTimeout("display_address('txt7','<strong>Search Complete!</strong>','#58BD41')",8000);
		
		setTimeout("hide_address('txt8')",6500);
		setTimeout("display_address('txt8','Searching','#F32929')",7000);
		setTimeout("hide_address('txt8')",7500);
		setTimeout("display_address('txt8','Searching','#F32929')",8000);
		setTimeout("hide_address('txt8')",8500);
		setTimeout("display_address('txt8','<strong>Search Complete!</strong>','#58BD41')",9000);
		
		setTimeout("hide_address('txt9')",7500);
		setTimeout("display_address('txt9','Searching','#F32929')",8000);
		setTimeout("hide_address('txt9')",8500);
		setTimeout("display_address('txt9','Searching','#F32929')",9000);
		setTimeout("hide_address('txt9')",9500);
		setTimeout("display_address('txt9','<strong>Search Complete!</strong>','#58BD41')",10000);
		
		setTimeout("hide_address('txt10')",8500);
		setTimeout("display_address('txt10','Searching','#F32929')",9000);
		setTimeout("hide_address('txt10')",9500);
		setTimeout("display_address('txt10','Searching','#F32929')",10000);
		setTimeout("hide_address('txt10')",10500);
		setTimeout("display_address('txt10','<strong>Search Complete!</strong>','#58BD41')",11000);
		
		setTimeout("hide_address('txt11')",9500);
		setTimeout("display_address('txt11','Searching','#F32929')",10000);
		setTimeout("hide_address('txt11')",10500);
		setTimeout("display_address('txt11','Searching','#F32929')",11000);
		setTimeout("hide_address('txt11')",11500);
		setTimeout("display_address('txt11','<strong>Search Complete!</strong>','#58BD41')",12000);
		
		setTimeout("hide_address('txt12')",10500);
		setTimeout("display_address('txt12','Searching','#F32929')",11000);
		setTimeout("hide_address('txt12')",11500);
		setTimeout("display_address('txt12','Searching','#F32929')",12000);
		setTimeout("hide_address('txt12')",12500);
		setTimeout("display_address('txt12','<strong>Search Complete!</strong>','#58BD41')",13000);
		
		setTimeout("hide_address('txt13')",11500);
		setTimeout("display_address('txt13','Searching','#F32929')",12000);
		setTimeout("hide_address('txt13')",12500);
		setTimeout("display_address('txt13','Searching','#F32929')",13000);
		setTimeout("hide_address('txt13')",13500);
		setTimeout("display_address('txt13','<strong>Search Complete!</strong>','#58BD41')",14000);
		
		setTimeout("hide_address('txt14')",12500);
		setTimeout("display_address('txt14','Searching','#F32929')",14000);
		setTimeout("hide_address('txt14')",13500);
		setTimeout("display_address('txt14','Searching','#F32929')",15000);
		setTimeout("hide_address('txt14')",14500);
		setTimeout("display_address('txt14','<strong>Search Complete!</strong>','#58BD41')",16000);
		
		setTimeout("hide_address('txt15')",13500);
		setTimeout("display_address('txt15','Searching','#F32929')",15000);
		setTimeout("hide_address('txt15')",14500);
		setTimeout("display_address('txt15','Searching','#F32929')",16000);
		setTimeout("hide_address('txt15')",15500);
		setTimeout("display_address('txt15','<strong>Search Complete!</strong>','#58BD41')",17000);
		
		setTimeout("hide_address('txt16')",14500);
		setTimeout("display_address('txt16','Searching','#F32929')",16000);
		setTimeout("hide_address('txt16')",15500);
		setTimeout("display_address('txt16','Searching','#F32929')",17000);
		setTimeout("hide_address('txt16')",16500);
		setTimeout("display_address('txt16','<strong>Search Complete!</strong>','#58BD41')",18000);
		
		
		setTimeout("hide_address('txt17')",15500);
		setTimeout("display_address('txt17','Searching','#F32929')",17000);
		setTimeout("hide_address('txt17')",16500);
		setTimeout("display_address('txt17','Searching','#F32929')",18000);
		setTimeout("hide_address('txt17')",17500);
		setTimeout("display_address('txt17','<strong>Search Complete!</strong>','#58BD41')",19000);
		
}

function hide_name(txtId)
{
	document.getElementById(txtId).style.visibility='hidden';
}
function display_name(txtId,txt,colors)
{
	document.getElementById(txtId).innerHTML=txt;
	document.getElementById (txtId). style.color = colors; 
	document.getElementById(txtId).style.visibility='visible';
}
function changeTxtName()
{
	
		setTimeout("hide_name('txt1')",500);
		setTimeout("display_name('txt1','Searching','#F32929')",1000);
		setTimeout("hide_name('txt1')",1500);
		setTimeout("display_name('txt1','Searching','#F32929')",2000);
		setTimeout("hide_name('txt1')",2500);
		setTimeout("display_name('txt1','<strong>Available!</strong>','#58BD41')",3000);
		
		setTimeout("hide_name('txt2')",1500);
		setTimeout("display_name('txt2','Searching','#F32929')",2000);
		setTimeout("hide_name('txt2')",2500);
		setTimeout("display_name('txt2','Searching','#F32929')",3000);
		setTimeout("hide_name('txt2')",3500);
		setTimeout("display_name('txt2','<strong>Available!</strong>','#58BD41')",4000);
		
		setTimeout("hide_name('txt3')",2500);
		setTimeout("display_name('txt3','Searching','#F32929')",3000);
		setTimeout("hide_name('txt3')",3500);
		setTimeout("display_name('txt3','Searching','#F32929')",4000);
		setTimeout("hide_name('txt3')",4500);
		setTimeout("display_name('txt3','<strong>Available!</strong>','#58BD41')",5000);
		
		setTimeout("hide_name('txt4')",2500);
		setTimeout("display_name('txt4','Searching','#F32929')",3000);
		setTimeout("hide_name('txt4')",3500);
		setTimeout("display_name('txt4','Searching','#F32929')",4000);
		setTimeout("hide_name('txt4')",4500);
		setTimeout("display_name('txt4','<strong>Available!</strong>','#58BD41')",5000);
		
		setTimeout("hide_name('txt5')",3500);
		setTimeout("display_name('txt5','Searching','#F32929')",4000);
		setTimeout("hide_name('txt5')",4500);
		setTimeout("display_name('txt5','Searching','#F32929')",5000);
		setTimeout("hide_name('txt5')",5500);
		setTimeout("display_name('txt5','<strong>Available!</strong>','#58BD41')",6000);
		
		setTimeout("hide_name('txt6')",4500);
		setTimeout("display_name('txt6','Searching','#F32929')",5000);
		setTimeout("hide_name('txt6')",5500);
		setTimeout("display_name('txt6','Searching','#F32929')",6000);
		setTimeout("hide_name('txt6')",6500);
		setTimeout("display_name('txt6','<strong>Available!</strong>','#58BD41')",7000);
		
		setTimeout("hide_name('txt7')",5500);
		setTimeout("display_name('txt7','Searching','#F32929')",6000);
		setTimeout("hide_name('txt7')",6500);
		setTimeout("display_name('txt7','Searching','#F32929')",7000);
		setTimeout("hide_name('txt7')",7500);
		setTimeout("display_name('txt7','<strong>Available!</strong>','#58BD41')",8000);
		
		setTimeout("hide_name('txt8')",6500);
		setTimeout("display_name('txt8','Searching','#F32929')",7000);
		setTimeout("hide_name('txt8')",7500);
		setTimeout("display_name('txt8','Searching','#F32929')",8000);
		setTimeout("hide_name('txt8')",8500);
		setTimeout("display_name('txt8','<strong>Available!</strong>','#58BD41')",9000);
		
		setTimeout("hide_name('txt9')",7500);
		setTimeout("display_name('txt9','Searching','#F32929')",8000);
		setTimeout("hide_name('txt9')",8500);
		setTimeout("display_name('txt9','Searching','#F32929')",9000);
		setTimeout("hide_name('txt9')",9500);
		setTimeout("display_name('txt9','<strong>Available!</strong>','#58BD41')",10000);
		
		setTimeout("hide_name('txt10')",8500);
		setTimeout("display_name('txt10','Searching','#F32929')",9000);
		setTimeout("hide_name('txt10')",9500);
		setTimeout("display_name('txt10','Searching','#F32929')",10000);
		setTimeout("hide_name('txt10')",10500);
		setTimeout("display_name('txt10','<strong>Available!</strong>','#58BD41')",11000);
		
		setTimeout("hide_name('txt11')",9500);
		setTimeout("display_name('txt11','Searching','#F32929')",10000);
		setTimeout("hide_name('txt11')",10500);
		setTimeout("display_name('txt11','Searching','#F32929')",11000);
		setTimeout("hide_name('txt11')",11500);
		setTimeout("display_name('txt11','<strong>Available!</strong>','#58BD41')",12000);
		
		setTimeout("hide_name('txt12')",10500);
		setTimeout("display_name('txt12','Searching','#F32929')",11000);
		setTimeout("hide_name('txt12')",11500);
		setTimeout("display_name('txt12','Searching','#F32929')",12000);
		setTimeout("hide_name('txt12')",12500);
		setTimeout("display_name('txt12','<strong>Available!</strong>','#58BD41')",13000);
		
		setTimeout("hide_name('txt13')",11500);
		setTimeout("display_name('txt13','Searching','#F32929')",12000);
		setTimeout("hide_name('txt13')",12500);
		setTimeout("display_name('txt13','Searching','#F32929')",13000);
		setTimeout("hide_name('txt13')",13500);
		setTimeout("display_name('txt13','<strong>Available!</strong>','#58BD41')",14000);
		
		setTimeout("hide_name('txt14')",12500);
		setTimeout("display_name('txt14','Searching','#F32929')",14000);
		setTimeout("hide_name('txt14')",13500);
		setTimeout("display_name('txt14','Searching','#F32929')",15000);
		setTimeout("hide_name('txt14')",14500);
		setTimeout("display_name('txt14','<strong>Available!</strong>','#58BD41')",16000);
		
		setTimeout("hide_name('txt15')",13500);
		setTimeout("display_name('txt15','Searching','#F32929')",15000);
		setTimeout("hide_name('txt15')",14500);
		setTimeout("display_name('txt15','Searching','#F32929')",16000);
		setTimeout("hide_name('txt15')",15500);
		setTimeout("display_name('txt15','<strong>Available!</strong>','#58BD41')",17000);
		
		setTimeout("hide_name('txt17')",14500);
		setTimeout("display_name('txt17','Searching','#F32929')",16000);
		setTimeout("hide_name('txt17')",15500);
		setTimeout("display_name('txt17','Searching','#F32929')",17000);
		setTimeout("hide_name('txt17')",16500);
		setTimeout("display_name('txt17','<strong>Available!</strong>','#58BD41')",18000);
		
		
		setTimeout("hide_name('txt18')",15500);
		setTimeout("display_name('txt18','Searching','#F32929')",17000);
		setTimeout("hide_name('txt18')",16500);
		setTimeout("display_name('txt18','Searching','#F32929')",18000);
		setTimeout("hide_name('txt18')",17500);
		setTimeout("display_name('txt18','<strong>Available!</strong>','#58BD41')",19000);
}
function chk_billing3()
{
	if(trim(document.frmCompleteOrder.first_name.value) == "" )
	{
		alert("Please enter first name.");
		document.frmCompleteOrder.first_name.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.last_name.value) == "" )
	{
		alert("Please enter last name.");
		document.frmCompleteOrder.last_name.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardType.value) == "" )
	{
		alert("Please select card type.");
		document.frmCompleteOrder.cardType.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) == "" )
	{
		alert("Please enter credit card number.");
		document.frmCompleteOrder.cardNumber.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.frmCompleteOrder.cardNumber.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.cardNumber.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in card number.");
				document.frmCompleteOrder.cardNumber.focus();
				return false;
			}
		}
		if(trim(document.frmCompleteOrder.cardType.value) == "American Express" )
		{
			if(document.frmCompleteOrder.cardNumber.value.length != 15)
			{
				alert("Please enter 15-digit credit card number.");
				document.frmCompleteOrder.cardNumber.focus();
				return false;
			}
		}
		else
		{
			if(document.frmCompleteOrder.cardNumber.value.length != 16)
			{
				alert("Please enter 16-digit credit card number.");
				document.frmCompleteOrder.cardNumber.focus();
				return false;
			}
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
		if(trim(document.frmCompleteOrder.cardType.value) == "American Express" )
		{
			if(document.frmCompleteOrder.card_cvv_no.value.length != 4)
			{
				alert("Please enter 4-digit Card CVV Number.");
				document.frmCompleteOrder.card_cvv_no.focus();
				return false;
			}
		}
		else
		{
			if(document.frmCompleteOrder.card_cvv_no.value.length != 3)
			{
				alert("Please enter 3-digit Card CVV Number.");
				document.frmCompleteOrder.card_cvv_no.focus();
				return false;
			}
		}
	}
	if(trim(document.frmCompleteOrder.country.value) == "" || trim(document.frmCompleteOrder.country.value) == "00")
	{
		alert("Please select your country.");
		document.frmCompleteOrder.country.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.customer_address.value) == "" )
	{
		alert("Please enter your address.");
		document.frmCompleteOrder.customer_address.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.customer_city.value) == "" )
	{
		alert("Please enter your city.");
		document.frmCompleteOrder.customer_city.focus();
		return false;
	}
	if(document.frmCompleteOrder.country.value == "US" || document.frmCompleteOrder.country.value == "CA")
	{
		if(document.frmCompleteOrder.state.value == "")
		{
			alert("Please select state/province.");
			document.frmCompleteOrder.state.focus();
			return false;
		}
	}
	else
	{
		if(trim(document.frmCompleteOrder.txt_state.value) == "")
		{
			alert("Please enter state/province.");
			document.frmCompleteOrder.txt_state.focus();
			return false;
		}
		if(trim(document.frmCompleteOrder.txt_state.value) != "" )
		{
			var iChars = "!@#$%^&*()+=-[]~`\\\';,./{}|\":<>?";
			for (var i = 0; i < document.frmCompleteOrder.txt_state.value.length; i++)
			{
				if (iChars.indexOf(document.frmCompleteOrder.txt_state.value.charAt(i)) != -1)
				{
					alert ("State contains special characters. \nPlease remove them and try again.\nOnly underscore is allowed ( _ ).");
					document.frmCompleteOrder.txt_state.focus();
					return false;
				}
			}
		}
	}
	if(trim(document.frmCompleteOrder.zipcode.value) == "" )
	{
		alert("Please enter your zipcode.");
		document.frmCompleteOrder.zipcode.focus();
		return false;
	}

	if(trim(document.frmCompleteOrder.customer_phone.value) == "" )
	{
		alert("Please enter your phone.");
		document.frmCompleteOrder.customer_phone.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.email.value) == "" )
	{
		alert("Please enter your email.");
		document.frmCompleteOrder.email.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.email.value) != "")
	{
		if(!isAValidEmail(document.frmCompleteOrder.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.frmCompleteOrder.email.focus();
			return false;
		}
	}
}
function validate_page_select(page_name,page_value,extra_perimeter)
{
	var i = page_value.indexOf(",");
	var len = page_value.length;
	var start = page_value.substr(0,i);
	i = i*1;
	i++;
	var ofset = page_value.substr(i,len);
	
	var next_page = page_name + "?start=" + start + "&ofset=" + ofset + extra_perimeter ;
	window.location.href = next_page;
	return true;
}

function chk_CompleteOrder2701A()
{
	 if(trim(document.frmCompleteOrder.email.value) =="")
	{
		alert("Please enter email address.");
		document.frmCompleteOrder.email.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.email.value) != "" )
	{
		if(!isAValidEmail(document.frmCompleteOrder.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.frmCompleteOrder.email.focus();
			return(false);
		}
	}
	if(trim(document.frmCompleteOrder.cemail.value) =="")
	{
		alert("Please enter confirm email address.");
		document.frmCompleteOrder.cemail.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cemail.value) != "" )
	{
		if(!isAValidEmail(document.frmCompleteOrder.cemail.value))
		{
			alert("Please enter valid confirm e-mail address.")
			document.frmCompleteOrder.cemail.focus();
			return(false);
		}
	}
	if(trim(document.frmCompleteOrder.cemail.value)!= trim(document.frmCompleteOrder.email.value))
	{
		alert("Both email do not match.");
		document.frmCompleteOrder.cemail.focus();
		return false;
	}
	if(document.frmCompleteOrder.first_name.value =="")
	{
		alert("Please enter your first name.");
		document.frmCompleteOrder.first_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.last_name.value =="")
	{
		alert("Please enter your last name.");
		document.frmCompleteOrder.last_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.location.value =="")
	{
		alert("Please select Location.");
		document.frmCompleteOrder.location.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.zipcode.value) == "" )
	{
		alert("Please enter postal/zip code.");
		document.frmCompleteOrder.zipcode.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.customer_phone.value) == "" )
	{
		alert("Please enter phone number.");
		document.frmCompleteOrder.customer_phone.focus();
		return false;
	}
}
function chk_CompleteOrder2701A_new()
{
	 if(trim(document.frmCompleteOrder.nameoncard.value) == "" )
	{
		alert("Please enter name on card.");
		document.frmCompleteOrder.nameoncard.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardType.value) == "" )
	{
		alert("Please select credit card type.");
		document.frmCompleteOrder.cardType.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) == "" )
	{
		alert("Please enter credit card number.");
		document.frmCompleteOrder.cardNumber.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.frmCompleteOrder.cardNumber.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.cardNumber.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in card number.");
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
}
function validateChangePassword()
{
	if(trim(document.changepassword.oldpassword.value) == "" )
	{
		alert("Please enter old password.");
		document.changepassword.oldpassword.focus();
		return false;
	}
	if(trim(document.changepassword.newpassword.value) == "" )
	{
		alert("Please enter new password.");
		document.changepassword.newpassword.focus();
		return false;
	}
	if(trim(document.changepassword.connewpassword.value) == "" )
	{
		alert("Please enter confirm new password.");
		document.changepassword.connewpassword.focus();
		return false;
	}
	if(document.changepassword.connewpassword.value!=document.changepassword.newpassword.value)
	{
		alert("New password and confirm new password must match.");
		document.changepassword.connewpassword.focus();
		return false;
	}
}
function validateChangePassword()
{
	if(trim(document.changepassword.oldpassword.value) == "" )
	{
		alert("Please enter old password.");
		document.changepassword.oldpassword.focus();
		return false;
	}
	if(trim(document.changepassword.newpassword.value) == "" )
	{
		alert("Please enter new password.");
		document.changepassword.newpassword.focus();
		return false;
	}
	if(trim(document.changepassword.connewpassword.value) == "" )
	{
		alert("Please enter confirm new password.");
		document.changepassword.connewpassword.focus();
		return false;
	}
	if(document.changepassword.connewpassword.value!=document.changepassword.newpassword.value)
	{
		alert("New password and confirm new password must match.");
		document.changepassword.connewpassword.focus();
		return false;
	}
	if(trim(document.getElementById("chkoldpass").innerHTML)!="")
	{
		
		alert("Old password is incorrect.");
		document.changepassword.newpassword.focus();
		return false;
	}
}
function ValidatePaymentForm()
{
	if(trim(document.payment.nameoncard.value) == "" )
	{
		alert("Please enter name on card.");
		document.payment.nameoncard.focus();
		return false;
	}
	if(trim(document.payment.cardNumber.value) == "" )
	{
		alert("Please enter card number.");
		document.payment.cardNumber.focus();
		return false;
	}
}
function ValidatePersonalForm()
{
	if(trim(document.personal.email.value) == "" )
	{
		alert("Please enter e-mail address.");
		document.personal.email.focus();
		return false;
	}
	if(trim(document.personal.email.value) != "" )
	{
		if(!isAValidEmail(document.personal.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.personal.email.focus();
			return(false);
		}
	}
	if(trim(document.personal.name.value) == "" )
	{
		alert("Please enter name.");
		document.personal.name.focus();
		return false;
	}
}

function chk_ErrorPage1()
{

	if(document.frmerror.first_name.value =="")
	{
		document.getElementById("nameid").innerHTML="Please fill the above field";
		document.frmerror.first_name.focus();
		return false;
	}
	else
	{
		document.getElementById("nameid").innerHTML= "";
	}
	
	if(document.frmerror.last_name.value =="")
	{
		document.getElementById("lnameid").innerHTML="Please fill the above field";
		document.frmerror.last_name.focus();
		return false;
	}
	else
	{
		document.getElementById("lnameid").innerHTML= "";
	}
	
	
	if(document.frmerror.location.value =="")
	{

		document.getElementById("locationid").innerHTML="Please fill the above field";
		document.frmerror.location.focus();
		return false;
	}
	else
	{
		document.getElementById("locationid").innerHTML= "";
	}
	
	
	if(trim(document.frmerror.zipcode.value) == "" )
	{
		document.getElementById("zipcodeid").innerHTML="Please fill the above field";
		document.frmerror.zipcode.focus();
		return false;
	}
	else
	{
		document.getElementById("zipcodeid").innerHTML= "";
	}
	
		
	
	if(trim(document.frmerror.email.value) =="")
	{
		document.getElementById("emailid").innerHTML="Please fill the above field";
		document.frmerror.email.focus();
		return false;
	}
	else
	{
		document.getElementById("emailid").innerHTML="";
	}
	
	if(trim(document.frmerror.email.value) != "" )
	{
		if(!isAValidEmail(document.frmerror.email.value))
		{
			document.getElementById("emailid").innerHTML="Please enter valid e-mail address";
			document.frmerror.email.focus();
			return(false);
		}
		else
		{
			document.getElementById("emailid").innerHTML="";
		}
	}
	if(trim(document.frmerror.customer_phone.value) == "" )
	{
		document.getElementById("phoneid").innerHTML="Please fill the above field";
		document.frmerror.customer_phone.focus();
		return false;
	}
	else
	{
		document.getElementById("phoneid").innerHTML="";
	}
	if(trim(document.frmerror.cardType.value) == "" )
	{
		document.getElementById("cardTypeid").innerHTML="Please fill the above field";
		document.frmerror.cardType.focus();
		return false;
	}
	else
	{
		document.getElementById("cardTypeid").innerHTML="";
	}
	
	
	
	if(trim(document.frmerror.cardNumber.value) == "" )
	{
		document.getElementById("cardNumberid").innerHTML="Please fill the above field";
		document.frmerror.cardNumber.focus();
		return false;
	}
	else
	{
		document.getElementById("cardNumberid").innerHTML="";
	}
	
	if(trim(document.frmerror.cardNumber.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.frmerror.cardNumber.value.length; i++)
		{
			if (iChars.indexOf(document.frmerror.cardNumber.value.charAt(i)) == -1)
			{
				document.getElementById("cardNumberid").innerHTML="Only numeric values are allowed in card number";
				document.frmerror.cardNumber.focus();
				return false;
			}
		}
		if(document.frmerror.cardNumber.value.length != 16)
		{
		
			document.getElementById("cardNumberid").innerHTML="Please enter 16-digit credit card number";
			document.frmerror.cardNumber.focus();
			return false;
		}
	}
	if(trim(document.frmerror.card_cvv_no.value) == "" )
	{
		document.getElementById("cvvid").innerHTML="Please fill the above field";
		document.frmerror.card_cvv_no.focus();
		return false;
	}
	if(trim(document.frmerror.card_cvv_no.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.frmerror.card_cvv_no.value.length; i++)
		{
			if (iChars.indexOf(document.frmerror.card_cvv_no.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in Card CVV Number.");
				document.frmerror.card_cvv_no.focus();
				return false;
			}
		}
		if(document.frmerror.card_cvv_no.value.length != 3)
		{
			alert("Please enter 3-digit Card CVV Number.");
			document.frmerror.card_cvv_no.focus();
			return false;
		}
	}
	
		document.getElementById("submitButton").style.display="none";
}

function chk_CompleteOrder_splite()
{
		
	if(document.frmCompleteOrder.first_name.value =="Name")
	{
		alert("Please enter your first name.");
		document.frmCompleteOrder.first_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.first_name.value =="")
	{
		alert("Please enter your first name.");
		document.frmCompleteOrder.first_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.last_name.value =="Last Name")
	{
		alert("Please enter your last name.");
		document.frmCompleteOrder.last_name.focus();
		return false;
	}
	
	if(document.frmCompleteOrder.last_name.value =="")
	{
		alert("Please enter your last name.");
		document.frmCompleteOrder.last_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.location.value =="")
	{
		alert("Please select Location.");
		document.frmCompleteOrder.location.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.customer_phone.value) == "Phone" )
	{
		alert("Please enter phone number.");
		document.frmCompleteOrder.customer_phone.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.customer_phone.value) == "" )
	{
		alert("Please enter phone number.");
		document.frmCompleteOrder.customer_phone.focus();
		return false;
	}
	
	if(trim(document.frmCompleteOrder.email.value) =="Email")
	{
		alert("Please enter email address.");
		document.frmCompleteOrder.email.focus();
		return false;
	}
	
	if(trim(document.frmCompleteOrder.email.value) =="")
	{
		alert("Please enter email address.");
		document.frmCompleteOrder.email.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.email.value) != "" )
	{
		if(!isAValidEmail(document.frmCompleteOrder.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.frmCompleteOrder.email.focus();
			return(false);
		}
	}
	if(trim(document.frmCompleteOrder.zipcode.value) == "Zip/Postal Code" )
	{
		alert("Please enter postal/zip code.");
		document.frmCompleteOrder.zipcode.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.zipcode.value) == "" )
	{
		alert("Please enter postal/zip code.");
		document.frmCompleteOrder.zipcode.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) == "" )
	{
		alert("Please enter credit card number.");
		document.frmCompleteOrder.cardNumber.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.frmCompleteOrder.cardNumber.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.cardNumber.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in card number.");
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
	if(trim(document.frmCompleteOrder.cardType.value) == "" )
	{
		alert("Please select credit card type.");
		document.frmCompleteOrder.cardType.focus();
		return false;
	}
	
	
	
	document.getElementById("submitButton").style.display="none";
	
}

function chk_frmreceiptOrder_splite()
{
	if(document.frmCompleteOrder.first_name.value =="")
	{
		alert("Please enter your first name.");
		document.frmCompleteOrder.first_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.last_name.value =="")
	{
		alert("Please enter your last name.");
		document.frmCompleteOrder.last_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.location.value =="")
	{
		alert("Please select Location.");
		document.frmCompleteOrder.location.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.zipcode.value) == "" )
	{
		alert("Please enter postal/zip code.");
		document.frmCompleteOrder.zipcode.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.customer_phone.value) == "" )
	{
		alert("Please enter phone number.");
		document.frmCompleteOrder.customer_phone.focus();
		return false;
	}
	
	if(trim(document.frmCompleteOrder.email.value) =="")
	{
		alert("Please enter email address.");
		document.frmCompleteOrder.email.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.email.value) != "" )
	{
		if(!isAValidEmail(document.frmCompleteOrder.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.frmCompleteOrder.email.focus();
			return(false);
		}
	}
	if(trim(document.frmCompleteOrder.cardType.value) == "" )
	{
		alert("Please select credit card type.");
		document.frmCompleteOrder.cardType.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) == "" )
	{
		alert("Please enter credit card number.");
		document.frmCompleteOrder.cardNumber.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.frmCompleteOrder.cardNumber.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.cardNumber.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in card number.");
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
	
	document.getElementById("submitButton").style.display="none";
	
}

function chk_CompleteOrder23MAR2010()
{
	if(document.frmCompleteOrder.first_name.value =="")
	{
		alert("Please enter your first name.");
		document.frmCompleteOrder.first_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.first_name.value!= "")
	{
		var iChars = "?1234567890";
		for (var i = 0; i < document.frmCompleteOrder.first_name.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.first_name.value.charAt(i)) != -1)
			{
				alert ("Numeric values doesnot allow in first name.");
				document.frmCompleteOrder.first_name.focus();
				return false;
			}
		}
	}
	if(document.frmCompleteOrder.last_name.value =="")
	{
		alert("Please enter your last name.");
		document.frmCompleteOrder.last_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.last_name.value!= "")
	{
		var iChars = "?1234567890";
		for (var i = 0; i < document.frmCompleteOrder.last_name.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.last_name.value.charAt(i)) != -1)
			{
				alert ("Numeric values doesnot allow in last name.");
				document.frmCompleteOrder.last_name.focus();
				return false;
			}
		}
	}
	if(document.frmCompleteOrder.location.value =="")
	{
		alert("Please select Location.");
		document.frmCompleteOrder.location.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.zipcode.value) == "" )
	{
		alert("Please enter postal/zip code.");
		document.frmCompleteOrder.zipcode.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.customer_phone.value) == "" )
	{
		alert("Please enter phone number.");
		document.frmCompleteOrder.customer_phone.focus();
		return false;
	}
	
	if(trim(document.frmCompleteOrder.email.value) =="")
	{
		alert("Please enter email address.");
		document.frmCompleteOrder.email.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.email.value) != "" )
	{
		if(!isAValidEmail(document.frmCompleteOrder.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.frmCompleteOrder.email.focus();
			return(false);
		}
	}
	if(trim(document.frmCompleteOrder.cardType.value) == "" )
	{
		alert("Please select credit card type.");
		document.frmCompleteOrder.cardType.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) == "" )
	{
		alert("Please enter credit card number.");
		document.frmCompleteOrder.cardNumber.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.frmCompleteOrder.cardNumber.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.cardNumber.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in card number.");
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
	if(document.frmCompleteOrder.expMonth.value!= "" && document.frmCompleteOrder.expYear.value != "")
	{
		var myDate	= new Date();
		var months = document.frmCompleteOrder.expMonth.value;
		var years = document.frmCompleteOrder.expYear.value;
		myDate.setFullYear(years,months,0);
		var today = new Date();
		
		if (today > myDate)
		{
		  alert("Please enter expiry date greater than current date.");
		  document.frmCompleteOrder.expMonth.focus();
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
	
	if(trim(document.getElementById("PromoCode").value) != '')
	{
		document.getElementById("PromoId").value = '1';	
	}
	document.getElementById("submitButton").style.display="none";
	
}
function justValidateEmail()
{
	if(trim(document.frmCompleteOrder.email.value) =="")
	{
		alert("Please enter email address.");
		document.frmCompleteOrder.email.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.email.value) != "" )
	{
		if(!isAValidEmail(document.frmCompleteOrder.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.frmCompleteOrder.email.focus();
			return(false);
		}
	}
}



function changeTxtAddress_new()
{
	
		setTimeout("hide_address('txt1')",500);
		setTimeout("display_address('txt1','Searching','#F32929')",1000);
		setTimeout("hide_address('txt1')",1500);
		setTimeout("display_address('txt1','Searching','#F32929')",2000);
		setTimeout("hide_address('txt1')",2500);
		setTimeout("display_address('txt1','<strong>Search Complete!</strong>','#58BD41')",3000);
		
		setTimeout("hide_address('txt2')",1500);
		setTimeout("display_address('txt2','Searching','#F32929')",2000);
		setTimeout("hide_address('txt2')",2500);
		setTimeout("display_address('txt2','Searching','#F32929')",3000);
		setTimeout("hide_address('txt2')",3500);
		setTimeout("display_address('txt2','<strong>Search Complete!</strong>','#58BD41')",4000);
		
		setTimeout("hide_address('txt3')",2500);
		setTimeout("display_address('txt3','Searching','#F32929')",3000);
		setTimeout("hide_address('txt3')",3500);
		setTimeout("display_address('txt3','Searching','#F32929')",4000);
		setTimeout("hide_address('txt3')",4500);
		setTimeout("display_address('txt3','<strong>Search Complete!</strong>','#58BD41')",5000);
		
		setTimeout("hide_address('txt4')",2500);
		setTimeout("display_address('txt4','Searching','#F32929')",3000);
		setTimeout("hide_address('txt4')",3500);
		setTimeout("display_address('txt4','Searching','#F32929')",4000);
		setTimeout("hide_address('txt4')",4500);
		setTimeout("display_address('txt4','<strong>Search Complete!</strong>','#58BD41')",5000);
		
		setTimeout("hide_address('txt5')",3500);
		setTimeout("display_address('txt5','Searching','#F32929')",4000);
		setTimeout("hide_address('txt5')",4500);
		setTimeout("display_address('txt5','Searching','#F32929')",5000);
		setTimeout("hide_address('txt5')",5500);
		setTimeout("display_address('txt5','<strong>Search Complete!</strong>','#58BD41')",6000);
		
		setTimeout("hide_address('txt6')",4500);
		setTimeout("display_address('txt6','Searching','#F32929')",5000);
		setTimeout("hide_address('txt6')",5500);
		setTimeout("display_address('txt6','Searching','#F32929')",6000);
		setTimeout("hide_address('txt6')",6500);
		setTimeout("display_address('txt6','<strong>Search Complete!</strong>','#58BD41')",7000);
		
		setTimeout("hide_address('txt7')",5500);
		setTimeout("display_address('txt7','Searching','#F32929')",6000);
		setTimeout("hide_address('txt7')",6500);
		setTimeout("display_address('txt7','Searching','#F32929')",7000);
		setTimeout("hide_address('txt7')",7500);
		setTimeout("display_address('txt7','<strong>Search Complete!</strong>','#58BD41')",8000);
		
		setTimeout("hide_address('txt8')",6500);
		setTimeout("display_address('txt8','Searching','#F32929')",7000);
		setTimeout("hide_address('txt8')",7500);
		setTimeout("display_address('txt8','Searching','#F32929')",8000);
		setTimeout("hide_address('txt8')",8500);
		setTimeout("display_address('txt8','<strong>Search Complete!</strong>','#58BD41')",9000);
		
		setTimeout("hide_address('txt9')",7500);
		setTimeout("display_address('txt9','Searching','#F32929')",8000);
		setTimeout("hide_address('txt9')",8500);
		setTimeout("display_address('txt9','Searching','#F32929')",9000);
		setTimeout("hide_address('txt9')",9500);
		setTimeout("display_address('txt9','<strong>Search Complete!</strong>','#58BD41')",10000);
		
		setTimeout("hide_address('txt10')",8500);
		setTimeout("display_address('txt10','Searching','#F32929')",9000);
		setTimeout("hide_address('txt10')",9500);
		setTimeout("display_address('txt10','Searching','#F32929')",10000);
		setTimeout("hide_address('txt10')",10500);
		setTimeout("display_address('txt10','<strong>Search Complete!</strong>','#58BD41')",11000);
		
/*		setTimeout("hide_address('txt11')",9500);
		setTimeout("display_address('txt11','Searching','#F32929')",10000);
		setTimeout("hide_address('txt11')",10500);
		setTimeout("display_address('txt11','Searching','#F32929')",11000);
		setTimeout("hide_address('txt11')",11500);
		setTimeout("display_address('txt11','<strong>Search Complete!</strong>','#58BD41')",12000);
*/		
		/*setTimeout("hide_address('txt12')",10500);
		setTimeout("display_address('txt12','Searching','#F32929')",11000);
		setTimeout("hide_address('txt12')",11500);
		setTimeout("display_address('txt12','Searching','#F32929')",12000);
		setTimeout("hide_address('txt12')",12500);
		setTimeout("display_address('txt12','<strong>Search Complete!</strong>','#58BD41')",13000);*/
		
		setTimeout("hide_address('txt13')",11500);
		setTimeout("display_address('txt13','Searching','#F32929')",12000);
		setTimeout("hide_address('txt13')",12500);
		setTimeout("display_address('txt13','Searching','#F32929')",13000);
		setTimeout("hide_address('txt13')",13500);
		setTimeout("display_address('txt13','<strong>Search Complete!</strong>','#58BD41')",14000);
			
		
		setTimeout("hide_address('txt15')",13500);
		setTimeout("display_address('txt15','Searching','#F32929')",15000);
		setTimeout("hide_address('txt15')",14500);
		setTimeout("display_address('txt15','Searching','#F32929')",16000);
		setTimeout("hide_address('txt15')",15500);
		setTimeout("display_address('txt15','<strong>Search Complete!</strong>','#58BD41')",17000);
		
		setTimeout("hide_address('txt16')",14500);
		setTimeout("display_address('txt16','Searching','#F32929')",16000);
		setTimeout("hide_address('txt16')",15500);
		setTimeout("display_address('txt16','Searching','#F32929')",17000);
		setTimeout("hide_address('txt16')",16500);
		setTimeout("display_address('txt16','<strong>Search Complete!</strong>','#58BD41')",18000);
		
		
		setTimeout("hide_address('txt17')",15500);
		setTimeout("display_address('txt17','Searching','#F32929')",17000);
		setTimeout("hide_address('txt17')",16500);
		setTimeout("display_address('txt17','Searching','#F32929')",18000);
		setTimeout("hide_address('txt17')",17500);
		setTimeout("display_address('txt17','<strong>Search Complete!</strong>','#58BD41')",19000);
		
}

function changeTxtAddress_newforname()
{
	
		setTimeout("hide_address('txt1')",500);
		setTimeout("display_address('txt1','Searching','#F32929')",1000);
		setTimeout("hide_address('txt1')",1500);
		setTimeout("display_address('txt1','Searching','#F32929')",2000);
		setTimeout("hide_address('txt1')",2500);
		setTimeout("display_address('txt1','<strong>Data Available</strong>','#58BD41')",3000);
		
		setTimeout("hide_address('txt2')",1500);
		setTimeout("display_address('txt2','Searching','#F32929')",2000);
		setTimeout("hide_address('txt2')",2500);
		setTimeout("display_address('txt2','Searching','#F32929')",3000);
		setTimeout("hide_address('txt2')",3500);
		setTimeout("display_address('txt2','<strong>Data Available</strong>','#58BD41')",4000);
		
		setTimeout("hide_address('txt3')",2500);
		setTimeout("display_address('txt3','Searching','#F32929')",3000);
		setTimeout("hide_address('txt3')",3500);
		setTimeout("display_address('txt3','Searching','#F32929')",4000);
		setTimeout("hide_address('txt3')",4500);
		setTimeout("display_address('txt3','<strong>Data Available</strong>','#58BD41')",5000);
		
		setTimeout("hide_address('txt4')",2500);
		setTimeout("display_address('txt4','Searching','#F32929')",3000);
		setTimeout("hide_address('txt4')",3500);
		setTimeout("display_address('txt4','Searching','#F32929')",4000);
		setTimeout("hide_address('txt4')",4500);
		setTimeout("display_address('txt4','<strong>Data Available</strong>','#58BD41')",5000);
		
		setTimeout("hide_address('txt5')",3500);
		setTimeout("display_address('txt5','Searching','#F32929')",4000);
		setTimeout("hide_address('txt5')",4500);
		setTimeout("display_address('txt5','Searching','#F32929')",5000);
		setTimeout("hide_address('txt5')",5500);
		setTimeout("display_address('txt5','<strong>Data Available</strong>','#58BD41')",6000);
		
		setTimeout("hide_address('txt6')",4500);
		setTimeout("display_address('txt6','Searching','#F32929')",5000);
		setTimeout("hide_address('txt6')",5500);
		setTimeout("display_address('txt6','Searching','#F32929')",6000);
		setTimeout("hide_address('txt6')",6500);
		setTimeout("display_address('txt6','<strong>Data Available</strong>','#58BD41')",7000);
		
		setTimeout("hide_address('txt7')",5500);
		setTimeout("display_address('txt7','Searching','#F32929')",6000);
		setTimeout("hide_address('txt7')",6500);
		setTimeout("display_address('txt7','Searching','#F32929')",7000);
		setTimeout("hide_address('txt7')",7500);
		setTimeout("display_address('txt7','<strong>Data Available</strong>','#58BD41')",8000);
		
		setTimeout("hide_address('txt8')",6500);
		setTimeout("display_address('txt8','Searching','#F32929')",7000);
		setTimeout("hide_address('txt8')",7500);
		setTimeout("display_address('txt8','Searching','#F32929')",8000);
		setTimeout("hide_address('txt8')",8500);
		setTimeout("display_address('txt8','<strong>Data Available</strong>','#58BD41')",9000);
		
		setTimeout("hide_address('txt9')",7500);
		setTimeout("display_address('txt9','Searching','#F32929')",8000);
		setTimeout("hide_address('txt9')",8500);
		setTimeout("display_address('txt9','Searching','#F32929')",9000);
		setTimeout("hide_address('txt9')",9500);
		setTimeout("display_address('txt9','<strong>Data Available</strong>','#58BD41')",10000);
		
		setTimeout("hide_address('txt10')",8500);
		setTimeout("display_address('txt10','Searching','#F32929')",9000);
		setTimeout("hide_address('txt10')",9500);
		setTimeout("display_address('txt10','Searching','#F32929')",10000);
		setTimeout("hide_address('txt10')",10500);
		setTimeout("display_address('txt10','<strong>Data Available</strong>','#58BD41')",11000);
		
		setTimeout("hide_address('txt11')",9500);
		setTimeout("display_address('txt11','Searching','#F32929')",10000);
		setTimeout("hide_address('txt11')",10500);
		setTimeout("display_address('txt11','Searching','#F32929')",11000);
		setTimeout("hide_address('txt11')",11500);
		setTimeout("display_address('txt11','<strong>Data Available</strong>','#58BD41')",12000);
		
		setTimeout("hide_address('txt12')",10500);
		setTimeout("display_address('txt12','Searching','#F32929')",11000);
		setTimeout("hide_address('txt12')",11500);
		setTimeout("display_address('txt12','Searching','#F32929')",12000);
		setTimeout("hide_address('txt12')",12500);
		setTimeout("display_address('txt12','<strong>Data Available</strong>','#58BD41')",13000);
		
		setTimeout("hide_address('txt13')",11500);
		setTimeout("display_address('txt13','Searching','#F32929')",12000);
		setTimeout("hide_address('txt13')",12500);
		setTimeout("display_address('txt13','Searching','#F32929')",13000);
		setTimeout("hide_address('txt13')",13500);
		setTimeout("display_address('txt13','<strong>Data Available</strong>','#58BD41')",14000);
			
		
		setTimeout("hide_address('txt15')",13500);
		setTimeout("display_address('txt15','Searching','#F32929')",15000);
		setTimeout("hide_address('txt15')",14500);
		setTimeout("display_address('txt15','Searching','#F32929')",16000);
		setTimeout("hide_address('txt15')",15500);
		setTimeout("display_address('txt15','<strong>Data Available</strong>','#58BD41')",17000);
		
		setTimeout("hide_address('txt16')",14500);
		setTimeout("display_address('txt16','Searching','#F32929')",16000);
		setTimeout("hide_address('txt16')",15500);
		setTimeout("display_address('txt16','Searching','#F32929')",17000);
		setTimeout("hide_address('txt16')",16500);
		setTimeout("display_address('txt16','<strong>Data Available</strong>','#58BD41')",18000);
		
		
		setTimeout("hide_address('txt17')",15500);
		setTimeout("display_address('txt17','Searching','#F32929')",17000);
		setTimeout("hide_address('txt17')",16500);
		setTimeout("display_address('txt17','Searching','#F32929')",18000);
		setTimeout("hide_address('txt17')",17500);
		setTimeout("display_address('txt17','<strong>Data Available</strong>','#58BD41')",19000);
		
}

function changeTxt_location2007A(){
	for(i=1500;i<=4000;i=i+=1000)
	{
		setTimeout("hide('location')",i);
		setTimeout("display('location','Searching','#F32929')",parseInt(i)+parseInt(500));
	}	
	setTimeout("hide('location')",4500);
	setTimeout("display('location','<a href=download_report.php color=red>View Now!</a>','#FF0000')",5000);
}
function changeTxt_fullReport2007A(){
	for(i=1500;i<=13000;i=i+=1000)
	{
		setTimeout("hide('full_report')",i);
		setTimeout("display('full_report','Searching','#F32929')",parseInt(i)+parseInt(500));
	}	
	setTimeout("hide('full_report')",13500);
	setTimeout("display('full_report','<a href=download_report.php>View Now!</a>','#FF0000')",14000);
}

function changeTxt_location2707A(){
	for(i=1500;i<=4000;i=i+=1000)
	{
		setTimeout("hide('location')",i);
		setTimeout("display('location','Searching','#F32929')",parseInt(i)+parseInt(500));
	}	
	setTimeout("hide('location')",4500);
	setTimeout("display('location','<a href=download_report.php color=red>View Now</a>','#FF0000')",5000);
}
function changeTxt_fullReport2707A(){
	for(i=1500;i<=13000;i=i+=1000)
	{
		setTimeout("hide('full_report')",i);
		setTimeout("display('full_report','Searching','#F32929')",parseInt(i)+parseInt(500));
	}	
	setTimeout("hide('full_report')",13500);
	setTimeout("display('full_report','<a href=download_report.php>View Now</a>','#FF0000')",14000);
}
function changeTxt_fullReportA(){
	for(i=1500;i<=13000;i=i+=1000)
	{
		setTimeout("hide('full_report')",i);
		setTimeout("display('full_report','Searching','#F32929')",parseInt(i)+parseInt(500));
	}	
	setTimeout("hide('full_report')",13500);
	setTimeout("display('full_report','<a href=download_report.php>View Now</a>','#FF0000')",14000);
}
function chkoldpassword(cust_id)
{
	var oldpassword=document.changepassword.oldpassword.value;
	if(trim(oldpassword)!="")
	{
		xmlHttp = GetXmlHttpObject();
		var url = "checkoldpassword.php?oldpassword="+oldpassword;
		xmlHttp.open("POST", url, true);
		xmlHttp.onreadystatechange = updateoldpass;
		xmlHttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		xmlHttp.send();
	}
}
function updateoldpass()
{
	if(xmlHttp.readyState == 4)
	{
		var retStr = xmlHttp.responseText;
		if(retStr>=1)
		{
			document.getElementById("chkoldpass").innerHTML = "";
			return true;
		}
		else if(retStr==0)
		{
			alert("Old password is incorrect.");
			document.getElementById("chkoldpass").innerHTML = "Old password is incorrect.";
			document.changepassword.newpassword.focus();
			return false;
		}
	}
}

function validateSearchPhone1()
{
	if(trim(document.PhoneSearch.phone.value)=="")
	{
		alert("Please enter phone number.");
		document.PhoneSearch.phone.focus();
		return false;
	}
}

function chk_CompleteOrderbillingterms()
{
	
	if(document.frmCompleteOrder.first_name.value =="")
	{
		alert("Please enter your first name.");
		document.frmCompleteOrder.first_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.first_name.value!= "")
	{
		var iChars = "?1234567890";
		for (var i = 0; i < document.frmCompleteOrder.first_name.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.first_name.value.charAt(i)) != -1)
			{
				alert ("Numeric values doesnot allow in first name.");
				document.frmCompleteOrder.first_name.focus();
				return false;
			}
		}
	}
	if(document.frmCompleteOrder.last_name.value =="")
	{
		alert("Please enter your last name.");
		document.frmCompleteOrder.last_name.focus();
		return false;
	}
	if(document.frmCompleteOrder.last_name.value!= "")
	{
		var iChars = "?1234567890";
		for (var i = 0; i < document.frmCompleteOrder.last_name.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.last_name.value.charAt(i)) != -1)
			{
				alert ("Numeric values doesnot allow in last name.");
				document.frmCompleteOrder.last_name.focus();
				return false;
			}
		}
	}
	if(document.frmCompleteOrder.location.value =="")
	{
		alert("Please select Location.");
		document.frmCompleteOrder.location.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.zipcode.value) == "" )
	{
		alert("Please enter postal/zip code.");
		document.frmCompleteOrder.zipcode.focus();
		return false;
	}
	/*if(trim(document.frmCompleteOrder.customer_phone.value) == "" )
	{
		alert("Please enter phone number.");
		document.frmCompleteOrder.customer_phone.focus();
		return false;
	}*/
	
	if(trim(document.frmCompleteOrder.email.value) =="")
	{
		alert("Please enter email address.");
		document.frmCompleteOrder.email.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.email.value) != "" )
	{
		if(!isAValidEmail(document.frmCompleteOrder.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.frmCompleteOrder.email.focus();
			return(false);
		}
	}
	if(trim(document.frmCompleteOrder.cardType.value) == "" )
	{
		alert("Please select credit card type.");
		document.frmCompleteOrder.cardType.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) == "" )
	{
		alert("Please enter credit card number.");
		document.frmCompleteOrder.cardNumber.focus();
		return false;
	}
	if(trim(document.frmCompleteOrder.cardNumber.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.frmCompleteOrder.cardNumber.value.length; i++)
		{
			if (iChars.indexOf(document.frmCompleteOrder.cardNumber.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in card number.");
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
	if(document.frmCompleteOrder.expMonth.value!= "" && document.frmCompleteOrder.expYear.value != "")
	{
		var myDate	= new Date();
		var months = document.frmCompleteOrder.expMonth.value;
		var years = document.frmCompleteOrder.expYear.value;
		myDate.setFullYear(years,months,0);
		var today = new Date();
		
		if (today > myDate)
		{
		  alert("Please enter expiry date greater than current date.");
		  document.frmCompleteOrder.expMonth.focus();
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
	if(document.frmCompleteOrder.terms.checked == false)
	{
	alert("Please accept terms and conditions.");
	return false;
	}
	//document.getElementById("submitButton").style.display="none";
	
}
function viewNavBar(x)
{

	if(x==1)
	{
		document.getElementById("Peoplelookup").style.display='';
    	document.getElementById("ReversePhone").style.display='none';
		document.getElementById("namesearch").className='';
		document.getElementById("phonesearch").className='act';
	}
	else if(x==2)
	{
		document.getElementById("Peoplelookup").style.display='none';
    	document.getElementById("ReversePhone").style.display='';
		document.getElementById("namesearch").className='act';
		document.getElementById("phonesearch").className='';
		
	}
}
function newlink()
{
return true;
}
