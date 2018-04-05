<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ trans('lang.title') }}</title>

    {{--Include Font--}}
    {{ Html::style(asset('css/font-awesome.min.css')) }}
    {{--Include Css--}}
    {{ Html::style(asset('css/app.css')) }}
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        {{--Navbar Content--}}
        <div class="navbar-header">
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ route('tasks.index') }}">@lang('lang.brand')</a>
        </div>

        {{--Language--}}
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">@lang('lang.lang')<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('lang', 'vn') }}">@lang('lang.vn')</a>
                    </li>
                    <li>
                        <a href="{{ route('lang', 'en') }}">@lang('lang.en')</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    @yield('content')
</div>

{{ Html::script(asset('js/app.js')) }}
</body>
</html>
