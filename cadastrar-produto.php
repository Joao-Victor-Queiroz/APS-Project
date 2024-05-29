<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/vars.css">
    <link rel="stylesheet" type="text/css" href="./styles/reset.css">
    <link rel="stylesheet" type="text/css" href="./styles/login-cadastro.css"> 
    <title>Golden Wing</title>
</head>
<body>
    <div class="login-site">
        <div class="formulario-login">
            <h1>Cadastrar Produto</h1>
            <form action="produtodb.php" class="form-cadastro_content" enctype="multipart/form-data" method="post">
                <div class="campo-formulario">
                    <label for="idProduto">ID Produto</label>
                    <input type="text"  id="idProduto" name="idProduto" placeholder="Digite o id do produto">
                </div>
                <div class="campo-formulario">
                    <label for="idCategoria">ID Categoria</label>
                    <input type="text"  id="idCategoria" name="idCategoria" placeholder="Digite o id da categoria que ele pertence">
                </div>
                <div class="campo-formulario">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text"  id="nomeProduto" name="nomeProduto" placeholder="Digite o nome do produto">
                </div>
                <div class="campo-formulario">
                    <label for="descricaoProduto">Descrição do Produto</label>
                    <input type="text"  id="descricaoProduto" name="descricaoProduto" placeholder="Digite a descrição" maxlength="800">
                </div>
                <div class="campo-formulario">
                    <label for="precoProduto">Preço do Produto</label>
                    <input type="text"  id="precoProduto" name="precoProduto" placeholder="Digite o preço" >
                </div>
                <div class="campo-formulario">
                    <label for="qtdProduto">Quantidade do Produto</label>
                    <input type="text"  id="qtdProduto" name="qtdProduto" placeholder="Digite a quantidade em estoque" >
                </div>
                <div class="campo-formulario">
                    <label for="imgProduto">Envie a imagem do produto</label>
                    <input type="file" name="arquivos"  multiple /> 
                </div>
                <div class="button-login">
                    <button>Cadastrar o produto</button>
                </div>
            </form>
        </div>
       
    </div>
</body>
</html>