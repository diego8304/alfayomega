
<h1 class="fw-300 centrar-texto">Contáctanos</h1>
<hr>

<img src="vistas/img/destacada.jpg" alt="Imagen Principal"  >

<main class="contenedor seccion contenido-centrado">


    
    <h3 class="fw-300 centrar-texto">Para más información diligencia el siguiente formulario de contacto.</h3>
    <hr>

    <form class="contacto" method="post" onsubmit="return validarContactenos()" >
        <fieldset>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombreContactenos" placeholder="Tu Nombre" required>

            <label for="email">E-mail: </label>
            <input type="email" id="email" name="emailContactenos" placeholder="Tu Correo electrónico" required>

            <label for="telefono">Telefono: </label>
            <input type="number" id="telefono" name="telefonoContactenos" placeholder="Telefono de Contacto" required >

            <label for="mensaje">Mensaje: </label>
            <textarea  id="mensaje" name="mensajeContactenos"></textarea>


        </fieldset>

        <input type="hidden" name="envio" value="1">
        <input type="submit" value="Enviar"  class="boton boton-verde">

        

        <?php

            if(isset($_POST['envio']) && !empty($_POST['envio'])){

                $contactenos=new ControladorUsuarios();
                $contactenos->ctrFormularioContactenos();

            }

        ?>

    </form>








</main>