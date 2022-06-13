<html>
    <head>
    <title>Nosso primeiro sistema</title>
    </head>
    <center>
    <body bgcolor="purple">
    <form action="" method="POST">

        <h1>Formulário</h1><br><br>

        <label>
            <b>Nome:</b>
        </label>
        <input type="text" name="nome"><br><br>

        <label>
            <b>CPF:</b>
        </label>
        <input type="number " name="cpf"><br><br>

        <label>
            <b>Data de nascimento:</b>
        </label>
        <input type="date" name="nascimento"><br><br>


        <label>
            <b>Serie:</b>
        </label>
        <input type="text" name="serie"><br><br>

       
        <label>
            <b>Email:</b>
        </label>
        <input type="text" name="email"><br><br>

        <button type="submit">Salvar</button><br><br>

</center>
    </form>
    </body>
</html>
<?php
if(isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['nascimento']) && isset($_POST['serie']) && isset($_POST['email'])){


    echo "<h2 style= 'color:white;'> Seu cadastro foi efetuado com sucesso!</h>";
}
?>