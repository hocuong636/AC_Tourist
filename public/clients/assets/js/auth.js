/**
 * Authentication JavaScript Functions
 */

// Toggle password visibility
function togglePassword(inputId, iconId) {
    const passwordInput = document.getElementById(inputId || 'password');
    const toggleIcon = document.getElementById(iconId || 'toggleIcon');
    
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

// Form validation for login
function validateLoginForm() {
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const emailError = document.getElementById('email-error');
    const passwordError = document.getElementById('password-error');
    let isValid = true;
    
    // Reset errors
    if (emailError) emailError.textContent = '';
    if (passwordError) passwordError.textContent = '';
    
    // Email validation
    if (!email.value.trim()) {
        if (emailError) emailError.textContent = 'Vui lòng nhập email';
        email.classList.add('border-red-500');
        isValid = false;
    } else if (!/^\S+@\S+\.\S+$/.test(email.value)) {
        if (emailError) emailError.textContent = 'Email không hợp lệ';
        email.classList.add('border-red-500');
        isValid = false;
    } else {
        email.classList.remove('border-red-500');
    }
    
    // Password validation
    if (!password.value) {
        if (passwordError) passwordError.textContent = 'Vui lòng nhập mật khẩu';
        password.classList.add('border-red-500');
        isValid = false;
    } else {
        password.classList.remove('border-red-500');
    }
    
    return isValid;
}

// Form validation for register
function validateRegisterForm() {
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const passwordConfirmation = document.getElementById('password_confirmation');
    const terms = document.getElementById('terms');
    
    const nameError = document.getElementById('name-error');
    const emailError = document.getElementById('email-error');
    const passwordError = document.getElementById('password-error');
    const passwordConfirmError = document.getElementById('password-confirm-error');
    const termsError = document.getElementById('terms-error');
    
    let isValid = true;
    
    // Reset errors
    if (nameError) nameError.textContent = '';
    if (emailError) emailError.textContent = '';
    if (passwordError) passwordError.textContent = '';
    if (passwordConfirmError) passwordConfirmError.textContent = '';
    if (termsError) termsError.textContent = '';
    
    // Name validation
    if (!name.value.trim()) {
        if (nameError) nameError.textContent = 'Vui lòng nhập họ tên';
        name.classList.add('border-red-500');
        isValid = false;
    } else {
        name.classList.remove('border-red-500');
    }
    
    // Email validation
    if (!email.value.trim()) {
        if (emailError) emailError.textContent = 'Vui lòng nhập email';
        email.classList.add('border-red-500');
        isValid = false;
    } else if (!/^\S+@\S+\.\S+$/.test(email.value)) {
        if (emailError) emailError.textContent = 'Email không hợp lệ';
        email.classList.add('border-red-500');
        isValid = false;
    } else {
        email.classList.remove('border-red-500');
    }
    
    // Password validation
    if (!password.value) {
        if (passwordError) passwordError.textContent = 'Vui lòng nhập mật khẩu';
        password.classList.add('border-red-500');
        isValid = false;
    } else if (password.value.length < 8) {
        if (passwordError) passwordError.textContent = 'Mật khẩu phải có ít nhất 8 ký tự';
        password.classList.add('border-red-500');
        isValid = false;
    } else {
        password.classList.remove('border-red-500');
    }
    
    // Password confirmation validation
    if (!passwordConfirmation.value) {
        if (passwordConfirmError) passwordConfirmError.textContent = 'Vui lòng xác nhận mật khẩu';
        passwordConfirmation.classList.add('border-red-500');
        isValid = false;
    } else if (password.value !== passwordConfirmation.value) {
        if (passwordConfirmError) passwordConfirmError.textContent = 'Mật khẩu xác nhận không khớp';
        passwordConfirmation.classList.add('border-red-500');
        isValid = false;
    } else {
        passwordConfirmation.classList.remove('border-red-500');
    }
    
    // Terms validation
    if (!terms.checked) {
        if (termsError) termsError.textContent = 'Bạn phải đồng ý với điều khoản dịch vụ';
        isValid = false;
    }
    
    return isValid;
}

// Social login handlers
function loginWithFacebook() {
    // Implement Facebook login logic
    console.log('Facebook login clicked');
}

function loginWithGoogle() {
    // Implement Google login logic
    console.log('Google login clicked');
}

// Initialize authentication forms
document.addEventListener('DOMContentLoaded', function() {
    // Login form
    const loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            if (!validateLoginForm()) {
                e.preventDefault();
            }
        });
        
        // Social login buttons
        const facebookLoginBtn = document.getElementById('facebook-login');
        const googleLoginBtn = document.getElementById('google-login');
        
        if (facebookLoginBtn) {
            facebookLoginBtn.addEventListener('click', loginWithFacebook);
        }
        
        if (googleLoginBtn) {
            googleLoginBtn.addEventListener('click', loginWithGoogle);
        }
    }
    
    // Register form
    const registerForm = document.getElementById('register-form');
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            if (!validateRegisterForm()) {
                e.preventDefault();
            }
        });
        
        // Social register buttons
        const facebookRegisterBtn = document.getElementById('facebook-register');
        const googleRegisterBtn = document.getElementById('google-register');
        
        if (facebookRegisterBtn) {
            facebookRegisterBtn.addEventListener('click', loginWithFacebook);
        }
        
        if (googleRegisterBtn) {
            googleRegisterBtn.addEventListener('click', loginWithGoogle);
        }
    }
});

// Handle sidebar user menu
document.addEventListener('DOMContentLoaded', function() {
    const userMenuButton = document.querySelector('.menu-sidebar button');
    const userMenu = document.querySelector('.hidden-bar');
    const crossIcon = document.querySelector('.hidden-bar .cross-icon');
    const formBackDrop = document.querySelector('.form-back-drop');
    
    if (userMenuButton && userMenu) {
        userMenuButton.addEventListener('click', function() {
            userMenu.classList.add('visible-sidebar');
            if (formBackDrop) {
                formBackDrop.classList.add('active');
            }
        });
        
        if (crossIcon) {
            crossIcon.addEventListener('click', function() {
                userMenu.classList.remove('visible-sidebar');
                if (formBackDrop) {
                    formBackDrop.classList.remove('active');
                }
            });
        }
        
        if (formBackDrop) {
            formBackDrop.addEventListener('click', function() {
                userMenu.classList.remove('visible-sidebar');
                formBackDrop.classList.remove('active');
            });
        }
    }
}); 