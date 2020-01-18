$(function()
{
	var regex;
	var str;
	var chain;
	var tabImg=["true.png","false.png"]
	//verification de Login
	var long = $("tr").length;
	
	var i=0;
	$("tr").append("<td><img></img></td>");
	$("img").css("width","20px").css("higth","20px");

	$("tr").append("<td><span></span></td>");
	for(var i=0;i<long;i++)
	{
		$("img")[i].setAttribute("class","img"+i);

		$("span")[i].setAttribute("class","span"+i);
	}
	
	$(".login").on("keyup",login);
	

	function login()
	{
		
		 regex = /\w{5,15}/;
		if(!regex.test($(".login").val()) || $(".login").val().length>15)
		{
			$(".img0").attr("src",tabImg[1]);
			$(".span0").text("Login invalide");
			$(".span0").css("color","red");
			return false;
		}
		else
		{
			$(".img0").attr("src",tabImg[0]);
			$(".span0").text("Login OK");
			$(".span0").css("color","green");	
			return true;
		}
	}
	$(".pwd").on("keyup",passworde);

	function passworde()
	{
		regex=/\d+[a-zA-Z]+|[a-zA-Z]+\d/;
		chain =$(".pwd").val();
		console.log(chain);
		if(!regex.test(chain) || chain.length<8 || chain.length>15)
		{
			$(".img1").attr("src",tabImg[1]);
			$(".span1").text("Mot de passe invalide");
			$(".span1").css("color","red");
			return false;
		}
		else
		{
			$(".img1").attr("src",tabImg[0]);
			$(".span1").text("Login OK");
			$(".span1").css("color","green");
			return true;
		}
	}

	$(".email").on("keyup",email);

	function email()
	{
		regex=/^\w{4,}@\w+\.[a-zA-Z]{2,3}$/
		chain=$(".email").val();
		if(!regex.test(chain))
		{
			$(".img2").attr("src",tabImg[1]);
			$(".span2").text("Email invalide");
			$(".span2").css("color","red");
			return false;
		}
		else
		{
			$(".img2").attr("src",tabImg[0]);
			$(".span2").text("Login OK");
			$(".span2").css("color","green");
			return true;
		}
	}

	function eliminer(str)
	{
		var chaine="";
		for(i in str)
			{
				if(str[i]!=" " && str[i]!="-" && str[i]!="(" && str[i]!=")")
					chaine+=str[i];
			}
			return chaine;
	}	
	$(".phone").on("blur",phone);

	function phone()
	{
		chain = eliminer($(".phone").val());
		console.log($(".phone"));
		regex  =/^\d{10}$/;
		if(!regex.test(chain))
		{
			$(".img3").attr("src",tabImg[1]);
			$(".span3").text("Numero de telephone invalide");
			$(".span3").css("color","red");
			return false;
		}
		else
		{
			$(".phone").val(chain);
			$(".img3").attr("src",tabImg[0]);
			$(".span3").text("Numero de telephone OK");
			$(".span3").css("color","green");
			return true;
		}

	}

	$('.adress').on("blur",adress)

	function adress()
	{
		chain = $(".adress").val();
		if(chain.length===0)
		{
			$(".img4").attr("src",tabImg[1]);
			$(".span4").text("Adress invalide");
			$(".span4").css("color","red");
			return false;
		}
		else
		{
			$(".img4").attr("src",tabImg[0]);
			$(".span4").text("Adress OK");
			$(".span4").css("color","green");
			return true;
		}
	}

	$('.codeP').on("keyup",codePostale)

	function codePostale()
	{
		regex = /^\d{5}$/;
		chain = $('.codeP').val();
		if(!regex.test(chain))
		{
			$(".img5").attr("src",tabImg[1]);
			$(".span5").text("Code postale invalide");
			$(".span5").css("color","red");
			return false;
		}
		else
		{
			$(".img5").attr("src",tabImg[0]);
			$(".span5").text("Code postale OK");
			$(".span5").css("color","green");
			return true;
		}
	}

	$('.ville').on("keyup",ville)

	function ville()
	{
		regex = /^[a-zA-Z]+$/;
		chain = $(".ville").val();
		if(!regex.test(chain) || chain.length<3)
		{
			$(".img6").attr("src",tabImg[1]);
			$(".span6").text("Ville invalide");
			$(".span6").css("color","red");
			return false;
		}
		else
		{
			$(".img6").attr("src",tabImg[0]);
			$(".span6").text("Ville OK");
			$(".span6").css("color","green");
			return true;
		}
	}

	$(".effacer").on("click",function()
	{
		
	});

	$(".envoyer").on("click",function(e)
	{
		var message="";
			
		var tabMessage=["le Login ne contient que des letres et de chifres",
		"Mot de passe une valeure de 8 a 15",
		"Inserer une adress Email valide",
		"Numero de telephone ne contien que 10 chifres",
		"Entrer une Adress Valide",
		"Entrez un code Postal valide",
		"Entrez une ville valide"];
		
		if(!login())
			message+="\n_"+tabMessage[0];
	
		if(!passworde())
			message+="\n_"+tabMessage[1];
		if(!email())
			message+="\n_"+tabMessage[2];
		
		if(!phone())
			message+="\n_"+tabMessage[3];
		if(!adress())
			message+="\n_"+tabMessage[4];
		if(!codePostale())
			message+="\n_"+tabMessage[5];
		if(!ville())
			message+="\n_"+tabMessage[6];
	
		if(message!="")
		{
			alert("Les valeures inserer dans certains champs sont incorrectes"+message);
			$("fieldset").css("backgroundColor","#FF980F");
			e.preventDefault();

		}
		



	});

	

});