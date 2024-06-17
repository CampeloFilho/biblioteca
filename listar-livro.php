<h1>Listar Livros</h1>
<?php
    $sql = "SELECT * FROM livros";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0) {
        print '<table class="table table-hover table-striped table-bordered">';
        print '<tr>';
            print '<th>#</th>';
            print "<th>Nome</th>";
            print "<th>Descrição</th>";
            print "<th>Autor</th>";
            print "<th>Ações</th>";
        print '</tr>';
        while($row = $res->fetch_assoc()) {
            print '<tr>';
            print '<td>'.$row['id'].'</td>';
            print "<td>".$row['nome']."</td>";
            print "<td>".$row['descricao']."</td>";
            print "<td>".$row['autor']."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row['id']."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row['id']."';}\" class='btn btn-danger'>Excluir</button>
                   </td>";
            print '</tr>';
        }
        print '</table>';
    } else {
        echo "Nenhum livro cadastrado";
    }
?>

