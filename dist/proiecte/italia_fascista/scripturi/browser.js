function msie6()
{
	ua = navigator.userAgent;
	index = ua.indexOf("MSIE");
	if (index > 0)
	{
		if (ua.substring(index+5, index+6) == "6" || ua.substring(index+5, index+6) == "5")
			alert("Browser-ul tau este prea vechi si nu va afisa corect pagina. Incearca Mozilla Firefox sau alte browsere noi.");
	}
}
msie6();
