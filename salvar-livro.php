<?php
include("conexao.php");

switch($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $conn->real_escape_string($_POST['nome']);
        $desc = $conn->real_escape_string($_POST['descricao']);
        $autor = $conn->real_escape_string($_POST['autor']);

        $sql = "INSERT INTO livros (nome, descricao, autor) VALUES ('{$nome}', '{$desc}', '{$autor}')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Cadastro realizado');</script>"; 
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        break;
    case 'editar':
        $nome = $conn->real_escape_string($_POST['nome']);
        $desc = $conn->real_escape_string($_POST['descricao']);
        $autor = $conn->real_escape_string($_POST['autor']);

        $sql = "UPDATE livros SET nome='{$nome}', descricao='{$desc}', autor='{$autor}' WHERE id=" . intval($_REQUEST['id']);

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Edição realizada');</script>"; 
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM livros WHERE id=" . intval($_REQUEST["id"]);

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Exclusão realizada');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        break;
}
?>

