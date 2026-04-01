<template php-partial="layout.php">
    <div class="bg-gradient-to-tr  from-[#222932] to-emerald-800">
        <div class="flex flex-wrap gap-4 justify-end items-center max-w-7xl mx-auto py-4 px-2 sm:px-6 lg:px-8">
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
        <div class="flex flex-wrap  justify-around max-w-7xl mx-auto pb-20 px-2">
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


    <div class="bg-white border-y border-gray-100">
        <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8 flex justify-center">
            <ul class="space-y-3 text-emerald-700 font-medium text-lg inline-block">
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 mt-0.5 shrink-0 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5 5-5M12 15V3"/></svg>
                    <a href="#installation--usage" class="hover:text-emerald-500">Installation & Usage</a>
                </li>
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 mt-0.5 shrink-0 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    <div>
                        <a href="#view-composition" class="hover:text-emerald-500">View Composition</a>
                        <ul class="ml-5 mt-2 space-y-1 text-sm">
                            <li class="flex items-center gap-1.5">
                                <svg class="w-3 h-3 shrink-0 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                                <a href="#the-template-tag" class="hover:text-emerald-500">The <code class="text-xs bg-gray-100 px-1 py-0.5 rounded font-mono text-emerald-800">&lt;template&gt;</code> Tag</a>
                            </li>
                            <li class="flex items-center gap-1.5">
                                <svg class="w-3 h-3 shrink-0 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                                <a href="#partials--slots" class="hover:text-emerald-500">Partials & Slots</a>
                            </li>
                            <li class="flex items-center gap-1.5">
                                <svg class="w-3 h-3 shrink-0 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                                <a href="#nested-views" class="hover:text-emerald-500">Nested Views</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 mt-0.5 shrink-0 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
                    <div>
                        <a href="#control-flow" class="hover:text-emerald-500">Control Flow</a>
                        <ul class="ml-5 mt-2 space-y-1 text-sm">
                            <li class="flex items-center gap-1.5">
                                <svg class="w-3 h-3 shrink-0 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                                <a href="#if-attribute" class="hover:text-emerald-500">If Attribute</a>
                            </li>
                            <li class="flex items-center gap-1.5">
                                <svg class="w-3 h-3 shrink-0 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                                <a href="#loop" class="hover:text-emerald-500">Loop</a>
                            </li>
                            <li class="flex items-center gap-1.5">
                                <svg class="w-3 h-3 shrink-0 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                                <a href="#inline" class="hover:text-emerald-500">Inline</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 mt-0.5 shrink-0 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
                    <div>
                        <a href="#filters" class="hover:text-emerald-500">Filters</a>
                        <ul class="ml-5 mt-2 space-y-1 text-sm">
                            <li class="flex items-center gap-1.5">
                                <svg class="w-3 h-3 shrink-0 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                                <a href="#chain-filters" class="hover:text-emerald-500">Chain Filters</a>
                            </li>
                            <li class="flex items-center gap-1.5">
                                <svg class="w-3 h-3 shrink-0 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                                <a href="#filters-with-arguments" class="hover:text-emerald-500">Filters with Arguments</a>
                            </li>
                            <li class="flex items-center gap-1.5">
                                <svg class="w-3 h-3 shrink-0 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                                <a href="#add-filters" class="hover:text-emerald-500">Add Filters</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 mt-0.5 shrink-0 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    <a href="#benchmarks" class="hover:text-emerald-500">Benchmarks</a>
                </li>
                <li class="flex items-start gap-2">
                    <svg class="w-5 h-5 mt-0.5 shrink-0 text-emerald-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/></svg>
                    <a href="#how-to-use-with" class="hover:text-emerald-500">How to use with frameworks</a>
                </li>
            </ul>
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
    templatesPath: __DIR__ . '/views',
    cachePath: __DIR__ . '/cache',
    // [ New CustomFilters(), ... ]
]);

