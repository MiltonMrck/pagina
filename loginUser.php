<?php
/*ESTA CONDICION ES PARA QUE NO TE REDIRECCIONE A OTRA PAGINA 
SIN EL REGISTRO DE LA SESION Signo de admiracion es para negar algo*/

/*if (!$_POST) {
    header('Location:login.html');
}*/
if (isset($_POST)) {
    header('Location:login.html');
}



