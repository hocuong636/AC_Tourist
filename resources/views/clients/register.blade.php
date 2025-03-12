<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
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
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Tham gia cùng chúng tôi</h2>
                    <p class="text-gray-600 mb-6">
                        Tạo tài khoản để bắt đầu hành trình của bạn
                    </p>
                    <img src="{{ asset('clients/assets/images/register-illustration.svg') }}" alt="Register illustration" class="mx-auto max-w-full h-auto">
                </div>
            </div>
        </div>
        
        <!-- Right side - Register form -->
        <div class="w-full md:w-1/2 p-8">
            <div class="mb-8 text-center">
                <h1 class="text-2xl font-bold text-gray-800">Đăng ký tài khoản</h1>
                <p class="text-sm text-gray-600 mt-2">
                    Nhập thông tin của bạn để tạo tài khoản
                </p>
            </div>
            
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf
                
                <!-- Name input -->
                <div class="relative">
                    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        placeholder="Họ và tên" 
                        class="form-input w-full px-10 py-3 border border-gray-300 rounded-lg focus:outline-none"
                        value="{{ old('name') }}" 
                        required 
                        autofocus
                    >
                    @error('name')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                
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
                        onclick="togglePassword('password', 'toggleIcon')"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"
                    >
                        <i class="fa-regular fa-eye" id="toggleIcon"></i>
                    </button>
                    @error('password')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                
                <!-- Confirm Password input -->
                <div class="relative">
                    <div class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        id="password_confirmation" 
                        placeholder="Xác nhận mật khẩu" 
                        class="form-input w-full px-10 py-3 border border-gray-300 rounded-lg focus:outline-none"
                        required
                    >
                    <button 
                        type="button"
                        onclick="togglePassword('password_confirmation', 'toggleIconConfirm')"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400"
                    >
                        <i class="fa-regular fa-eye" id="toggleIconConfirm"></i>
                    </button>
                </div>
                
                <!-- Terms and conditions -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input 
                            type="checkbox" 
                            name="terms" 
                            id="terms" 
                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
                            required
                        >
                    </div>
                    <label for="terms" class="ml-2 text-sm text-gray-600">
                        Tôi đồng ý với <a href="#" class="text-indigo-600 hover:underline">Điều khoản dịch vụ</a> và <a href="#" class="text-indigo-600 hover:underline">Chính sách bảo mật</a>
                    </label>
                </div>
                
                <!-- Register button -->
                <button 
                    type="submit" 
                    class="w-full py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition duration-200"
                >
                    Đăng ký
                </button>
                
                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-xs uppercase">
                        <span class="bg-white px-2 text-gray-500">
                            Hoặc đăng ký với
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
                
                <!-- Login link -->
                <div class="text-center mt-6">
                    <span class="text-sm text-gray-600">Đã có tài khoản? </span>
                    <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline font-medium">
                        Đăng nhập
                    </a>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        function togglePassword(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = document.getElementById(iconId);
            
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