$pesto->make('view.php', ['user' => $user]);</code></pre>
            </div>
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

            <div class="mt-12 grid-cols-1 md:grid-cols-2 gap-8 items-start">
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

    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <h2 id="view-composition" class="text-3xl font-extrabold text-gray-700 text-center">View Composition</h2>
            <p class="text-center mt-4 text-lg text-gray-600">Pesto makes it easy to reuse parts of your views.</p>

            <div id="the-template-tag" class="mt-12">
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

            <div class="mt-12 grid-cols-1 md:grid-cols-2 gap-8">
                <div id="if-attribute">
                    <h3 class="text-xl text-gray-800 font-bold">If Attribute</h3>
                    <p class="mt-2 text-gray-600">Conditionally render blocks. <code>php-elseif</code> and <code>php-else</code>
                        must be siblings of <code>php-if</code>.</p>
                    <pre class="mt-4"><code class="language-html">&lt;p php-if="$user->isAdmin()"&gt;Admin&lt;/p&gt;
&lt;p php-elseif="$user->isModerator()"&gt;Moderator&lt;/p&gt;
&lt;p php-else&gt;Guest&lt;/p&gt;</code></pre>
                </div>
                <div id="loop">
                    <h3 class="text-xl text-gray-800 font-bold">Loop</h3>
                    <p class="mt-2 text-gray-600">We can use to render a list of items based on an array or iterable
                        objects.</p>
                    <pre class="mt-4"><code class="language-html">&lt;li php-foreach="$list as $item"&gt;
    @{{ $item }}
