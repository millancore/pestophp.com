<template php-partial="layout.php">
    <div class="bg-gradient-to-tr  from-[#222932] to-emerald-800">
        <div class="flex flex-wrap  justify-around max-w-7xl mx-auto py-20 px-2">
            <div class="w-full max-w-2xl">
                <h1 class="text-3xl text-white font-bold p-4">
                    Pesto - Expressive Templates
                </h1>
                <p class="text-lg text-white p-4">
                    Modern PHP template engine that provides an intuitive and expressive way to build web application
                    views. It offers a clean syntax using custom HTML attributes and supports advanced templating
                    features like view composition, slots, conditional rendering, loops, and built-in security measures.
                </p>
            </div>
            <img class="w-full max-w-2xl" src="img/template.html.png" alt="pesto"/>
        </div>
    </div>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-700 sm:text-4xl">
                    Clean & Expressive Syntax
                </h2>
                <p class="mt-4 text-lg text-gray-600">
                    Pesto provides a clean syntax using custom HTML attributes.
                    It understands the context of <code>@{{ variables }}</code> and escapes them to prevent XSS.
                </p>
            </div>

            <div class="mt-12 grid md:grid-cols-2 gap-8 items-start">
                <div>
                    <h3 class="text-xl text-gray-800 font-bold">Intuitive Attributes</h3>
                    <p class="mt-2 text-gray-600">Use attributes like <code>php-foreach</code> and <code>php-if</code>
                        directly in your HTML.</p>
                    <div class="mt-4">
                        <pre><code class="language-html">&lt;ul&gt;
    &lt;li php-foreach="range(1, 10) as $number"
        php-if="$number > 7"&gt;
        Item @{{ $number }}
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl text-gray-800 font-bold">Clarity with &lt;template&gt;</h3>
                    <p class="mt-2 text-gray-600">For greater clarity, use the <code>&lt;template&gt;</code> tag, which
                        will not be included in the final render.</p>
                    <div class="mt-4">
                        <pre><code class="language-html">&lt;ul&gt;
    &lt;template php-foreach="range(1, 10) as $number"&gt;
       &lt;li php-if="$number > 7"&gt;Item @{{ $number }}&lt;/li&gt;
    &lt;/template&gt;
&lt;/ul&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50">
        <div class="max-w-4xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <h2 id="installation--usage" class="text-3xl font-extrabold text-gray-700 text-center">Installation &
                Usage</h2>
            <div class="mt-8">
                <p class="text-lg text-gray-600">
                    <strong>PHP ^8.4</strong> is required. Pesto is available via Composer and has <strong>no
                        third-party dependencies.</strong>
                </p>
            </div>
            <div class="mt-8">
                <pre><code class="language-shell">composer require millancore/pesto</code></pre>
            </div>
            <div class="mt-6">
                <pre><code class="language-php">use MillanCore\Pesto\PestoFactory;

$pesto = PestoFactory::create([
    'templatesPath' => __DIR__ . '/views',
    'cachePath' => __DIR__ . '/cache',
    // [ New CustomFilters(), ... ]
]);

$pesto->make('view.php', ['user' => $user]);</code></pre>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <h2 id="view-composition" class="text-3xl font-extrabold text-gray-700 text-center">View Composition</h2>
            <p class="text-center mt-4 text-lg text-gray-600">Pesto makes it easy to reuse parts of your views.</p>

            <div class="mt-12">
                <h3 class="text-2xl text-gray-800 font-bold">The <strong>&lt;template&gt;</strong> Tag</h3>
                <p class="mt-2 text-gray-600">The <code>&lt;template&gt;</code> tag allows you to define
                    <code>php-*</code> attributes that will be evaluated, but the tag itself will not be included in the
                    final render.</p>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="font-medium text-gray-800">Input</p>
                        <pre class="mt-2"><code
                                    class="language-html">&lt;p php-if="$user->isAdmin()"&gt;Admin&lt;/p&gt;</code></pre>
                        <p class="font-medium text-gray-800 mt-2">Output</p>
                        <pre class="mt-2"><code class="language-html">&lt;p&gt;Admin&lt;/p&gt;</code></pre>
                    </div>
                    <div>
                        <p class="font-medium text-gray-800">Input</p>
                        <pre class="mt-2"><code class="language-html">&lt;template php-if="$user->isAdmin()"&gt;Admin&lt;/template&gt;</code></pre>
                        <p class="font-medium text-gray-800 mt-2">Output</p>
                        <pre class="mt-2"><code class="language-html">Admin</code></pre>
                    </div>
                </div>
            </div>

            <div id="partials--slots" class="mt-12">
                <h3 class="text-2xl text-gray-800 font-bold">Partials & Slots</h3>
                <p class="mt-2 text-gray-600">When working with views composed of other views, you can use partials and
                    slots to avoid repetition.</p>
                <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <p class="font-medium text-gray-800">Layout: <code>layouts/app.html</code></p>
                        <pre class="mt-2"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;@{{ $title }}&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;@{{ $header | slot }}&lt;/header&gt;
    &lt;main&gt;@{{ $main | slot }}&lt;/main&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </div>
                    <div>
                        <p class="font-medium text-gray-800">View: <code>views/home.html</code></p>
                        <pre class="mt-2"><code class="language-html">&lt;template php-partial="layouts/app.html" php-with="['title' => 'Home']"&gt;
    &lt;!-- Named slot --&gt;
    &lt;nav php-slot="header"&gt;
        &lt;a href="/"&gt;Home&lt;/a&gt;
        &lt;a href="/about"&gt;About&lt;/a&gt;
    &lt;/nav&gt;

    &lt;!--Main Slot --&gt;
    &lt;section&gt;
        &lt;h1&gt;Home&lt;/h1&gt;
        &lt;p&gt;Lorem ipsum...&lt;/p&gt;
    &lt;section&gt;
