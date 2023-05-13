<?php


function recogeDato($campo){

return isset($_REQUEST[$campo])?$_REQUEST[$campo]:'';

} 

$email1 = recogeDato('email1');

$email2 = recogeDato('email2'); 

$consulta = recogeDato('consulta');

$nombre = recogeDato('nombre');

$conocio = recogeDato('conocio');

$referente = recogeDato('referente');

$algunerror = FALSE;


if($email1==''){ 

$algunerror = TRUE; 

echo "<p class=\"erroneo\">No has introducido tu eMail</p>\n";

} elseif($email1!=$email2){ 

$algunerror = TRUE;

     echo "<p class=\"erroneo\">Los eMails introducidos no coinciden.</p>\n";

}

if($nombre==''){ 

$algunerror = TRUE;

echo "<p class=\"erroneo\">No has introducido tu nombre.</p>\n";

}

if($consulta==''){ 

$algunerror = TRUE;

echo "<p class=\"erroneo\">El área de la consulta no puede quedar en blanco.</p>\n";

}

if ($algunerror){ 

echo "<p>&nbsp;</p>\n"; 

echo "<p>No se ha podido enviar el mensaje por los errores que se detallan arriba.</p>\n";

echo "<p>Por favor, vuelve a rellenar el formulario.</p>\n";

echo "<p class=\"centrado\"><a href=\"contacto.html\">Volver al formulario</a></p>\n";

}else{

$para="misa_skot@hotmail.com"; 

$asunto="Contacto web Flores - consulta sobre ".$referente;

$mensaje="Datos del formulario de contacto:\n". 

"Nombre: ".$nombre." \n".

"eMail: ".$email1."\n".

"Nos conocio por: ".$conocio." \n".

"Pregunta: ".$consulta;

mail($para, $asunto, $mensaje); 

echo "<p>Tu mensaje se ha enviado correctamente. Gracias por contactar con nosotros.</p>\n";

echo "<p>Nos pondremos en contacto lo antes posible.</p>\n";

}

?>