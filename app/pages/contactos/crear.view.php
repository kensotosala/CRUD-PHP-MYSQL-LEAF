<?php view('header'); ?>

<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            Contactos
        </div>
        <div class="card-body">
            <form action="/contactos" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese su nombre" required>
                </div>

                <div class="mb-3">
                    <label for="primer_apellido" class="form-label">Primer Apellido:</label>
                    <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" aria-describedby="helpId" placeholder="Ingrese su primer apellido" required>
                </div>

                <div class="mb-3">
                    <label for="segundo_apellido" class="form-label">Segundo Apellido:</label>
                    <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" aria-describedby="helpId" placeholder="Ingrese su segundo apellido" required>
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input type="email" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Ingrese su correo" required>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-primary" href="/" role="button">Cancelar</a>

            </form>
        </div>
        <div class="card-footer text-muted">

        </div>
    </div>
</div>


<?php view('footer'); ?>