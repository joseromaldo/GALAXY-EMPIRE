<?php
include('header.php');
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow p-4">
                <h2 class="text-center mb-4">Formulario de Cotización</h2>
                <form action="../html/respuesta.php">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion_empresa" class="form-label">Dirección de la Empresa</label>
                        <input type="text" class="form-control" id="direccion_empresa" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion_app" class="form-label">Descripción de la Aplicación</label>
                        <textarea class="form-control" id="descripcion_app" rows="3" required></textarea>
                    </div>
                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-primary">Enviar Cotización</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <img class="w-100 h-100 p-5" src="../images/LOGO1.jpg" alt="log1">
        </div>
        <div class="col-6">
            <img class="w-100 h-100 p-5" src="../images/LOGO2.jpg" alt="log2">
        </div>
    </div>
</div>

<?php
include('footer.php');
?>
