<?php 
function conexionBase(){
    // Conexión con db = mysql_connect('ip_de_bd', 'usuario', 'clave', 'nombre_db')
    $base = mysql_connect('localhost', 'iperf', 'iperf', 'iperf');
    return $base;
}

$conn = conexionBase();


?>