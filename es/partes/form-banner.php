<div class="form-banner">
        	<span class="titulo-form">ESTIMADO GRATIS</span>
            <form action="enviar2.php" method="post">
            	<input placeholder="Nombre (Requirido)" name="nombre" type="text" required>
                <input placeholder="Número Telefónico (Requirido)" name="telefono" type="tel" required>
                <input placeholder="Código Postal" name="codigo" type="number" required>

                <input placeholder="Modelo del automovil" name="modelo" type="text" required>
                <input placeholder="Marca" name="marca" type="text" required>
                <input placeholder="Año" name="year" type="number" required>

                <textarea placeholder="Por favor describa las características de su parabrisas o ventanas. Si tienen alguna función especial , sensor de lluvia. calefacción, sistema de advertencia de salida del carril." class="input" name="descripcion"></textarea>
                
                <textarea placeholder="*Si usted no está seguro de las características del parabrisas  por favor envíenos el (vin) numero de identificacion del vehiculo (optional)." class="input" name="vin"></textarea>
                                
                <input type="submit" value="Envíelo para su estimado gratis" class="btn-form" 
                    onclick="ga('envio', 'clic', 'estimadoEspañol', 'clic', 'español', 0);">
            </form>
            
            <div class="tel-form"><a href="tel:8325438060"
                onclick="ga('envio', 'clic', 'llamadaEstimadoEspañol', 'clic', 'español', 0);">
                >832 543 8060</a></div>
            
        </div>

