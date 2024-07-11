<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        $id=$row->id;
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
                <label for='nome'>Nome</label>
                <input type='text' name='nome' id='nome' value="$nome" required>
                <br>
                <label for='genero'>Genero</label>
                <input type='text' name='genero' id='genero' value="$genero" required>
                </fieldset>
                <input type='hidden' name='codigo' value="$id" ><br>
                <input type='hidden' name='op' value='$operacao'><br>
            <input type='submit' value="$operacao" id='op'>
        </form>
        <div>
        <button onclick="location.href='index.html'">Voltar</button>
        </div>
    END;
    ?>
</body>
</html>