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
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
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
                width: 60%;
                margin-inline: auto;
                font-size: 70px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .languages,
            .frameworks {
                list-style-type: none;
                padding-left: 0;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1 class="title m-b-md">
                    Primo progetto Laravel di {{ $nome }} {{ $cognome }}
                </h1>
                @if ( isset($known_languages) )
                    <h3>Linguaggi studiati</h3>
                    <ul class="languages">
                        @forelse ($known_languages as $language)
                            <li>
                                {{ $language }}
                            </li>
                        @empty
                            <li>Nessun linguaggio</li>
                        @endforelse
                    </ul>
                @endif
                @if ( isset($known_frameworks) )
                    <h3>Frameworks studiati</h3>
                    <ul class="frameworks">
                        @forelse ($known_frameworks as $framework)
                            <li>
                                {{ $framework }}
                            </li>
                        @empty
                            <li>Nessun framework</li>
                        @endforelse
                    </ul>
                @endif
            </div>
        </div>
    </body>
</html>
