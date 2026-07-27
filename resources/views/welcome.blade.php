<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('WELL') }} - {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    </head>

    <style> 
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8fafc;
            color: #636b6f;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.25rem;
        }
    </style>

    <body>
        <div class="container">
            <h1>{{ __('Welcome to WELL') }}</h1>
            <p>{{ __('Your application is running successfully!') }}</p>
        </div>
    </body>
</html>
