<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .btn-animate {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-animate:hover {
            transform: translateY(-3px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-animate:active {
            transform: scale(0.98);
        }

        .input-field {
            transition: all 0.3s ease;
        }

        .input-field:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
        }
    </style>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="flex bg-white rounded-lg shadow-lg w-11/12 max-w-3xl">
        <!-- Left Section -->
        <div class="w-1/2 bg-blue-500 text-white rounded-l-lg flex flex-col items-center justify-center p-8 rounded-tr-3xl rounded-br-3xl">
            <h2 class="text-4xl font-bold mb-4">Let's Join Us!</h2>
            <p class="text-lg mb-6">Already have an account?</p>
            <a href="{{ route('login') }}" class="btn-animate bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100">Login</a>
        </div>

        <!-- Right Section -->
        <div class="w-1/2 p-8">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Create Your Account</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-5">
                    <label for="name" class="block text-base font-medium text-gray-700">Name</label>
                    <input id="name" name="name" type="text" :value="old('name')" required
                        class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg mt-2 focus:outline-none text-base" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mb-5">
                    <label for="email" class="block text-base font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" :value="old('email')" required
                        class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg mt-2 focus:outline-none text-base" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-5">
                    <label for="password" class="block text-base font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                        class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg mt-2 focus:outline-none text-base" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-base font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required
                        class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg mt-2 focus:outline-none text-base" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Register Button -->
                <button type="submit"
                    class="btn-animate w-full bg-blue-500 text-white py-3 rounded-lg font-semibold hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 text-lg">
                    Register
                </button>
            </form>
        </div>
    </div>
</body>
</html>
