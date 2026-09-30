<?php
    $conn = new mysqli("localhost", "root", "", "furrylove_db");
    if(!($conn)){
        echo "Conexión no establecida";
    }

?>