<?php 
print_r($_POST);

//echo "olá a todos!";
if(isset($_POST['nome'])){

}
?>
<center>
    <a>Eai</a>
    <h1>Eai2</h1>
    <h2>Eai3</h2>
    <a href="aula3.php">Voltar</a>
    <form action="" method= "POST">
        <label>
            <b style="color:red;">Irnforme o seu Nome:</b>
        </label>
        <input type="text" name="nome"><br><br>

        <label>
            <b>Informe o seu ,
                <b style="color:blue;">Sobrenome</b>:
            </b>
        </label>
        <input type="text" name="sobrenome"><br><br>

        <label>
            <b>Informe a sua idade:</b>
        </label>
        <input type="number" name="idade"><br><br>

        <label>
            <b>Informe a sua data de nascimento:</b>
        </label>
        <input type="date" name="data de nascimento"><br><br>

        <button type="submit">Gravar</button>

    </form>

    <img src="imagens/moto2.png" width="25%" height= "25%">
    <img src="imagens/moto.png" width="25%" height= "25%">
</center>