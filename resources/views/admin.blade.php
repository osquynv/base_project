<!DOCTYPE html>
<html lang="vi VN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHẦN MỀM NHÀ XE</title>
    <link rel="shortcut icon" href="/favicon.png">
    <!-- Main styles for this application -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{mix('/css/app.css')}}" rel="stylesheet">
    <meta id="csrf-token" name="csrf-token" value="{{ csrf_token() }}">
</head>
<body>
<div id="app">
</div>

<a href="{{url('logout')}}">Logout</a>
<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>