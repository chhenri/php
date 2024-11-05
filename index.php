<?php
    //Função responsável por iniciar a sessão no navegador
    session_start();
    $id = session_id();
    echo "Session Id: ".$id;

?>