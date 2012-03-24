<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kalpneel</title>
<style type="text/css">
body
{
background-color:#999999;
}
#main
{
	margin-bottom: 0;
    margin-left: auto;
    margin-right: auto;
    margin-top: 0;
    width: 960px;
}
#menu
{
background-color:#0099FF;
font-size:18px;
font-family:Georgia, "Times New Roman", Times, serif;
}
#title
{
font-size:48px;
font-style:oblique;
font-family:Georgia, "Times New Roman", Times, serif;
}
ul
{
list-style-type:none;
margin:0;
padding:0;
padding-top:6px;
padding-bottom:6px;
}
li
{
display:inline;
}
a:link,a:visited
{
font-weight:bold;
color:#FFFFFF;
text-align:center;
padding:2px;
text-decoration:none;
}
a:hover,a:active
{
color:#0033CC;
font-style:oblique;
}
#content
{
background-color:#FFFFFF;
margin-top:0;
height:400px;
}
#footer
{
background-color:#0099FF;
font-size:18px;
font-style:oblique;
font-weight:bold;
margin-top:0;
text-align:center;
}
#subscribe
{
border-style:groove;
}
#span1
{
font-style:oblique;
font-size:24px;
font-family:Verdana, Arial, Helvetica, sans-serif;
}
#span2
{
font-size:18px;
font-family:Verdana, Arial, Helvetica, sans-serif;
}
</style>
<script type="text/javascript">
function validate()
{
	if(document.subscribe.name.value=="")
	{
		alert("Enter Your Name");
		document.subscribe.name.focus();
		return false;
	}
	if(document.subscribe.email.value=="")
	{
		alert("Enter Your Email");
		document.subscribe.email.focus();
		return false;
	}
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var address = document.subscribe.email.value;
    if(reg.test(address) == false)
    {
      alert('Invalid Email Address');
	  document.subscribe.email.value="";
	  document.subscribe.email.focus();
      return false; 
    }
	var mypostrequest=new ajaxRequest()
	mypostrequest.onreadystatechange=function()
	{
 		if (mypostrequest.readyState==4)
		{
  			if (mypostrequest.status==200 || window.location.href.indexOf("http")==-1)
			{
   				document.getElementById("span2").innerHTML=mypostrequest.responseText
  			}
  			else
			{
   				alert("An error has occured making the request")
  			}
 		}
	}
	var namevalue=document.getElementById("name").value;
	var emailvalue=document.getElementById("email").value;
	var parameters="name="+namevalue+"&email="+emailvalue;
	mypostrequest.open("POST", "subscribe.php", false)
	mypostrequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
	mypostrequest.send(parameters)
}


function ajaxRequest()
{
 var activexmodes=["Msxml2.XMLHTTP", "Microsoft.XMLHTTP"] //activeX versions to check for in IE
 if (window.ActiveXObject)
 { //Test for support for ActiveXObject in IE first (as XMLHttpRequest in IE7 is broken)
  for (var i=0; i<activexmodes.length; i++)
  {
   try
   {
    return new ActiveXObject(activexmodes[i])
   }
   catch(e)
   {
    alert(e)//suppress error
   }
  }
 }
 else if (window.XMLHttpRequest) // if Mozilla, Safari etc
  return new XMLHttpRequest()
 else
  return false
}
</script>
</head>
<body>
<div id="main">
<div id="title">
Kalpneel Technologies
</div>
<div id="menu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="Readme.php">Read me</a></li>
</ul> 
</div>
<div id="content">
<br />
<span id="span1">Subscribe Form</span><br />
<span id="span2">Subscribe to get Newsletters and updates from us.<br /><br />
<div id="center">
<form name="subscribe" method="post" id="form">
<table align="center" id="subscribe" cellpadding="5" cellspacing="5">
<tr><td colspan="2" align="center"><b>Subscribe</b></td></tr>
<tr><td>Name : </td><td><input type="text" name="name"  id="name"/></td></tr>
<tr><td>Email : </td><td><input type="text" name="email" id="email" /></td></tr>
<tr><td align="center" colspan="2"><input type="submit" name="submit" value="Submit" onclick="return validate();" /></td></tr>
</table>
</form>
<br />
</div>
</span> 
</div>
<div id="footer">
Developed by Shankar Gosavi
</div>
</div>
</body>
</html>
