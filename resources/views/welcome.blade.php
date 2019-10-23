<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Пиксель</title>
        <!-- Styles -->
        <style>
            .groupsContainer
            {
                width:50%;
                margin: 0 auto;
                display: grid;
                grid-template-columns: auto auto auto auto;
                background-color: grey;
            }
            .groupBox
            {
                margin-left: auto;
                margin-right: auto;
                background-color: red;
                text-align: center;
            }
            .groupBoxImage
            {
                height: 64px;
                width: 64px;
            }
            .groupBoxName
            {
            }
        </style>
    </head>
    <body>
    @include('header')
    @include('groups')
    </body>
</html>
