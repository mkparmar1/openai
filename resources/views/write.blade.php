<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Searching Bot - AI Writing Assistant for Bloggers</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            body {
                font-family: 'Space Grotesk', sans-serif;
            }
            .title:empty:before {
                content:attr(data-placeholder);
                color:gray
            }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://unpkg.com/marked" defer></script>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl w-full mx-auto sm:px-6 lg:px-8 space-y-4 py-4">
                <div class="text-center text-gray-800 dark:text-gray-300 py-4">
                    <h1 class="text-7xl font-bold">Searching Bot</h1>
                </div>
                <div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[60px] h-full text-gray-600">
                    <form id="generateText" class="inline-flex gap-2 w-full">
                        @csrf
                        <input required id="title" name="title" class="w-full outline-none text-2xl font-bold" placeholder="Type your article title..." value="{{$title}}" />
                        <div>
                            <button id="saveBtn" type="button" class="rounded-md bg-emerald-500 px-4 py-2 text-white font-semibold generate">Generate</button>
                            <div id="loader" class="spinner-border text-success" role="status"><span class="visually-hidden"></span></div>
                        </div>
                    </form>
                </div>
                <div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[560px] h-full text-gray-600">
                    <textarea class="min-h-[540px] h-full w-full outline-none" spellcheck="false" id="content-generated"></textarea>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $('#loader').hide();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#saveBtn').click(function (e) { 
                $('#loader').show();
                $('#saveBtn').hide();
                var data = $('#title').val();
                $.ajax({
                    type: "POST",
                    url: "{{route('write')}}",
                    data: {title:data},
                    dataType: "json",
                    success: function (response) {
                        $('#content-generated').val(response.content);
                        $('#loader').hide();
                        $('#saveBtn').show();
                    }
                });
            });
            </script>
    </body>
</html>