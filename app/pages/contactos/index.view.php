<?php view('header'); ?>
<!-- php -S localhost:8000 -->

<div class="card mt-3">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="/contactos/crear" role="button">Agregar Contacto</a>
    </div>
    <div class="card-body">
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
                            <td>Editar | <a name="" id="" class="btn btn-danger" href="/contactos/<?php echo $contacto['id']; ?>" role="button">Borrar</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>


<?php view('footer'); ?>