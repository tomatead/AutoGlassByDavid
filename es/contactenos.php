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
	
    <?php include('partes/menu-movil.php')?>

	<?php include('partes/head.php')?>
    
    
    <div class="info">
    	
        <h1 class="">Contáctenos</h1>
        <hr>     
        

        <div class="row">
            
            <div class="col-sm-12 col-md-4 formu">
                <p style="text-align:center;">Llamenos:</p>
                 <a href="tel:8325438060">832 543 8060</a>
                 <span class="txt-form">Llámenos hoy si necesita reemplazar su parabrisas</span>
                 <p>Cambiamos los vidrios de su carro a domicilio o en su lugar de trabajo.</p>
                 <br>
                 <br>
            </div>
            <div class="col-sm-12 col-md-8">
                
                <div class="form">
                    <form action="enviar.php" name="enviar" method="post">
                    <input placeholder="Su nombre (Requerido)" name="nombre" type="text" required>
                    <input placeholder="Teléfono (Requerido)" name="telefono" type="tel" required>
                    <input placeholder="Correo Electrónico (Requerido)" name="email" type="email" required>
                    
                    <textarea placeholder="Escribe tu mensaje" class="input" name="mensaje" class="input" ></textarea>

                    
                    <input type="submit" value="Enviar" class="btn-form">
                    </form> 
                
                </div>

            </div>
                
        </div>




        
            	
        
    </div>
    
    
    
    
    <?php include('partes/footer.php')?>
    
</body>
</html>