<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <title>Computer networking - Title page</title>
    </head>
    <body scroll="no">
        <header id="header-section">
            <h1 id="main-title"
                class="display-1 text-center header-color">
                Mainframe
            </h1>
        </header>
        <main class="container-fluid">
            <section id="section-0" class="container container-section">
                @include('info')
            </section>
            <section id="section-1" class="container container-section">
                @include('reports.2')
            </section>
            <section id="section-2" class="container container-section">
                @include('reports.3')
            </section>
            <section id="section-3" class="container-section">
                @include('reports.4')
            </section>
            <section id="section-4" class="container-section">
                @include('reports.5')
            </section>
            <section id="section-5" class="container-section">
                @include("reports.6")
            </section>
        </main>
        <footer>
            <img id="down-arrow-image"
                 src="{{ asset('img/down-arrow.png') }}"
                 class="d-block image-circle down-arrow"
                 width="60px"
                 alt="down-arrow">
            <span id ="down-arrow-label" class="text-secondary">Scroll down to see content</span>
        </footer>
    </body>
    <script src="{{ asset('js/welcome.js') }}"></script>
</html>
