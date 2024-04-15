<?php include('header.php'); ?>

<div class="container p-5">
    <h1 class="text-center mt-5 mb-4">Nuestro Equipo</h1>
    <div class="row justify-content-center">
        <!-- Empleado 1 -->
        <div class="col-lg-4 col-md-6 p-3">
            <div class="card shadow">
                <img src="../images/avatar1.jpeg" alt="av1" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Empleado 1</h4>
                    <p class="card-text">Nombre: Juan</p>
                    <p class="card-text">Apellido: Pérez</p>
                    <p class="card-text">Edad: 30 años</p>
                    <p class="card-text">Puesto: Diseñador Gráfico</p>
                </div>
            </div>
        </div>
        <!-- Empleado 2 -->
        <div class="col-lg-4 col-md-6 p-3">
            <div class="card shadow">
                <img src="../images/avatar2.png" alt="av2" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Empleado 2</h4>
                    <p class="card-text">Nombre: María</p>
                    <p class="card-text">Apellido: López</p>
                    <p class="card-text">Edad: 28 años</p>
                    <p class="card-text">Puesto: Desarrollador Web</p>
                </div>
            </div>
        </div>
        <!-- Empleado 3 -->
        <div class="col-lg-4 col-md-6 p-3">
            <div class="card shadow">
                <img src="../images/avatar3.png" alt="av3" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Empleado 3</h4>
                    <p class="card-text">Nombre: Carla</p>
                    <p class="card-text">Apellido: Rodríguez</p>
                    <p class="card-text">Edad: 35 años</p>
                    <p class="card-text">Puesto: Gerente de Proyectos</p>
                </div>
            </div>
        </div>
        <!-- Empleado 4 -->
        <div class="col-lg-4 col-md-6 p-3">
            <div class="card shadow">
                <img src="../images/avatar4.png" alt="av4" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Empleado 4</h4>
                    <p class="card-text">Nombre: Paulo</p>
                    <p class="card-text">Apellido: Gómez</p>
                    <p class="card-text">Edad: 32 años</p>
                    <p class="card-text">Puesto: Analista de Datos</p>
                </div>
            </div>
        </div>
        <!-- Empleado 5 -->
        <div class="col-lg-4 col-md-6 p-3">
            <div class="card shadow">
                <img src="../images/avatar5.jpeg" alt="av5" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Empleado 5</h4>
                    <p class="card-text">Nombre: Alejandra</p>
                    <p class="card-text">Apellido: Martínez</p>
                    <p class="card-text">Edad: 29 años</p>
                    <p class="card-text">Puesto: Diseñador WEB</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h1 class="mt-5 mb-4 text-center">Mapa de Ubicación de la Empresa</h1>

    
    <div class="mb-4 d-flex justify-content-center">
        <div class="embed-responsive embed-responsive-16by9" style="max-width: 800px;">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d308.46420251856524!2dLONGITUD!3dLATITUD!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjrCsDU1JzU0LjQiUyA5MMKwMjgnMjQuNiJX!5e0!3m2!1ses!2sgt!4v1621959677387!5m2!1ses!2sgt" allowfullscreen></iframe>
        </div>
    </div>

    
    <div class="text-center">
        <a href="https://www.waze.com/ul?ll=LATITUD,LONGITUD&navigate=yes" target="_blank">
            <img src="../images/waze.png" alt="Waze" class="h-auto w-auto">
        </a>
    </div>
</div>

<?php include('footer.php'); ?>
