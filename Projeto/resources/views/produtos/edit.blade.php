<!DOCTYPE html>
<html lang="t-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar um novo produto</title>
    </head>

    <body>
        <form action="{{ route('alterar_produto', ['id'=>$produto->id]) }}" method="POST">
        @csrf
            <legend>Edite um Produto</legend>
            <label for="">Nome</label><br />
            <input type="text" name="nome" value="{{ $produto->nome }}"><br />
            <label for="">Custo</label><br />
            <input type="text" name="custo" value="{{ $produto->custo }}"><br />
            <label for="">Preço</label><br />
            <input type="text" name="preco" value="{{ $produto->preco }}"><br />
            <label for="">Quantidade</label><br />
            <input type="text" name="quantidade" value="{{ $produto->quantidade }}"><br />
            <button>salvar</button>
        </form>
    </body>
</html>
