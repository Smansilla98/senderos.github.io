<?php


if(isset($_POST['submit'])){
    if (
        empty($_POST['nombre']) ||
        empty($_POST['email'])||
        empty($_POST['mensaje'] )
        ){
        header("Location: ../contacto.html?llena-todos-los-campos");
        exit();
    }
    else{
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        if(empty($_POST['tel'])){
            $telefono = 'No ingreso número de teléfono';
        } else{
        $telefono = $_POST['tel'];
        }
        $mensaje = $_POST['mensaje'];


        /*Solo para probar localmente*/
        echo
        "
        <h3>Tu mensaje ha sido enviado</h3>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Teléfono:</strong> $telefono</p>
        <p><strong>Mensaje:</strong> $mensaje</p>
        ";

        /*Envio real del formulario*/
        


        
    }

}
else{
    /**Si no manda el formulario regresa al contacto con error */
    header("Location: ../contacto.html?error");
}

?>


<h3>

</h3>
<a href="contacto.html">Regresar</a>