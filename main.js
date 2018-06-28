function clicked(i, d, b, c) {
    var value = parseInt(document.getElementById(d).value);
    if (value === 0 && i === -1) {
        document.getElementById(b).disabled = true;
    }
    else {
        if (document.getElementById(c).disabled == true) {
            document.getElementById(c).disabled = false;
        }
        value = value + i;
        document.getElementById(d).value = value;
    }
}
function openNav() {
    document.getElementById("mySidenav").style.width = "235px";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
/*function impose()
{
	var a=document.getElementById("nameSignUp").value;
	alert(a);
	document.getElementById("imposeName").innerHTML="Hi, "+a;
}*/
function showSnack(d)
{
	var value=parseInt(document.getElementById(d).value);
	if(value===0)
	{
		var x=document.getElementById("snackbar2");
		x.className="show";
		setTimeout(function()
		{
			x.className=x.className.replace("show","");
		},3000);
	}
	else
	{
		var x=document.getElementById("snackbar1");
		x.className="show";
		setTimeout(function()
		{
			x.className=x.className.replace("show","");
		},3000);
	}
	value=0;
	document.getElementById(d).value=value;
}