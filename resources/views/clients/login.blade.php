<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .form-input:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 1px rgba(79, 70, 229, 0.2);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-100 to-slate-200 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row">
        <!-- Left side - Image and welcome text -->
        <div class="hidden md:block w-full md:w-1/2 bg-indigo-50 p-8 relative">
            <div class="absolute inset-0 flex items-center justify-center p-6">
                <div class="max-w-sm text-center">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Chào mừng trở lại</h2>
                    <p class="text-gray-600 mb-6">
                        Đăng nhập vào tài khoản của bạn và tiếp tục hành trình với chúng tôi
                    </p>
                    <img src="{{ asset('clients/assets/images/login-illustration.svg') }}" alt="Login illustration" class="mx-auto max-w-full h-auto">
                </div>
            </div>
        </div>
        
        <!-- Right side - Login form -->
        <div class="w-full md:w-1/2 p-8">
            <div class="mb-8 text-center">
                <h1 class="text-2xl font-bold text-gray-800">Đăng nhập</h1>
                <p class="text-sm text-gray-600 mt-2">
                    Nhập thông tin đăng nhập của bạn để tiếp tục
                </p>
            </div>
            
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                
                <!-- Email input -->
                <div class="relative">
                    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        placeholder="Email" 
                        class="form-input w-full px-10 py-3 border border-gray-300 rounded-lg focus:outline-none"
                        value="{{ old('email') }}" 
                        required 
                        autofocus
                    >
                    @error('email')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                
                <!-- Password input -->
                <div class="relative">
                    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        placeholder="Mật khẩu" 
                        class="form-input w-full px-10 py-3 border border-gray-300 rounded-lg focus:outline-none"
                        required
                    >
                    <button 
                        type="button"
                        onclick="togglePassword()"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"
                    >
                        <i class="fa-regular fa-eye" id="toggleIcon"></i>
                    </button>
                    @error('password')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                
                <!-- Remember me & Forgot password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            name="remember" 
                            id="remember" 
                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <label for="remember" class="ml-2 text-sm text-gray-600 cursor-pointer">
                            Ghi nhớ đăng nhập
                        </label>
                    </div>
                    
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">
                            Quên mật khẩu?
                        </a>
                    @endif
                </div>
                
                <!-- Login button -->
                <button 
                    type="submit" 
                    class="w-full py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition duration-200"
                >
                    Đăng nhập
                </button>
                
                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-xs uppercase">
                        <span class="bg-white px-2 text-gray-500">
                            Hoặc đăng nhập với
                        </span>
                    </div>
                </div>
                
                <!-- Social login -->
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="flex items-center justify-center gap-2 py-2.5 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200">
                        <i class="fab fa-facebook-f text-blue-600"></i>
                        <span class="text-sm font-medium">Facebook</span>
                    </a>
                    <a href="#" class="flex items-center justify-center gap-2 py-2.5 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200">
                        <i class="fab fa-google text-red-500"></i>
                        <span class="text-sm font-medium">Google</span>
                    </a>
                </div>
                
                <!-- Register link -->
                @if (Route::has('register'))
                    <div class="text-center mt-6">
                        <span class="text-sm text-gray-600">Chưa có tài khoản? </span>
                        <a href="{{ route('register') }}" class="text-sm text-indigo-600 hover:underline font-medium">
                            Đăng ký ngay
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>
    
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>

