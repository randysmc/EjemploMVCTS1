<?php require_once __DIR__ . '/../layouts/header.php'; ?>


<h1>Formulario para crear una persona</h1>

<form id="create-persona-form" action="index.php?action=store" method="POST">
    <label>Nombre</label>
    <input type="text" name="nombre" required><br>
    <label>Apellido</label>
    <input type="text" name="apellido" required><br>
    <label>Genero</label>
    <select name="genero" required>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Masculino</option>
    </select><br>
    <label>Email</label>
    <input type="email" name="email" required><br>
    <label>Contraseña</label>
    <input type="password" name="password" required><br>
    <button type="submit">Guardar</button>

</form>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>