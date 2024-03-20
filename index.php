<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do website">
    <meta name="keywords" content="projeto, website, portfolio de teste">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Projeto 01</title>
</head>

<body>

    <header>
        <div class="center">
            <div class="logo left">
                <a href="/">Logomarca</a>

            </div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>

            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="bi bi-list"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>

    </header>
    <div>
        <?php
        $pagina = explode('/', $_SERVER['PHP_SELF']);
        unset($pagina[0]);
        unset($pagina[1]);
        if (count($pagina) == 0) {
            $pagina = 'home';
        } else {
            $pagina = implode('/', $pagina);
        }
        if (file_exists('pages/' . $pagina . '.php')) {
            include ('pages/' . $pagina . '.php');
        } else {
            include ('pages/404.php');
        }
        ?>
    </div>
    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>

</body>

</html>