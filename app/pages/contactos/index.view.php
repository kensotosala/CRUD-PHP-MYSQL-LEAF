<?php view('header'); ?>

<!-- php -S localhost:8000 -->

<main class="container">

    <?php print_r($contactos); ?>

    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Segundo Apellido</th>
                    <th scope="col">Tercer Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contactos as $contacto) : ?>
                    <tr>
                        <td><?php echo $contacto['id']; ?></td>
                        <td><?php echo $contacto['nombre']; ?></td>
                        <td><?php echo $contacto['primer_apellido']; ?></td>
                        <td><?php echo $contacto['segundo_apellido']; ?></td>
                        <td><?php echo $contacto['correo']; ?></td>
                        <td>Editar | Borrar</td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>


</main>

<?php view('footer'); ?>