<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('pack.header')
    <x-message-banner msg="user Login SuccessFully"/>
    {{-- <x-messageproxy msg="user Login SuccessFully"/> --}}
    {{-- <x-message-banner msg="user Login SuccessFully"/>
    <x-message-banner msg="user Signup Successfully"/> --}}
    @include("pages.blog");
    <h1>this is our index page</h1>
    {{-- <a href="{{route('hm')}}">welcome</a> --}}

    <style>
        .message{
            background-color: lightgreen;
            color: green;
            padding: 3px 10px;
            border-radius: 2px;
            display: inline-block;
            margin: 10px;
        }
    </style>
    
</body>
</html>