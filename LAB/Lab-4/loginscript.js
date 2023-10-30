document.addEventListener('DOMContentLoaded', function () {
    const username = "Admin01";
    const password = "PasswordAdmin01";

    const loginForm = document.querySelector('form');
    const loginError = document.getElementById('login-error');

    loginForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const enteredUsername = document.getElementById('username').value;
        const enteredPassword = document.getElementById('password').value;

        if (enteredUsername === username && enteredPassword === password) {
            // หาก Login สำเร็จ
            loginError.textContent = 'Your username and password are correct! You are logged in.';
        } else {
            // หาก Login ไม่สำเร็จ
            loginError.textContent = '"your username or password is incorrect! please try again."';
        }
    });
});
