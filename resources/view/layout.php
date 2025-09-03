<?php $vite = new \App\Vite\ViteManager(APP_ROOT . '/public/dist'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesto</title>

    <script php-if="$vite->isRunningDevServer()"
            type="module"
            src="http://localhost:5173/@vite/client" ></script>
    <link rel="stylesheet" href=" <?= $vite->get('resources/css/app.css') ?> ">
    <link rel="stylesheet" href=" <?= $vite->get('resources/css/prism.css') ?> ">
</head>
<body>
    {{ $main | slot }}

    <script type="module" src="<?= $vite->get('resources/js/app.js') ?>"></script>
    <script type="module" src="<?= $vite->get('resources/js/prism.js') ?>"></script>
</body>
</html>