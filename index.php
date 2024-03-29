
<!DOCTYPE html>
<html>

<head>
    <title>Sistema Fecomércio</title>
    <meta charset="utf-8">
    <meta name="author" content="Jocélio Silva de Sousa">
    <meta name="genetator" content="vscode">
    <meta name="keywords" content="sistema, Fecomércio, empresários, serviços, cartão empresarial">
    <meta name="description" content="Sistema Fecomércio para recomendação de serviços para empresários do comércio e adesão 
    de cartão empresarial">
    <link rel="icon" type="img.png" href="icons/favicon-32x32.png">


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="serviceWorker.js"></script>


    <link rel="manifest" href="manifest.webmanifest">
    <meta content='yes' name='apple-mobile-web-app-capable' />
    <meta content='yes' name='mobile-web-app-capable' />
    <meta name="apple-mobile-web-app-status-bar" content="#aa7700">
    <meta name="theme-color" content="black">
    <link rel="apple-touch-icon" href="assets/icone.png">


</head>

<body>

    <header>
        <img src="IMG/logo-fecomercio-sesc.png" width="160px">
        <h4 style="float: right; margin-top: 2px; margin-right: 2px;">contato@gmail.com</h4>
        <h4 style="float: right;padding: 40px;">O seu usuário e senha somente pode ser alterado <br> conforme pedido ao setor de T.I Fecomércio</h4>
    </header>


    <img src="IMG/fecomercioIMG.png" width="70%">
    <h4 style="background-color: cornflowerblue; ">Conteudo central</h4>

    <footer style="background-color:rgb(214, 201, 13);float:left;">
        <img src="IMG/logo.png" width="200px" style="float: left;">
        <h3>O objetivo dessa plataforma é atuar junto ao setor empresarial.</h3>
        <h3>© Copyright 2021 Sistema Fecomércio, todos os direitos reservados.</h3>
        <h3>Menus</h3>
        <h3>Serviços</h3>
        <h3>Contatos</h3>
    </footer>


    <script>
        Notification.requestPermission()
    </script>
    <script>
        $(document).ready(function() {
            if ('serviceWorker' in navigator) {
                console.log('has serviceworker');
                window.addEventListener('load', () => {
                    navigator.serviceWorker.register('serviceWorker.js')
                        .then((registration) => {
                            console.log('Service worker registered.', registration);
                        });
                });
            }
        });
    </script>
</body>

</html>