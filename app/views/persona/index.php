<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Género</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($personas as $persona): ?>
            <tr>
                <td><?php echo $persona['id']; ?> </td>
                <td><?php echo $persona['nombre']; ?></td>
                <td><?php echo $persona['apellido']; ?></td>
                <td><?php echo $persona['genero']; ?></td>
                <td><?php echo $persona['email']; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $persona['id']; ?>">Editar</a>
                    <form action="index.php?action=delete" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $persona['id']; ?>">
                        <button type="submit" onclick="return confirm(' desea eliminar?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>