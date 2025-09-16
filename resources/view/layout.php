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

    <div class="bg-gradient-to-tr  from-[#222932] to-emerald-800">
        <footer class="max-w-7xl mx-auto flex flex-wrap gap-4 text-white py-12 ">
            <div id="this-page" class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 ">
                <div id="this-page" class="max-w-4xl text-left">
                    <h3 class="text-2xl font-bold">About This Page</h3>
                    <p class="mt-4 text-lg">
                        This page was built using the <a href="https://www.slimframework.com/" target="_blank"
                                                         rel="noopener noreferrer"
                                                         class="text-emerald-400 hover:text-emerald-300">Slim PHP</a>
                        micro-framework and <a href="https://pestophp.com"
                                               class="text-emerald-400 hover:text-emerald-300">Pesto</a>
                    </p>
                    <p class="text-sm mt-2 text-md text-gray-400">
                        The complete source code is available on <a href="https://github.com/millancore/pestophp.com"
                                                                    target="_blank" rel="noopener noreferrer"
                                                                    class="text-white hover:text-emerald-300">GitHub</a>.
                    </p>
                </div>
            </div>
            <div class="max-w-2xl mx-0 md:mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mt-4">
                    <img class="w-24 h-24 rounded-full " src="https://avatars.githubusercontent.com/u/1243194?v=4"
                         alt="Juan Millan">
                    <p class="mt-4 text-xl font-semibold">Juan Millan</p>
                    <p class="text-gray-400">Generative Engineer - Software Artist</p>
                    <p class="text-gray-400">Genova - Italia</p>
                </div>
                <div class="mt-6 flex space-x-6">
                    <a href="https://github.com/millancore" target="_blank" rel="noopener noreferrer"
                       class="text-gray-400 hover:text-white">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.165 6.839 9.489.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.378.203 2.398.1 2.65.64.7 1.03 1.595 1.03 2.688 0 3.848-2.338 4.695-4.566 4.942.359.308.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="https://linkedin.com/in/millancore" target="_blank" rel="noopener noreferrer"
                       class="text-gray-400 hover:text-white">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="https://x.com/millancore" target="_blank" rel="noopener noreferrer"
                       class="text-gray-400 hover:text-white">
                        <span class="sr-only">Twiter X</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M2.75859 2.62803C2.80911 2.69844 3.97914 4.36178 5.35865 6.32434C6.73817 8.28689 8.01409 10.1018 8.19405 10.3576C8.374 10.6133 8.52123 10.8277 8.52123 10.8339C8.52123 10.8402 8.45422 10.9209 8.37232 11.0133C8.29043 11.1056 8.05974 11.367 7.85972 11.5942C7.65968 11.8213 7.32247 12.2042 7.11036 12.4449C6.89826 12.6857 6.52511 13.1094 6.28113 13.3866C6.03716 13.6637 5.59844 14.1619 5.30619 14.4937C4.4023 15.52 4.27186 15.6683 3.58379 16.451C3.21639 16.8689 2.86408 17.2686 2.80089 17.339C2.7377 17.4095 2.686 17.4746 2.686 17.4836C2.686 17.4942 2.91677 17.5 3.33618 17.5H3.98634L4.70113 16.6864C5.09427 16.2389 5.48209 15.7985 5.56294 15.7076C5.73777 15.5111 7.07108 13.9959 7.18315 13.8663C7.22606 13.8167 7.28839 13.7461 7.32166 13.7094C7.35495 13.6727 7.61726 13.375 7.90459 13.0479C8.19191 12.7208 8.43489 12.4452 8.44451 12.4354C8.45415 12.4256 8.60626 12.2528 8.78253 12.0513C8.95881 11.8499 9.10848 11.685 9.11513 11.685C9.12179 11.685 10.0273 12.9655 11.1274 14.5306C12.2274 16.0956 13.1471 17.4038 13.1712 17.4377L13.2148 17.4993L15.445 17.4997C17.279 17.4999 17.6737 17.4962 17.6667 17.4783C17.6592 17.4593 16.5907 15.9371 13.8495 12.0402C11.8761 9.23487 11.6137 8.85789 11.6212 8.83876C11.6285 8.82015 11.8973 8.5131 13.6644 6.50469C13.9676 6.16018 14.3854 5.68502 14.593 5.44879C14.8006 5.21256 15.0102 4.97467 15.0588 4.92015C15.1073 4.86564 15.3628 4.57572 15.6264 4.27588C15.89 3.97605 16.3381 3.46658 16.6222 3.14373C16.9063 2.82088 17.1492 2.54398 17.162 2.52836C17.1839 2.50165 17.1467 2.5 16.5248 2.5H15.8644L15.5707 2.83453C15.1797 3.27974 14.4731 4.08258 14.2724 4.30945C14.1838 4.40969 14.0732 4.53567 14.0267 4.58939C13.9801 4.64312 13.8884 4.74694 13.8227 4.82013C13.7571 4.89331 13.4263 5.26914 13.0876 5.65529C12.7489 6.04144 12.4671 6.3611 12.4615 6.36564C12.4558 6.37018 12.3832 6.4524 12.3002 6.54836C12.155 6.71621 12.0072 6.88421 11.3294 7.65195C11.0319 7.98896 11.0166 8.00343 10.9915 7.97246C10.9771 7.95461 10.1052 6.71607 9.05402 5.22017L7.14276 2.50035L4.90476 2.50017L2.66675 2.5L2.75859 2.62803ZM4.50532 3.51997C4.52213 3.54503 4.94027 4.13051 5.43455 4.82104C6.37195 6.13066 10.0556 11.2801 12.4246 14.5925C13.1816 15.651 13.8102 16.5264 13.8215 16.5379C13.8377 16.5542 14.0581 16.5577 14.8515 16.5544L15.8609 16.5501L13.2195 12.8579C11.7667 10.8272 9.66325 7.88711 8.54522 6.32434L6.51242 3.48293L5.49361 3.47867L4.47479 3.47441L4.50532 3.51997Z"
                                  fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <script type="module" src="<?= $vite->get('resources/js/app.js') ?>"></script>
    <script type="module" src="<?= $vite->get('resources/js/prism.js') ?>"></script>
</body>
</html>