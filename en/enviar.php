<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Glass by David</title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="(min-width:960px)"/>
    <link rel="stylesheet" type="text/css" href="../css/style-movil.css" media="(max-width:959px)"/>

</head>

<body>

<br>
<div class="logo" style="margin:30px auto;"><img src="../images/logo.svg" width="100%"></div>

<div class="mensaje-form">

<?php
	
	$destinatario='info@autoglassbydavid.com';
	
	//estos datos se usaran como cabecera del email.
	$cabeceras="MIME-Version: 1.0\r\n";
	$cabeceras.= "Content-type: text/html; charset=utf-8\r\n";
	$cabeceras.="From: {$_POST['nombre']}<{$de}>\r\n";
	$cabeceras.="Reply-To: {$_POST['email']}\r\n";
	//el asunto del mensaje:
	$asunto="Nuevo mensaje de Web Site";
	//El cuerpo del mensaje:
	$cuerpo='Nuevo mensaje de '.$_POST['nombre'].' con los siguientes datos:';
	$cuerpo.=


'<br><strong>Nombre</strong>:<br>'.$_POST['nombre']. 
'<br><strong>E.mail</strong>:<br>'.$_POST['email'].
'<br><strong>Teléfono</strong>:<br>'.$_POST['telefono'].
'<br><strong>Mensaje</strong>:<br>'.$_POST['mensaje'].

'<br>';
	//la persona que envia el email.
	$de=$_POST['email'];


	if(mail($destinatario, $asunto, $cuerpo,$cabeceras)){
		echo utf8_encode('<br><br><span class="msn-form">Your message was sent.</span><br>');	 
		echo utf8_encode('<script type="text/javascript">  function redireccionarPagina() {  window.location = "index.php";  } setTimeout("redireccionarPagina()", 3500); </script>');
			 
	 }else{
	 	echo utf8_encode('<br><br><span class="msn-form">Error sending message</span><br><p>Try again later.</p>');
		echo utf8_encode('<script type="text/javascript">  function redireccionarPagina() {  window.location = "index.php";  } setTimeout("redireccionarPagina()", 3500); </script>');	
	 } 
?>


</div>

</body>
</html>