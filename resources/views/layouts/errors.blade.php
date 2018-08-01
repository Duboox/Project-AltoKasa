<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>
    {{ Html::style('tmpl_dashboard/css/bootstrap.min.css') }}
    {{ Html::style('dashboard/font-awesome/css/font-awesome.css') }}
    {{ Html::style('tmpl_dashboard/css/animate.css') }}
    {{ Html::style('tmpl_dashboard/css/template.css') }}
    {{ Html::favicon('favicon.ico') }}
</head>
<body class="gray-bg">

    @yield('content')
   
    {{ Html::script('tmpl_dashboard/js/jquery-2.1.1.js') }}
    {{ Html::script('tmpl_dashboard/js/bootstrap.min.js') }}
</body>
</html>
