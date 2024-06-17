<h1>Editar Livro</h1>
<?php
    $sql = "SELECT * FROM livros WHERE id=" . intval($_REQUEST["id"]);
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" value="<?php print $row->descricao;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Autor</label>
        <input type="text" name="autor" value="<?php print $row->autor;?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>
