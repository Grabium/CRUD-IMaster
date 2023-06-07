<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, inicial-scale=1.0"> 
  	<meta http-equiv="X-UA-Compatible" content="i-edge">
  	<title>Ver</title>
  </head>
  <body>

    <h4>Produto corresponde ao ID {{ $produto->id}}.</h4>
    <label >ID:........... {{ $produto->id }} .</label><br />
    <label >Nome:......... {{ $produto->nome }} .</label><br />
    <label >Custo:........ {{ $produto->custo }} .</label><br />
    <label >Preço:........ {{ $produto->preco }} .</label><br />
    <label >Quantidade:... {{ $produto->quantidade }} .</label><br />    
    <br />

    <button><a href="/">Início</a></button>
  </body>
</html>