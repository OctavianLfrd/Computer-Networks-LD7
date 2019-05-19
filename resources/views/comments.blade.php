<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Computer networking - comments</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="display-3 header-color text-center">{{ $title }}</h1>
        <h3 class="header-color text-center">Comments</h3>
        <section>

        </section>
    </div>
</body>
<script src="{{ asset('js/comments.js') }}"></script>
</html>
