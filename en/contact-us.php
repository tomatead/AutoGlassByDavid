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
    	
        <h1 class="">Contact Us</h1>
        <hr>     
        

        <div class="row">
            
            <div class="col-sm-12 col-md-4 formu">
                <p style="text-align:center;">Call us:</p>
                 <a href="tel:8325438060">832 543 8060</a>
                 <span class="txt-form">Call Us Today For All Of Your Windshield Replacement Needs</span>
                 <p>We change the glasses of your car at home or at your place of work.</p>

                 <br>
                 <br>
            </div>
            <div class="col-sm-12 col-md-8">
                
                <div class="form">
                    <form action="enviar.php" name="enviar" method="post">
                    <input placeholder="Your Name (Required)" name="nombre" type="text" required >
                    <input placeholder="Your Phone Number (Required)" name="telefono" type="tel" required >
                    <input placeholder="Your email (Required)" name="email" type="email" required>
                    
                    <textarea placeholder="Write your message" class="input" name="mensaje" class="input" ></textarea>

                    
                    <input type="submit" value="Submit" class="btn-form">
                    </form> 
                
        </div>

            </div>
                
        </div>




        
            	
        
    </div>
    
    
    
    
    <?php include('partes/footer.php')?>
    
</body>
</html>