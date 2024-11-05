<html>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     <br>   Usuário ID: <input type="text" name="ID" id=""/> <br> <br>
        Usuário Nome: <input type="text" name="nome" id=""/> <br> <br>
        Típo Usuário: <input type="text" name="tipo" id=""/> <br> <br>
        <input type="submit" value="Enviar">
    </form>

    <?php 
    session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $_SESSION['ID'] = $_POST['ID'];
        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['tipo'] = $_POST['tipo'];


    }
    echo "<h2> Variáveis de Sessão Criadas </h2>";
    foreach($_SESSION as $key=>$val){
        echo "<h3>" . $key . "=>" . $val . "</h3>";
    }

    ?>
</body>

</html>