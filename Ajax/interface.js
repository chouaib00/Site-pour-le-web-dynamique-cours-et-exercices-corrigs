$('document').ready(function(){
	$('form').submit(function (){
	var nom=$('#nom').val();
	var message=$('#message').val();
	$.post("insertion.php",{nom:nom,message:message},function(donnees)
		{
			$('#feed').html(donnees);
			window.alert(donnees);
			$('#nom').val("");
			$('#message').val("");
			recuperer();
		
		})
	
	return false ;
	});
	function recuperer(){
	$.post("recuperer.php",function (data){
		$('#conteneur').html(data);
	
	});
	
	
	}
	
	
		


	}	
);