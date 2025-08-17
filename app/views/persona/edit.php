<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<h1>Editar Persona</h1>

<form id="edit-persona-form" action="index.php?action=update" method="POST">
    <input type="hidden" name="id" value="<?php echo $persona['id']; ?>">
    <label>Nombre</label>
    <input type="text" name="nombre" value="<?php echo $persona['nombre']; ?>" required><br>
    <label>Apellido</label>
    <input type="text" name="apellido" value="<?php echo $persona['apellido']; ?>" required><br>
    <label>Género</label>
    <select name="genero" required>
        <option value="Masculino" <?php echo $persona['genero'] == 'Masculino' ? 'selected' : ''; ?>>Masculino</option>
        <option value="Femenino" <?php echo $persona['genero'] == 'Femenino' ? 'selected' : ''; ?>>Femenino</option>
    </select><br>
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $persona['email']; ?>" required><br>
    <label>Contraseña</label>
    <input type="password" name="password" id="password"><br>
    <span id="password-error" class="error"></span>
    <button type="submit">Actualizar</button>
</form>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>