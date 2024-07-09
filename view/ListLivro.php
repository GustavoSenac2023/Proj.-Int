<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "../controller/LivroCont.php";
    $res = LivroCont::listarLivro();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        print "<table class='table table-hover table striped table bordered'>";
        print "<th>#</th>";
        print "<th>Titulo</th>";
        print "<th>Autor</th>";
        while ($row=$res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->titulo."</td>";
            print "<td>".$row->autor."</td>";
            print "<td>
            <div class='btns'>
            <button id='alt' onclick=\"location.href='../view/livrocrt.php?op=Alterar&codigo=".$row->id."';\">Alterar</button>
            <button id='del' onclick=\"location.href='../process/LivroProcess.php?op=Excluir&codigo=".$row->id."';\">Excluir</button>
            </div>
            </td>";
            echo "</form>";
            print "</tr>";
        }
        print "</table>";     
    }else {
        echo "No data found!";
    }
    ?>
</body>
</html>