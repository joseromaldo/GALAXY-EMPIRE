<?php
include('header.php');
?>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="shadow p-4 rounded">
                    <h1 class="text-center mb-4">Registro</h1>
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono" placeholder="Teléfono" required>
                        </div>
                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmar_contrasena" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="confirmar_contrasena" placeholder="Confirmar Contraseña" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Dirección" required>
                        </div>
                        <div class="mb-3">
                            <label for="ciudad" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" required>
                        </div>
                        <div class="mb-3">
                            <label for="pais" class="form-label">País</label>
                            <input type="text" class="form-control" id="pais" placeholder="País" required>
                        </div>
                        <button type="submit" class="btn btn-primary"><a href="../html/index.php" class="text-white">Registrarse</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  
<?php
include('footer.php');
?>