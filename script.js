const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

const registerForm = document.getElementById('registerForm');
const loginForm = document.getElementById('loginForm');

// Simulación de base de datos
let users = [];

// Cambiar entre formularios
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

// Registro de usuario
registerForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const name = document.getElementById('regName').value;
    const email = document.getElementById('regEmail').value;
    const password = document.getElementById('regPassword').value;
    const role = document.getElementById('regRole').value;

    // Guardar usuario en "base de datos"
    users.push({ name, email, password, role });
    alert("Usuario registrado exitosamente.");
    container.classList.remove("active"); // Cambiar a formulario de inicio de sesión
});

// Inicio de sesión
loginForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const email = document.getElementById('logEmail').value;
    const password = document.getElementById('logPassword').value;

    // Buscar usuario en "base de datos"
    const user = users.find(u => u.email === email && u.password === password);

    if (user) {
        if (user.role === 'admin') {
            window.location.href = 'admin.html'; // Redirigir a la página de administrador
        } else {
            window.location.href = 'usuario.php'; // Redirigir a la página de usuario
        }
    } else {
        alert("Correo o contraseña incorrectos.");
    }
});
