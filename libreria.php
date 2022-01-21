<?php
    function primeraMayuscula($dato)
    {
    echo "función ";
    return ucfirst($dato);
    }

    function reemplazar($valorBuscado,$valorReemplazar,$texto)
    {
    return str_replace($valorBuscado,$valorReemplazar,$texto);
    }

    function info($dato)
    {
    return "Versión de php ".phpversion()."info del servidor ".$_SERVER["SERVER_SIGNATURE"];
    }
?>
