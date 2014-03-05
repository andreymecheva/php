function limpiar()
{
	document.form.reset();
	documnet.form.nom.focus();
}
function validar()
{
	var form = document.form;
	if(form.nom.value==0)
	{
		alert("ingrese su nombre");
		form.nom.value="";
		form.nom.focus();
		return false;
	}
	if(form.texto.value==0)
	{
		alert("ingrese su mensaje");
		form.texto.value="";
		form.texto.focus();
		return false;
	}
	form.submit();
	
	function eliminar(url)
	{
		if(confirm("Realmente desea elminar este registro? "))
		{
		window.location=url;
		}
	}
}
