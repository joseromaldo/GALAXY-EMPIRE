<?php
include('header.php');
?>

<div class="row text-center mt-2">
    <div class="col">
        <div class="border border-dark p-3 shadow">
            <h1 class="fw-bold">PORTAFOLIO</h1>
            <p class="fs-5">Bienvenido a nuestro Portafolio de trabajo. Acomódese y tome su tiempo para conocer nuestros distintos proyectos.</p>
        </div>
    </div>
</div>
<div class="row p-5">
    <!-- modal 1 -->
    <div class="col-2 mt-5">
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollableModal1">
            Galeria
        </button>

        <!-- Modal -->
        <div class="modal fade" id="scrollableModal1" tabindex="-1" aria-labelledby="scrollableModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollableModalLabel">Proyecto 1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido del modal -->
                        <p>Bienvenido/a a nuestro diseño  de galería en línea. Sumérgete en un mundo de arte y creatividad mientras exploras nuestras colecciones 
                            cuidadosamente seleccionadas. Desde fotografías impresionantes hasta obras de arte inspiradoras, nuestra galería te invita a disfrutar de
                             una experiencia visual única. ¡Déjate llevar por la belleza y la expresión artística en cada obra que tenemos para ti!</p>
                             <img class="h-50 w-100" src="../images/portafolio1.jpg" alt="portafolio1">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary"><a href="../GALERIA/galeria.html" class="text-white">Ver</a></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- modal 2 -->
    <div class="col-2 mt-5">
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollableModal2">
            Para empresas
        </button>

        <!-- Modal -->
        <div class="modal fade" id="scrollableModal2" tabindex="-1" aria-labelledby="scrollableModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollableModalLabel">Presentación de empresa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido del modal -->
                        <p>Imagina tener una página web impresionante y totalmente funcional que atraiga a más clientes, aumente tus ventas y eleve la visibilidad de tu marca. 
                            Con nuestro equipo de expertos en diseño web y desarrollo, podemos hacer que esa visión se convierta en realidad.</p>
                        <img class="h-50 w-100" src="../images/portafolio2.jpg" alt="portafolio2">

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary"><a href="../PLANTILLA/startbootstrap-freelancer-gh-pages/index.html" class="text-white">Ver página</a></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- modal 3 -->
    <div class="col-2 mt-5">
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollableModal">
            Para instituciones
        </button>

        <!-- Modal -->
        <div class="modal fade" id="scrollableModal" tabindex="-1" aria-labelledby="scrollableModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollableModalLabel">Presenta tu institución</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido del modal -->
                        <p>¡Bienvenido/a al mundo digital de las oportunidades! En el competitivo escenario actual, tener una presencia en línea efectiva es clave para el éxito 
                            de cualquier institución. Con nuestra experiencia en el diseño y desarrollo de páginas web a medida, podemos ayudarte a llevar la esencia y el impacto 
                            de tu institución al mundo virtual.!</p>
                            <img class="h-50 w-100" src="../images/portafolio3.jpg" alt="portafolio3">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary"><a href="../Proyecto/proyecto.php" class="text-white">Ver página</a></button>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- modal 4 -->
    <div class="col-2 mt-5">
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollableModal4">
            Para diseños
        </button>

        <!-- Modal -->
        <div class="modal fade" id="scrollableModal4" tabindex="-1" aria-labelledby="scrollableModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollableModalLabel">Para la creación de nuevos diseños</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido del modal -->
                        <p>Bienvenido a nuestra plataforma de creación de diseños, donde la creatividad cobra vida. Aquí, encontrarás todas las herramientas necesarias para
                             dar forma a tus ideas y convertirlas en diseños impresionantes. Desde logotipos y banners hasta diseños web completos, nuestro equipo está listo 
                             para ayudarte a destacar en el mundo digital. Explora nuestras funciones y comienza a diseñar tu futuro hoy mismo.</p>
                             <img class="h-50 w-100" src="../images/portafolio4.jpg" alt="portafolio4">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary"><a href="../index_01.html" class="text-white">Ver página</a></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- modal 5 -->
    <div class="col-2 mt-5">
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollableModal5">
            Para correo institucional
        </button>

        <!-- Modal -->
        <div class="modal fade" id="scrollableModal5" tabindex="-1" aria-labelledby="scrollableModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollableModalLabel5">Diseño para la interfaz del trabajador con el correo institucional</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenido del modal -->
                        <p>¡Descubre nuestro servicio de correo institucional premium! Entendemos la importancia de una comunicación profesional y 
                            segura dentro de tu institución. Con nuestra plataforma, obtendrás correos electrónicos personalizados con el nombre de tu dominio, amplio almacenamiento,
                             seguridad avanzada y acceso desde cualquier dispositivo. Potencia la eficiencia y confiabilidad de tus comunicaciones internas con nuestro servicio de
                              correo institucional.</p>
                              <img class="h-50 w-100" src="../images/portafolio5.jpg" alt="portafolio5">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary"><a href="../PRACTICA/practica.html" class="text-white">Ver página</a></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- logo -->
    <div class="col-2">
        <img class="h-100 w-100" src="../images/LOGO2.jpg" alt="logo2">
    </div>
</div>
<div class="row text-center mt-2">
    <div class="col">
        <div class="border border-dark p-3 shadow-lg" style="box-shadow: 0 -5px 5px -5px rgba(0, 0, 0, 0.75);">
            <h1 class="fw-bold">PORTAFOLIO</h1>
            <p class="fs-5">Contratar un servicio de diseño web con nosotros es asegurar la calidad y el impacto de tu presencia en línea. Cada página que creamos es el 
                resultado de un proceso meticuloso, donde combinamos creatividad, tecnología de vanguardia y estrategias de diseño centradas en el usuario. El beneficio de
                 contar con nuestra experiencia se traduce en sitios web funcionales, atractivos visualmente y optimizados para obtener resultados. Desde mejorar la experiencia
                  del usuario hasta aumentar la visibilidad en los motores de búsqueda, nuestro servicio de páginas web está diseñado para impulsar tu presencia en línea y alcanzar
                   tus objetivos digitales de manera efectiva y duradera.</p>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>