<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href={{asset("/storage/small-logo.png")}}>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!--Vite's package manager is renaming blockly packages and causing issues with the requirements for blockly-->
    <!--Load Blockly package-->
    <!--
    @vite(['resources/js/blockly/blockly_compressed.js', 'resources/js/blockly/blocks_compressed.js', 'resources/js/blockly/msg/en.js'])
    -->
    <!--Blockly CDN being used as a workaround-->
    <script src="https://unpkg.com/blockly/blockly.min.js"></script>
</head>
<body>
    <div id="app" class="container-flush">
        <!--
            Display instructions at beginning using popup or modal
            then hide instructions into question mark info icon
        -->
        @include("inc.navbar")
        {{--@include("inc.messages")--}}
        @yield("content")
        <div class="row fixed-bottom">
            <div class="col-md-4">
                <a href="{{route('modules.index')}}" class="btn btn-default">Go Back</a>
                {{--
                @if (Auth::user()->role == "teacher")
                    <a href="{{route("modules.index")}}" class="btn btn-default">Go Back</a>
                @else
                    <a href="/student" class="btn btn-default">Go Back</a>
                @endif
                --}}
            </div>
            <div class="col-md-8">
                {{--This method should really be the lessons.store--}}
                {{html()->form("POST", route('student.store'))->class("float-right px-1")->open()}}
                    {{--
                        This is supposed to store the id of the completed module and the student's id
                        into the table. However, because of the multiple entry points, I haven't polished
                        the controller to get consistent data and the demo also doesn't have access to the
                        AUTH object.
                        Therefore, this button is now a simple redirect.
                    --}}
                    {{--html()->hidden($name="class_id", $value=$class_id)--}}
                    {{html()->submit("Submit")->class('btn btn-primary')}}
                {{html()->form()->close()}}
            </div>
        </div>
    </div>
</body>
</html>