&lt;/li&gt;</code></pre>
                </div>
                <div id="inline" class="col md:col-span-2">
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

            <div class="mt-12 grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-12">
                <div>
                    <h3 class="text-xl text-gray-800 font-bold">Usage</h3>
                    <pre class="mt-4"><code class="language-html">&lt;p&gt;@{{ $text | upper }}&lt;/p&gt;</code></pre>
                </div>
                <div id="chain-filters">
                    <h3 class="text-xl text-gray-800 font-bold">Chain Filters</h3>
                    <pre class="mt-4"><code class="language-html">&lt;p&gt;@{{ $text | capitalize | truncate:50,... }}&lt;/p&gt;</code></pre>
                </div>
                <div id="filters-with-arguments">
                    <h3 class="text-xl text-gray-800 font-bold">Filters with Arguments</h3>
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

            <div id="add-filters" class="mt-12">
                <h3 class="text-2xl text-gray-800 font-bold text-center">Add Filters</h3>
                <p class="text-center mt-2 text-gray-600">Create a class with public methods and register it.</p>
                <div class="mt-6 grid-cols-1 md:grid-cols-2 gap-6">
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
    templatesPath: => __DIR__ . '/views',
    cachePath: => __DIR__ . '/cache', [
        new CustomFilter(),
    ]
]);</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-br from-[#222932] to-[#006045]">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 id="benchmarks" class="text-3xl font-extrabold text-white sm:text-4xl">Benchmarks</h2>
                <p class="mt-4 text-lg text-gray-300">
                    Rendering time comparison — lower is better.
                </p>
            </div>

            <div class="mt-8 flex justify-center gap-8 text-sm">
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3" style="background-color: #008235"></div>
                    <span class="text-gray-300">Pesto</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3" style="background-color: #fda4af"></div>
                    <span class="text-gray-300">Blade</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3" style="background-color: #7dd3fc"></div>
                    <span class="text-gray-300">Twig</span>
                </div>
            </div>

            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
                <template php-foreach="$benchmarks as $benchmark">
                    <div class="bg-white/5 p-6">
                        <h3 class="text-lg font-bold text-white mb-6">{{ $benchmark['name'] }}</h3>
                        <div class="flex justify-center gap-4">
                            <template php-foreach="$benchmark['bars'] as $bar">
                                <div class="flex flex-col items-center">
                                    <span class="text-xs font-mono text-gray-300 mb-2">{{ $bar['value'] }}</span>
                                    <div class="flex items-end h-36">
                                        <div class="w-10" style="height: {{ $bar['pct'] }}%; background-color: {{ $bar['color'] }}"></div>
                                    </div>
                                    <span class="text-xs text-gray-400 mt-2">{{ $bar['engine'] }}</span>
                                </div>
                            </template>
                        </div>
                    </div>
                </template>
            </div>

            <div class="mt-6 bg-white/5 p-6">
                <h3 class="text-lg font-bold text-white mb-6 text-center">Peak Memory Usage</h3>
                <div class="flex justify-center gap-4">
                    <template php-foreach="$memoryBars as $bar">
                        <div class="flex flex-col items-center">
                            <span class="text-xs font-mono text-gray-300 mb-2">{{ $bar['value'] }}</span>
                            <div class="flex items-end h-36">
                                <div class="w-10" style="height: {{ $bar['pct'] }}%; background-color: {{ $bar['color'] }}"></div>
                            </div>
                            <span class="text-xs text-gray-400 mt-2">{{ $bar['engine'] }}</span>
                        </div>
                    </template>
                </div>
            </div>

            <div class="mt-8 bg-white/5 rounded-xl p-6">
                <h3 class="text-lg font-bold text-white mb-3">Run It Yourself</h3>
                <p class="text-sm text-gray-300 mb-4">Clone the repo and run the benchmarks on your own machine.</p>
                <pre class="bg-black/30 rounded-lg p-4 text-sm overflow-x-auto"><code class="language-shell">git clone https://github.com/millancore/pesto.git
cd pesto && composer install
composer bench</code></pre>
                <p class="text-xs text-gray-300 mt-3">
                    Generate an HTML chart report with <code class="text-gray-100">composer bench:chart</code>
                </p>
            </div>

            <p class="mt-6 text-center text-sm text-gray-200">
                PHPBench — 100 iterations, 10 revolutions, 5 warmup runs. All engines with file caching enabled.
            </p>
        </div>
    </div>

    <div id="how-to-use-with" class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-700 sm:text-4xl">
                    How to use with
                </h2>
                <p class="mt-4 text-lg text-gray-600">
                    Pesto can be easily integrated with your favorite framework.
                </p>
            </div>
            <div class="mt-12 flex flex-wrap justify-center gap-8">
                <a href="/slim" class="flex flex-col items-center gap-2 text-gray-700 hover:text-emerald-600">
                    <img src="/img/slim.jpg" alt="Slim Framework" class="w-16 h-16 rounded-full object-cover">
                    <span class="font-bold">Slim</span>
                </a>
                <a href="/codeigniter" class="flex flex-col items-center gap-2 text-gray-700 hover:text-emerald-600">
                    <img src="/img/codeigniter.svg" alt="CodeIgniter" class="w-16 h-16 rounded-full object-cover">
                    <span class="font-bold">CodeIgniter</span>
                </a>
                <a href="/cakephp" class="flex flex-col items-center gap-2 text-gray-700 hover:text-emerald-600">
                    <img src="/img/cake.svg" alt="CakePHP" class="w-16 h-16 rounded-full object-cover">
                    <span class="font-bold">CakePHP</span>
                </a>
                <a href="/symfony" class="flex flex-col items-center gap-2 text-gray-700 hover:text-emerald-600">
                    <img src="/img/symfony.svg" alt="Symfony" class="w-16 h-16 rounded-full object-cover">
                    <span class="font-bold">Symfony</span>
                </a>
                <a href="/laravel" class="flex flex-col items-center gap-2 text-gray-700 hover:text-emerald-600">
                    <img src="/img/laravel.svg" alt="Laravel" class="w-16 h-16 rounded-full object-cover">
                    <span class="font-bold">Laravel</span>
                </a>
            </div>
        </div>
    </div>



</template>
