<%@LANGUAGE="VBSCRIPT" CODEPAGE="1252"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Enviar a un amigo</title>
</head>


<body>
<% 
Set mailobj = Server.CreateObject("CDO.Message") 

'Asignamos las propiedades al objeto 
mailobj.From = "fernan@tudominio.com" 
mailobj.To = "anatalia.fj@gmail.com" 
mailobj.Subject = "Asunto del mensaje" 
mailobj.HTMLBody = "prueba" 

mailobj.Send 

Set mailobj = Nothing 'Liberar... 
'Mostramos mensaje de que seenvió con éxito. 
Response.Write "¡Se envió Ok, qué fácil!!" 

%>

</body>
</html>