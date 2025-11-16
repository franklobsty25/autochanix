document.addEventListener('DOMContentLoaded', () => {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
    const loginForm = document.getElementById('login-form');
    const loginBtn = document.getElementById('login-btn');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const rememberMeInput = document.getElementById('dd');
    const spinner = document.getElementById('login-spinner');
    const loginModal = document.getElementById('login');
    const modal = bootstrap.Modal.getOrCreateInstance(loginModal);

    loginForm.addEventListener('submit', async function (e) {
        e.preventDefault();
        spinner.classList.remove('d-none');
        loginBtn.setAttribute('disabled', true);

        if (!emailInput.value || !passwordInput.value) {
            spinner.classList.add('d-none');
            loginBtn.removeAttribute('disabled');
            Toastify({
                text: `Email or password is required`,
                duration: 3000,
                gravity: "top",
                position: "right",
                style: { background: "#ee2400" },
                stopOnFocus: true,
            }).showToast();
            return;
        }

        try {
            const res = await fetch('/login', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    email: emailInput.value,
                    password: passwordInput.value,
                    rememberMe: rememberMeInput.checked,
                })
            });

            const data = await res.json();

            if (data.success) {
                Toastify({
                    text: data.message || `Login successful`,
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    style: { background: "#28a745" },
                    stopOnFocus: true,
                }).showToast();
            } else {
                throw new Error(data.message || 'Something went wrong, Try again!');
            }
        } catch (err) {
            Toastify({
                text: err.message || `Server error occurred!`,
                duration: 3000,
                gravity: "top",
                position: "right",
                style: { background: "#ee2400" },
                stopOnFocus: true,
            }).showToast();
        } finally {
            modal.hide();
            loginForm.reset();
            spinner.classList.add('d-none');
            loginBtn.removeAttribute('disabled');
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
    const registerForm = document.getElementById('register-form');
    const registerBtn = document.getElementById('register-btn');
    const nameInput = document.getElementById('name');
    const registerEmailInput = document.getElementById('register-email');
    const registerPasswordInput = document.getElementById('register-password');
    const registerSpinner = document.getElementById('register-spinner');
    const loginModal = document.getElementById('login');
    const modal = new bootstrap.Modal(loginModal);

    registerForm.addEventListener('submit', async function (e) {
        e.preventDefault();
        registerSpinner.classList.remove('d-none');
        registerBtn.setAttribute('disabled', true);

        if (!nameInput.value || !registerEmailInput.value || !registerPasswordInput.value) {
            registerSpinner.classList.add('d-none');
            registerBtn.removeAttribute('disabled');
            Toastify({
                text: `Email or password is required`,
                duration: 3000,
                gravity: "top",
                position: "right",
                style: { background: "#ee2400" },
                stopOnFocus: true,
            }).showToast();
            return;
        }

        try {
            const res = await fetch('/register', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    name: nameInput.value,
                    email: registerEmailInput.value,
                    password: registerPasswordInput.value,
                })
            });

            const data = await res.json();

            if (data.success) {
                Toastify({
                    text: data.message || `Registration successful`,
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    style: { background: "#28a745" },
                    stopOnFocus: true,
                }).showToast();
            } else {
                throw new Error(data.message || 'Something went wrong, Try again!');
            }
        } catch (err) {
            Toastify({
                text: err.message || `Server error occurred!`,
                duration: 3000,
                gravity: "top",
                position: "right",
                style: { background: "#ee2400" },
                stopOnFocus: true,
            }).showToast();
        } finally {
            modal.hide();
            registerForm.reset();
            registerSpinner.classList.add('d-none');
            registerBtn.removeAttribute('disabled');
        }
    });
});
