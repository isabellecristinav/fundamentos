<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>

<body>
    <form>
        Informe sua idade: <input type="text" name="num1"><br>
        <button type="submit">exibir</button>
    </form>

    <?php
    if (isset($_GET['num1'])) {
        $num1 = $_GET['num1'];

        if ($num1 < 18)
            echo "Entrada Não Permitida";
        else
            echo "Entrada permitida";
    }
    ?>
</body>

</html>