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
        include_once "../controller/LivroCont.php";
        $res=LivroCont::resgataID($_REQUEST["codigo"]);
        $qtd=$res->rowCount();
        $row=$res->fetch(PDO::FETCH_OBJ);
        $titulo=$row->titulo;
        $autor=$row->autor;
        $id=$row->id;
        $operacao="Alterar";
    }else {
        $titulo="";
        $autor="";
        $id="";
        $operacao="Incluir";
    }
    print <<<END
    <form action='../process/LivroProcess.php' method='post'>
            <fieldset>
                <legend>Informações</legend>
                <label for='titulo'>Titulo</label>
                <input type='text' name='titulo' id='titulo' value="$titulo" required>
                <br>
                <label for='autor'>Autor</label>
                <input type='text' name='autor' id='autor' value="$autor" required>
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