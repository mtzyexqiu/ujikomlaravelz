<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

    <!-- Favicon (Logo) -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
        }

        .bg-custom {
            background-color: #157BFF;
        }

        .center-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            padding-left: 50px;
        }

        .welcome-text {
            font-family: 'Poppins', sans-serif;
            font-size: 48px;
            font-weight: 600;
            color: white;
            margin-bottom: 10px;
        }

        .subtext {
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
            font-weight: 400;
            color: white;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .auth-links {
            position: fixed;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
        }

        .btn-login, .btn-register, .btn-dashboard {
            padding: 10px 20px;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .btn-login {
            background-color: white;
            color: #157BFF;
            border: 2px solid #157BFF;
            box-shadow: 0 6px 20px rgba(21, 123, 255, 0.3);
        }

        .btn-login:hover {
            background-color: #157BFF;
            color: white;
            box-shadow: 0 6px 20px rgba(21, 123, 255, 0.5);
        }

        .btn-register {
            background-color: #157BFF;
            color: #ffffff;
            border: 2px solid #157BFF;
        }

        .btn-register:hover {
            background-color: #157BFF;
            transform: scale(1.05);
        }

        .btn-dashboard {
            background-color: #157BFF;
            color: white;
            border: 2px solid #157BFF;
        }

        .btn-dashboard:hover {
            background-color: #157BFF;
            box-shadow: 0 6px 20px rgba(21, 123, 255, 0.5);
        }


        /* Responsive untuk tampilan mobile */
        @media (max-width: 768px) {
            .welcome-text {
                font-size: 32px;
            }

            .subtext {
                font-size: 24px;
            }
        }
    </style>
</head>

<body class="antialiased bg-custom">
    <div class="center-content">
        <div class="welcome-text">
            Welcome to Monitoring Page
        </div>
        <div class="subtext">
            monitoring data according
        </div>
        <div class="subtext">
            to your own role
        </div>


    </div>

    @if (Route::has('login'))
        <div class="auth-links">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn-login">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn-login">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-register">Register</a>
                @endif
            @endauth
        </div>
    @endif
</body>

</html>
