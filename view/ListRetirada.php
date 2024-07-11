<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "../controller/RetiradaCont.php";
    $res = RetiradaCont::listarRetirada();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        print "<table class='table table-hover table striped table bordered'>";
        print "<th>#</th>";
        print "<th>Status</th>";
        print "<th>Data</th>";
        print "<th>FK_Pessoa</th>";
        print "<th>FK_Livro</th>";
        while ($row=$res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->status."</td>";
            print "<td>".$row->data."</td>";
            print "<td>".$row->fk_Pessoa_id."</td>";
            print "<td>".$row->fk_Livro_id."</td>";
            print "<td>
            <div class='btns'>
            <button id='alt' onclick=\"location.href='../view/retiradacrt.php?op=Alterar&codigo=".$row->id."';\">Alterar</button>
            <button id='del' onclick=\"location.href='../process/RetiradaProcess.php?op=Excluir&codigo=".$row->id."';\">Excluir</button>
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
    <div>
        <button onclick="location.href='index.html'">Voltar</button>
    </div>
</body>
</html>