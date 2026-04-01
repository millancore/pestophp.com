<template php-partial="layout.php">
    <div class="bg-gradient-to-tr from-[#222932] to-emerald-800 text-white">
        <div class="flex flex-wrap gap-4 justify-end items-center max-w-7xl mx-auto py-4 px-2 sm:px-6 lg:px-8">
            <a href="/" class="text-white hover:text-emerald-300 flex gap-2 items-center">
                Home
            </a>
            <a href="https://github.com/millancore/pesto" target="_blank" rel="noopener noreferrer"
               class="text-white hover:text-emerald-300 flex gap-2 items-center">
                Github
                <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.165 6.839 9.489.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.378.203 2.398.1 2.65.64.7 1.03 1.595 1.03 2.688 0 3.848-2.338 4.695-4.566 4.942.359.308.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z"
                          clip-rule="evenodd"/>
                </svg>
            </a>
        </div>
        <div class="max-w-7xl mx-auto pb-20 px-2 text-center">
            <img src="/img/laravel.svg" alt="Laravel Logo" class="w-24 h-24 mx-auto mb-4">
            <h1 class="text-3xl text-white font-bold p-4 text-center">
                Using Pesto with Laravel
            </h1>
            <p class="text-lg text-white p-4 max-w-4xl mx-auto text-center">
                Integrate the Pesto template engine into your Laravel projects to create expressive and modern
                views.
            </p>
        </div>
    </div>

    <div class="bg-white">
        <div class="max-w-4xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-700 text-center">Integration Steps</h2>

            <div class="mt-12">
                <h3 class="text-2xl text-gray-800 font-bold">1. Install Pesto</h3>
                <p class="mt-2 text-gray-600">
                    Start by installing Pesto via Composer.
                </p>
                <div class="mt-4">
                    <pre><code class="language-shell">composer require millancore/pesto</code></pre>
                </div>
            </div>

            <div class="mt-12">
                <h3 class="text-2xl text-gray-800 font-bold">2. Create a Service Provider</h3>
                <p class="mt-2 text-gray-600">
                    Create a service provider at <code>app/Providers/PestoServiceProvider.php</code> to register Pesto in Laravel's container.
                </p>
                <div class="mt-4">
                    <pre><code class="language-php">namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MillanCore\Pesto\Pesto;
use MillanCore\Pesto\PestoFactory;

class PestoServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Pesto::class, function ($app) {
            return PestoFactory::create(
                resource_path('views'),
                storage_path('framework/cache/pesto')
            );
        });
    }
}
</code></pre>
                </div>
            </div>

            <div class="mt-12">
                <h3 class="text-2xl text-gray-800 font-bold">3. Register the Service Provider</h3>
                <p class="mt-2 text-gray-600">
                    Add the provider to your <code>bootstrap/providers.php</code> array.
                </p>
                <div class="mt-4">
                    <pre><code class="language-php">return [
    App\Providers\AppServiceProvider::class,
    App\Providers\PestoServiceProvider::class,
];
</code></pre>
                </div>
            </div>

            <div class="mt-12">
                <h3 class="text-2xl text-gray-800 font-bold">4. Create a Helper Function</h3>
                <p class="mt-2 text-gray-600">
                    Add a global <code>pestoView()</code> helper to make rendering even simpler. Create a <code>app/helpers.php</code> file and register it in your <code>composer.json</code>.
                </p>
                <div class="mt-4">
                    <pre><code class="language-php">// app/helpers.php

use Illuminate\Http\Response;
use MillanCore\Pesto\Pesto;

function pestoView(string $view, array $data = [], int $status = 200, array $headers = []): Response
{
    $html = app(Pesto::class)->make($view, $data)->toHtml();

    return response($html, $status, $headers);
}
</code></pre>
                </div>
                <p class="mt-4 text-gray-600">
                    Then add the autoload entry in your <code>composer.json</code>:
                </p>
                <div class="mt-4">
                    <pre><code class="language-json">"autoload": {
    "files": [
        "app/helpers.php"
    ]
}
</code></pre>
                </div>
                <p class="mt-2 text-gray-600 text-sm">
                    Run <code>composer dump-autoload</code> after adding the entry.
                </p>
            </div>

            <div class="mt-12">
                <h3 class="text-2xl text-gray-800 font-bold">5. Render a View in Your Controller</h3>
                <p class="mt-2 text-gray-600">
                    Now you can use the <code>pestoView()</code> helper anywhere in your application.
                </p>
                <div class="mt-4">
                    <pre><code class="language-php">namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return pestoView('home.php', [
            'title' => 'Welcome to Laravel with Pesto',
        ]);
    }
}
</code></pre>
                </div>
            </div>

            <div class="mt-12">
                <h3 class="text-2xl text-gray-800 font-bold">6. Create a Pesto Template</h3>
                <p class="mt-2 text-gray-600">
                    Create your template at <code>resources/views/home.php</code>. You can now use Pesto's syntax.
                </p>
                <div class="mt-4">
                    <pre><code class="language-html">&lt;h1&gt;@{{ $title }}&lt;/h1&gt;

&lt;ul&gt;
    &lt;li php-foreach="range(1, 5) as $i"&gt;
        Item @{{ $i }}
    &lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </div>
            </div>
        </div>
    </div>
</template>