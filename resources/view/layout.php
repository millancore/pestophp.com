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
</head>
<body>
    {{ $main | slot }}
</body>
</html>