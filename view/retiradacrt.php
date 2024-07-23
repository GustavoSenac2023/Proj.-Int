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
        include_once "../controller/RetiradaCont.php";
        $res=RetiradaCont::resgataID($_REQUEST["codigo"]);
        $qtd=$res->rowCount();
        $row=$res->fetch(PDO::FETCH_OBJ);
        $status=$row->status;
        $data=$row->data;
        $fk_pessoa=$row->fk_Pessoa_id;
        $fk_livro=$row->fk_Livro_id;
        $id=$row->id;
        $operacao="Alterar";
    }else {
        $status="";
        $data="";
        $fk_pessoa="";
        $fk_livro="";
        $id="";
        $operacao="Incluir";
    }
    print <<<END
    <form action='../process/RetiradaProcess.php' method='post'>
            <fieldset>
                <legend>Informações</legend>
                <input type="radio" id="option1" name="options" value="ret">
                <label for="option1">Retirar</label><br>
                <input type="radio" id="option2" name="options" value="dev">
                <label for="option2">Devolver</label><br>
                <br>
                <label for='data'>Data</label>
                <input type='date' name='data' id='data' value="$data" required>
                <br>
                <label for='fk_pessoa'>Pessoa</label>
                <input type='text' name='fk_pessoa' id='fk_pessoa' value="$fk_pessoa" required>
                <br>
                <label for='fk_livro'>Livro</label>
                <input type='text' name='fk_livro' id='fk_livro' value="$fk_livro" required>
                <br>
                </fieldset>
                <input type='hidden' name='codigo' value="$id" ><br>
                <input type='hidden' name='op' value='$operacao'><br>
            <input type='submit' value="$operacao" id='op'>
        </form>
        <div>
        <button class='cancelret' onclick="location.href='index.html'">Voltar</button>
        </div>
    END;
    ?>
    <script src="index.js"></script>
</body>
</html>