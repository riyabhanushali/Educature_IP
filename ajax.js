var xmlHttp
function sendTitle(str)
{
	
	GetXmlHttpObject()
	if(xmlHttp==null)
	{
		alert("Browser does not support")
		return
	}
	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{
		document.getElementById("res").innerHTML=xmlHttp.responseText
		alert("in")
	}
	var url="getbook.php"
	url=url+"?q="+str;
	xmlHttp.onreadystatechange=stateChanged
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}
function stateChanged()
{
	
}
function GetXmlHttpObject()
{
	try{
		xmlHttp=new XMLHttpRequest();
	}
	catch(e)
	{   
		try{
			xmlHttp=new ActiveXObject("MSxml2.XMLHTTP");
		}
		catch(e)
		{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
			
	}
	return xmlHttp;
}