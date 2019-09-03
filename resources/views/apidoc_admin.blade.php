<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
<style>
html, body {
    background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        color:#222;  }
    .container{
        width:800px;
        margin:10px auto;
        padding:20px;
        border-left:2px solid silver;
        border-right:2px solid silver; }
    table th,td{
        border:1px solid #ede;
        padding:5px 10px; }
    pre{
        background: #666;
        color: white;
        padding: 20px 10px;
        font-family: yahei;
        overflow: auto; }
    li code{
        font-size: 28px;
        color: #4eb4ee;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="container">
{!! $content !!}
</div>
</body>
</html>