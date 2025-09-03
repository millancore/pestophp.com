<?php $vite = new \App\Vite\ViteManager(APP_ROOT . '/public/dist'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesto - Expressive Templates</title>

    <!-- SEO -->
    <meta name="description" content="Modern PHP template engine that provides an intuitive and expressive way to build web application views. It offers a clean syntax using custom HTML attributes and supports advanced templating features like view composition, slots, conditional rendering, loops, and built-in security measures.">
    <meta name="keywords" content="Pesto, PHP, Template Engine, Templates, Views">
    <meta name="author" content="Juan Millan">
    <link rel="canonical" href="https://pestophp.com/">

    <!-- Social -->
    <meta property="og:title" content="Pesto - Expressive Templates">
    <meta property="og:description" content="Modern PHP template engine that provides an intuitive and expressive way to build web application views. It offers a clean syntax using custom HTML attributes and supports advanced templating features like view composition, slots, conditional rendering, loops, and built-in security measures.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://pestophp.com/">
    <meta property="og:image" content="https://pestophp.com/img/template.html.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pesto - Expressive Templates">
    <meta name="twitter:description" content="Modern PHP template engine that provides an intuitive and expressive way to build web application views. It offers a clean syntax using custom HTML attributes and supports advanced templating features like view composition, slots, conditional rendering, loops, and built-in security measures.">
    <meta name="twitter:image" content="https://pestophp.com/img/template.html.png">


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