&lt;/template&gt;</code></pre>
                    </div>
                </div>
            </div>

            <div id="nested-views" class="mt-12">
                <h3 class="text-2xl text-gray-800 font-bold">Nested Views</h3>
                <p class="mt-2 text-gray-600">Pesto allows you to nest views, reusing the same layout multiple times in
                    the same view.</p>
                <div class="mt-4">
                    <pre><code class="language-html">&lt;template php-partial="list.html"&gt;
    &lt;li&gt;Item&lt;/li&gt;
    &lt;li&gt;
        &lt;ul php-partial="list.html"&gt;
            &lt;li&gt;nested item&lt;/li&gt;
            ....
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/template&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <h2 id="control-flow" class="text-3xl font-extrabold text-gray-700 text-center">Control Flow</h2>
            <p class="text-center mt-4 text-lg text-gray-600">Pesto provides <strong>foreach</strong> and
                <strong>if</strong> directives, sufficient for building any view.</p>

            <div class="mt-12 grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl text-gray-800 font-bold">If Attribute</h3>
                    <p class="mt-2 text-gray-600">Conditionally render blocks. <code>php-elseif</code> and <code>php-else</code>
                        must be siblings of <code>php-if</code>.</p>
                    <pre class="mt-4"><code class="language-html">&lt;p php-if="$user->isAdmin()"&gt;Admin&lt;/p&gt;
&lt;p php-elseif="$user->isModerator()"&gt;Moderator&lt;/p&gt;
&lt;p php-else&gt;Guest&lt;/p&gt;</code></pre>
                </div>
                <div>
                    <h3 class="text-xl text-gray-800 font-bold">Loops</h3>
                    <p class="mt-2 text-gray-600">We can use to render a list of items based on an array or iterable
                        objects.</p>
                    <pre class="mt-4"><code class="language-html">&lt;li php-foreach="$list as $item"&gt;
    @{{ $item }}
&lt;/li&gt;</code></pre>
                </div>
                <div class="col md:col-span-2">
                    <h3 class="text-xl text-gray-800 font-bold">Inline</h3>
                    <p class="mt-2 text-gray-600">Combine directives in one single tag.</p>
                    <pre class="mt-4"><code class="language-html">&lt;ul&gt;
  &lt;li php-foreach="$users as $user" php-if="$user->isAdmin()"&gt;
      @{{ $user->name | title }};
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <h2 id="filters" class="text-3xl font-extrabold text-gray-700 text-center">Filters</h2>
            <p class="text-center mt-4 text-lg text-gray-600">Apply transformations to variables using the pipe
                <code>|</code> operator. You can also create your own.</p>

            <div class="mt-12 grid md:grid-cols-2 gap-x-8 gap-y-12">
                <div>
                    <h3 class="text-xl text-gray-800 font-bold">Usage</h3>
                    <pre class="mt-4"><code class="language-html">&lt;p&gt;@{{ $text | upper }}&lt;/p&gt;</code></pre>
                </div>
                <div>
                    <h3 class="text-xl text-gray-800 font-bold">Chaining</h3>
                    <pre class="mt-4"><code class="language-html">&lt;p&gt;@{{ $text | capitalize | truncate:50,... }}&lt;/p&gt;</code></pre>
                </div>
                <div>
                    <h3 class="text-xl text-gray-800 font-bold">Arguments</h3>
                    <pre class="mt-4"><code
                                class="language-html">&lt;p&gt;@{{ $createAt | date:'m-d-Y' }}&lt;/p&gt;</code></pre>
                </div>
                <div>
                    <h3 class="text-xl text-gray-800 font-bold">Built-in Filters</h3>
                    <ul class="mt-4 space-y-2 text-gray-800">
                        <li><strong>raw</strong>: Prevents escaping.</li>
                        <li><strong>String</strong>: upper, lower, capitalize, title, trim, nl2br, strip_tags, slug,
                            join.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12">
                <h3 class="text-2xl text-gray-800 font-bold text-center">Add Custom Filters</h3>
                <p class="text-center mt-2 text-gray-600">Create a class with public methods and register it.</p>
                <div class="mt-6 grid md:grid-cols-2 gap-6">
                    <div>
                        <p class="font-medium text-gray-800">1. Create a filter class</p>
                        <pre class="mt-2"><code class="language-php">// CustomFilter.php
#[AsFilter(name: 'truncate')]
public function truncate(
    string $value,
    int $length,
    string $end = '...'
) : string
{
    //...
}</code></pre>
                    </div>
                    <div>
                        <p class="font-medium text-gray-800">2. Register it in the factory</p>
                        <pre class="mt-2"><code class="language-php">$pesto = PestoFactory::create([
    'templatesPath' => __DIR__ . '/views',
    'cachePath' => __DIR__ . '/cache', [
        new CustomFilter(),
    ]
]);</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="bg-gradient-to-tr  from-[#222932] to-emerald-800">
    <footer class="max-w-7xl mx-auto flex flex-wrap gap-4 text-white py-12 ">
        <div id="this-page" class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <div id="this-page" class="max-w-4xl text-left">
                <h3 class="text-2xl font-bold">About This Page</h3>
                <p class="mt-4 text-lg">
                    This page was built using the <a href="https://www.slimframework.com/" target="_blank"
                                                     rel="noopener noreferrer"
                                                     class="text-emerald-400 hover:text-emerald-300">Slim PHP</a>
                    micro-framework and <a href="https://pestophp.com" class="text-emerald-400 hover:text-emerald-300">Pesto</a>,
                    the very template engine it showcases.
                </p>
                <p class="text-lg py-8 text-md text-gray-400">
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
            </div>
        </div>
    </footer>
    </div>
</template>