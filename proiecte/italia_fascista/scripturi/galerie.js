var curent = 0;
var str = "galerie/";
var imaginea;
var img_cur;
var img_max;
var desc_imagine_text;
imagini = [
	{nume:"muss17.jpg", desc:"Mussolini (1917)"},
	{nume:"muss19.jpg", desc:"Mussolini (1919)"},
	{nume:"musstan.jpg", desc:"Mussolini tanar"},
	{nume:"arest.jpg", desc:"Mussolini arestat in 1903"},
	{nume:"muss23.gif", desc:"Mussolini (1923)"},
	{nume:"cartpost.jpg", desc:"Carte postala semnata de Mussolini"},
	{nume:"poster.jpg", desc:"Poster cu Mussolini"},
	{nume:"mussport.jpg", desc:"Un portret cu Mussolini"},
	{nume:"timemuss.jpg", desc:"Mussolini pe coperta revistei Time"},
	{nume:"xray.jpg", desc:"Carte postala de propaganda cu Mussolini"},
	{nume:"cartpost2.jpg", desc:"O carte postala americana de propaganda cu Mussolini"},
	{nume:"hitmussparad.jpg", desc:"Mussolini si Hitler in timpul unei parade"},
	{nume:"hitmussparad2.jpg", desc:"Mussolini si Hitler in timpul unei parade"},
	{nume:"hitmuss2.jpg", desc:"Mussolini si Hitler"},
	{nume:"hitmuss3.jpg", desc:"Mussolini si Hitler"},
	{nume:"timbru.jpg", desc:"Mussolini si Hitler pe un timbru"},
	{nume:"mussdisc1.jpg", desc:"Mussolini in timpul unui discurs"},
	{nume:"mussdisc2.png", desc:"Mussolini in timpul unui discurs"},
	{nume:"mussdisc3.png", desc:"Mussolini in timpul unui discurs"},
	{nume:"mussdisc4.jpg", desc:"Mussolini in timpul unui discurs"},
	{nume:"medalie.png", desc:"Mussolini acordand o medalie"},
	{nume:"ceremonie.png", desc:"Mussolini in timpul unei ceremonii"},
	{nume:"copil.png", desc:"Mussolini cu un copil"},
	{nume:"mussapr.jpg", desc:"Mussolini mort, langa amanta lui si altii"},
	{nume:"mussspan.jpg", desc:"Mussolini si altii spanzurati pentru expunere publica"},
	{nume:"mussspan2.jpg", desc:"Mussolini si altii spanzurati pentru expunere publica (alt unghi)"}
];

function inainte()
{
	if (curent < imagini.length) 
	{
		img_cur.innerHTML = ++curent;
		imaginea.src = str + imagini[curent-1].nume;
		desc_imagine_text.innerHTML = imagini[curent-1].desc;
	}
}
function inapoi()
{
	if (curent > 0) 
	{
		img_cur.innerHTML = --curent;
		imaginea.src = str + imagini[curent-1].nume;
		desc_imagine_text.innerHTML = imagini[curent-1].desc;
	}
}
function prima()
{
	img_cur.innerHTML = curent = 1;
	imaginea.src = str + imagini[curent-1].nume;
	desc_imagine_text.innerHTML = imagini[curent-1].desc;
}
function ultima()
{
	img_cur.innerHTML = curent = imagini.length;
	imaginea.src = str + imagini[curent-1].nume;
	desc_imagine_text.innerHTML = imagini[curent-1].desc;
}
function init()
{
	imaginea = document.getElementById("img_gal");
	img_cur = document.getElementById("img_cur");
	img_max = document.getElementById("img_max");
	desc_imagine_text = document.getElementById("desc_imagine_text");
	img_max.innerHTML = imagini.length;
	inainte();
}