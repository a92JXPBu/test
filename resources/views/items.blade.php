<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Пиксель</title>
    <!-- Styles -->
    <style>
        .itemsContainer
        {
            width:50%;
            margin: 0 auto;
            display: grid;
            grid-template-columns: auto auto auto auto;
        }
    </style>
</head>
<body>
@include('header')
@include('itemsGrid')
</body>
</html>
