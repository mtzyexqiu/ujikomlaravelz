<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Favicon (Logo) -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <style>
        .btn-animate {
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .btn-animate:hover {
            transform: translateY(-3px);
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
            background-color: #2563EB; /* Darker blue on hover */
        }

        .btn-animate:active {
            transform: scale(0.95);
        }

        .social-button {
            font-size: 20px;
            color: #fff;
            background-color: #3b5998; /* Facebook color */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .social-button:hover {
            transform: translateY(-3px);
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
        }

        .social-button i {
            color: white;
        }

        .social-button:hover {
            background-color: #3b5998;
        }

        .social-button:active {
            transform: scale(0.95);
        }

        .input-field {
            transition: all 0.3s ease;
        }

        .input-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgb(255, 255, 255);
        }
        .corner-side {
            position: relative;
            overflow: hidden;
            border-radius: 50px;
        }
    </style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen font-sans">
    <div class="flex bg-white rounded-lg shadow-2xl w-4/5 max-w-4xl overflow-hidden">

        <!-- Left Section -->
        <div class="w-1/2 bg-blue-500 text-white rounded-l-lg flex flex-col items-center justify-center p-10 corner-side">
            <h2 class="text-4xl font-bold mb-4">Welcome Back!</h2>
            <p class="text-lg mb-6">Don't have an account?</p>
            <a href="{{ route('register') }}" class="btn-animate bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100">
                Register
            </a>
        </div>

        <!-- Right Section -->
        <div class="w-1/2 p-8 flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-center mb-6 text-gray-800">Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                    <x-text-input id="email" class="input-field w-full px-6 py-3 border border-gray-300 rounded-lg shadow-sm mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-lg font-medium text-gray-700">Password</label>
                    <x-text-input id="password" class="input-field w-full px-6 py-3 border border-gray-300 rounded-lg shadow-sm mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="password" required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Forgot Password -->
                <div class="text-right mb-6">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
                    @endif
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn-animate w-full bg-blue-500 text-white py-3 rounded-lg font-semibold hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 text-lg">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>
