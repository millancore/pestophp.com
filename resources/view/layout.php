<?php $vite = new \App\Vite\ViteManager(APP_ROOT . '/public/dist'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesto</title>
    <link rel="stylesheet" href=" <?= $vite->get('resources/css/app.css') ?> ">
</head>
<body class="bg-yellow-800">
    {{ $main | slot }}
</body>
</html>