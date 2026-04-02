<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Twilio Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');
        body { font-family: 'Inter', system-ui, sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full bg-white rounded-3xl shadow-2xl overflow-hidden">
        <!-- Header -->
        <div class="bg-red-500 px-10 py-12 text-white text-center">
            <div class="w-20 h-20 mx-auto bg-white/20 backdrop-blur rounded-2xl flex items-center justify-center mb-6">
                <i class="fas fa-phone-volume text-5xl"></i>
            </div>
            <h1 class="text-3xl font-semibold">Twilio Admin</h1>
            <p class="text-red-100 mt-2">Sign in to your dashboard</p>
        </div>

        <div class="p-10">
            @if (session('status'))
                <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-2xl text-sm">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.post') }}">
                @csrf

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                               class="w-full px-6 py-4 border border-gray-200 rounded-3xl focus:outline-none focus:border-red-500 text-lg"
                               placeholder="admin@example.com">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input type="password" name="password" required
                               class="w-full px-6 py-4 border border-gray-200 rounded-3xl focus:outline-none focus:border-red-500 text-lg"
                               placeholder="••••••••">
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center gap-2 text-sm">
                            <input type="checkbox" name="remember" class="w-4 h-4 text-red-500 rounded">
                            <span>Remember me</span>
                        </label>
                        <a href="#" class="text-red-500 hover:underline text-sm">Forgot password?</a>
                    </div>

                    <button type="submit"
                            class="w-full bg-red-500 hover:bg-red-600 transition py-5 rounded-3xl text-white font-semibold text-lg flex items-center justify-center gap-2">
                        <i class="fas fa-sign-in-alt"></i>
                        SIGN IN
                    </button>
                </div>
            </form>

            
        </div>
    </div>
</body>
</html>