
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <meta charset="utf-8">
    <meta name="author" content="Jocélio Silva de Sousa">
    <meta name="genetator" content="vscode">
    <meta name="keywords" content="sistema, Fecomércio, empresários, serviços, cartão empresarial">
    <meta name="description" content="Sistema Fecomércio para recomendação de serviços para empresários do comércio e adesão 
    de cartão empresarial">
    <link rel="icon" type="img.png" href="icons/favicon-32x32.png">

</head>
<body>
    <h1>Cadastro de serviços</h1>

    <form action="" method="POST">
        <p>
            <label>Nome do serviço</label>
            <input type="text" name="servico">
        </p>
        <p>
            <label>Descrição</label>
            <input type="text" name="descricao">
        </p>
        <p>

        <p>
            <label>Palavras Chave</label>
            <input type="text" name="descricao">
        </p>

        <label> Qual a categoria se enquadra?</label>
        <p><select name="categoria">
            
            <option value="valor1">Cartão do empresário</option>
            <option value="valor2" selected>Benefícios Sesc</option>
            <option value="valor3">Serviços complementares</option>
            </select>
        </p>
        <p>
            <label>É um serviço gratuito?</label>
            <input type="checkbox" name="selecao">
        </p>
        <p>
            <button type="submit">CADASTRAR</button>
        </p>
    </form>

</body>
</html>