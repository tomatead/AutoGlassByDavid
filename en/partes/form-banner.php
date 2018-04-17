<div class="form-banner">
        	<span class="titulo-form">FREE ESTIMATE</span>
            <form action="enviar2.php" method="post">
            	<input placeholder="Your Name (Required)" name="nombre" type="text" required>
                <input placeholder="Your Phone Number (Required)" name="telefono" type="tel" required>
                <input placeholder="Zip Code" name="codigo" type="number" required>

                <input placeholder="Model" name="modelo" type="text" required>
                <input placeholder="Make" name="marca" type="text" required>
                <input placeholder="Year" name="year" type="number" required>

                <textarea placeholder="Please describe the services and if you window has  any special  features .( E.g.Rain sensor, heated,lane departure)" class="input" name="descripcion" ></textarea>
                
                <textarea placeholder="*If you are not sure about the features on windshield please provide VIN  (optional)" class="input" name="vin" ></textarea>

                                
                <input type="submit" value="Submit for your free quote" class="btn-form" onclick="ga('envio', 'event', 'envioEstimado', 'clic', 'ingles', 0);">
            </form>
            
            <div class="tel-form"><a href="tel:8325438060" onclick="ga('envio', 'event', 'llamadaEstimado', 'clic', 'ingles', 0);">832 543 8060</a></div>
            
        </div>

