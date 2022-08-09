<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Buscador informações utilizando a api Via Cep">
    <meta name="keywords" content="CEP, Arquidiocese, Aparecida">
    <meta name="author" content="Michael Martins">
    <title>Via Cep</title>

    <!-- css -->
    <?= link_tag('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>

    <!-- js -->
    <?= script_tag('assets/js/jquery-1.2.6.pack.js') ?>
    <?= script_tag('assets/js/jquery.maskedinput-1.1.4.pack.js') ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#cep").mask("99999999");
        });
    </script>
</head>

<body>

    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>

    <?= script_tag("node_modules/bootstrap/dist/js/bootstrap.min.js") ?>
</body>

</html>