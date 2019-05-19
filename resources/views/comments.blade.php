<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Computer networking - {{ $title }} comments</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="display-3 header-color text-center">{{ $title }}</h1>
        <h3 class="header-color text-center">Comments</h3>
        <nav>
            <ol class="breadcrumb pb-1">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Welcome</a></li>
                <li class="breadcrumb-item active">Comments</li>
                <li class="ml-auto">
                    <button id="add-comment-button" class="btn btn-link" style="padding: 0" data-work-id="{{ $workId }}" data-toggle="modal" data-target="#commentModal">
                        <i class="material-icons">add</i>
                    </button>
                </li>
            </ol>
            @include('components.commentModal')
        </nav>
        <section class="mb-5">
                @if(count($comments) < 1)
                    <div class="container header-color list-font-size">
                        There are currently no comments
                    </div>
                @else
                    @foreach($comments as $comment)
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1 p-0">
                                        <div class="w-100 h-100 text-center" style="display: table;">
                                            <div style="display: table-cell; vertical-align: middle">
                                                <span style="font-size: 24px" class="font-weight-bold">#{{ $comment->id }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="row">
                                            <div class="col-md-6 title-color" style="font-size: 18px;">
                                                <span>{{ $title }}</span>
                                            </div>
                                            <div class="col-md-6 text-md-right">
                                                By: <a href="#">{{ $comment->client }}</a> on {{ $comment->date }}
                                            </div>
                                        </div>
                                        <div class="comment-text common-color">
                                            {{ $comment->text }}
                                        </div>
                                        <div class="action text-md-right">
                                            @include("components.deleteCommentButton")
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endempty
        </section>
    </div>
</body>
<script src="{{ asset('js/comments.js') }}"></script>
</html>
