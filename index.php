<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro</title>
    <link  href="estilo.css" rel="stylesheet" />

</head>
<body>


    <div id="area">
        <form id="formulario" method="POST" action="main.php">
       
       <?php 
    if(isset ($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
        ?>
        
    
        <fieldset>
        <legend>FORMULÁRIO DE CADASTRO</legend>
        <label>CPF:</label>
            <input class="campo_cpf" type="text" name="cpf" placeholder="Digite o CPF"><br><br>

        <label>Nome:</label>
            <input class="campo_nome" type="text" name="nome" placeholder="Digite seu Nome"><br><br>

        <label>Data de Nascimento:</label>
            <input class="campo_datan" type="text" name="data" placeholder="Digite a Data"><br><br>

        <label>E-mail:</label>
            <input class="campo_email" type="email" name="email" placeholder="Digite o E-mail"><br><br>

        <label>Telefone:</label>
            <input class="campo_telefone" type="text" name="telefone" placeholder="Digite o Telefone"><br><br>

        <label>Sexo:</label>
            <input class="campo_sexo" type="text" name="genero" placeholder="Digite o Genero"><br><br>

        <input class="btn_submit" type="submit" value="Cadastrar">
        </fieldset>
        
        </form>
    </div>
</body>
</html>