
function Cookie()
{
	this.creerCookie = creerCookie;
	this.modifierCookie = modifierCookie;
	this.suprimerCookie = suprimerCookie;
	this.afficherCookie = affichier;

	function creerCookie(nom,contenu,nbJours)
	{
		var theDate = new Date();
		theDate.setTime(theDate.getDate()+(nbJours*24*3600*1000));
		document.cookie=nom+"="+contenu+";expire="+theDate.toUTCString();
	}

	function modifierCookie(nom,contenu,nbJours)
	{
		c.creerCookie(nom,contenu,nbJours);
	}

	function suprimerCookie(nom)
	{
		c.creerCookie(nom,"blabla",-10);
        
	}
}
var c = new Cookie();
c.creerCookie("myCookie","the contenu",10);