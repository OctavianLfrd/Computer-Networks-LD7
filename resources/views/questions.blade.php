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
    <title>Computer networking - controll questions</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="display-1 header-color text-center">Control Questions</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Welcome</a></li>
                <li class="breadcrumb-item active">Comments</li>
            </ol>
            @include('components.answerModal')
        </nav>
        @if(count($questionData) < 1)
            <div class="container header-color list-font-size">
                There are currently no questions
            </div>
        @else
            @foreach($questionData as $qData)
                <div class="card">
                    <div class="card-header bg-secondary text-white pb-1">
                        <div class="row">
                            <div class="col-md-6">
                                Subject: {{ $qData['question']->subject }}
                            </div>
                            <div class="col-md-6 text-md-right">
                                <button id="add-answer-button" class="btn btn-link" data-question-id="{{ $qData['question']->id }}" style="padding: 0" data-toggle="modal" data-target="#answerModal">
                                    <i class="material-icons">add</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $qData['question']->question }}
                        </p>
                        @if(count($qData['answers']) < 1)
                            <div class="container header-color list-font-size">
                                There are currently no answers
                            </div>
                        @else
                            <div class="container header-color list-font-size">
                                answers:
                            </div>
                            @foreach($qData['answers'] as $answer)
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">
                                                By {{ $answer->client }}
                                            </div>
                                            <div class="col-md-6 text-md-right">
                                                At {{ $answer->date }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="card-text"> {{ $answer->text }}</p>
                                            </div>
                                            <div class="col-md-6 text-md-right">
                                                @include('components.deleteAnswerButton')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</body>
<script src="{{ asset('js/questions.js') }}"></script>
</html>
