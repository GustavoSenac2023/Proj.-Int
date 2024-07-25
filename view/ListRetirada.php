<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index2.css">
    <title>Document</title>
</head>
<body>
    

<?php
    include "../controller/RetiradaCont.php";
    function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
    }
    //$prompt_msg = "Command";
    //$in = prompt($prompt_msg);
    //echo $in;

    print <<<END
        <form action="../view/ListRetirada.php" method="post" class="fsearch">
        <label for="search">Pesquisa por Status</label>
        <input type="text" name="pesquisa" id="pesquisa">
        <button type="submit">Pesquisar</button>
        </form>
    END;
    error_reporting(E_ERROR | E_PARSE);
    $in=$_POST["pesquisa"];
    if($in!=""){
        $res=RetiradaCont::pesquisarRetirada($in);
    //$res = RetiradaCont::listarRetirada();
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
            print "<td>".$row->STATUS."</td>";
            print "<td>".$row->DATA."</td>";
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
}
    ?>
    <div>
        <button class="back" onclick="location.href='index.html'">Voltar</button>
    </div>
</body>
</html>