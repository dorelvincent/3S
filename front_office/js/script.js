function ax_react()
{
	var xhr = new XMLHttpRequest();
	var bla = document.getElementById('cat');
	xhr.onreadystatechange = function() {Changementsouscat(xhr);};
	xhr.open("GET", "../Traitements/util/pax_categories.php?cat=" + bla.value, true);
	xhr.send(null); 
}


function Changementsouscat(xhr)
 {
		// alert("TOTOReadyState : "+xhr.readyState);
		if(xhr.readyState == 4)
		{
			var DocXML = xhr.responseXML; 
			
			var Utilis = DocXML.getElementsByTagName("souscat");
			
			var codes = DocXML.getElementsByTagName("codecat");
			
			document.getElementById('souscat').innerHTML = " "
			for(var i = 0; i < Utilis.length; i++)
			{				
				var Util = Utilis.item(i).firstChild.data;
				var code = codes.item(i).firstChild.data;
				
				document.getElementById('souscat').innerHTML =  document.getElementById('souscat').innerHTML  + "<option value='"+ code + "'>"+ Util + "</option>";
			}
		}
}
	
	