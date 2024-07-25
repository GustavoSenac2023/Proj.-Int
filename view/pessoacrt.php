<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php
    $op=$_REQUEST["op"];
    if ($op=="Alterar") {
        include_once "../controller/PessoaCont.php";
        $res=PessoaCont::resgataID($_REQUEST["codigo"]);
        $qtd=$res->rowCount();
        $row=$res->fetch(PDO::FETCH_OBJ);
        $nome=$row->nome;
        $genero=$row->genero;
        $id=$row->cpf;
        $operacao="Alterar";
    }else {
        $nome="";
        $genero="";
        $id="";
        $operacao="Incluir";
    }
    print <<<END
    <form action='../process/PessoaProcess.php' method='post'>
            <fieldset>
                <legend>Informações</legend>
                <label for='cpf'>CPF</label>
                <input type='text' name='cpf' id='cpf' value="$id" required>
                <br>
                <label for='nome'>Nome</label>
                <input type='text' name='nome' id='nome' value="$nome" required>
                <br>
                <input type="radio" id="option1" name="options" value="m">
                <label for="option1">Masculino</label><br>
                <input type="radio" id="option2" name="options" value="f">
                <label for="option2">Feminino</label><br>
                </fieldset>
                <input type='hidden' name='op' value='$operacao'><br>
            <input type='submit' value="$operacao" id='op'>
        </form>
        <div>
        <button class='cancel' onclick="location.href='index.html'">Voltar</button>
        </div>
    END;
    ?>
</body>
</html>