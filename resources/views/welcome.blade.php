<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: green;
            color: blue;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            height: 80vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: white;
            padding: 0 25px;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if(Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">asad</a>
                @else
                    <a href="{{ route('login') }}">asadLogin</a>

                    @if(Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Autometic Routine Builder
            </div>

            <div class="links asad">
                <a href="{{ route('chack') }}">SemesterInsert</a>
                <a href="{{ route('room') }}">RoomInsert</a>
                <a href="{{ route('teacher') }}">TeacherInsert</a>
                <a href="{{ route('course') }}">CourseInsert</a>
                <a href="{{ route('routine') }}">Routine Builder</a>

            </div>
        </div>
    </div>
</body>

</html>
