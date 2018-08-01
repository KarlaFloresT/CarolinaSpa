<?php
    $titulo = 'Nosotros';
    include 'templates/header.php';
    include 'templates/navegacion.php';
?>

	<div class="container pt-4">
		<div class="row no-gutters">
			<div class="col-12 hero">
				<img src="img/nosotros.jpg" alt="" class="img-fluid">
				<h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
			</div>
		</div>
	</div>
    <div class="container pt-4">
        <div class="row">
            <main class="col-lg-8 contenido-principal">
                <h2 class="d-block d-md-none text-uppercase text-center">Nosotros</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis beatae quos adipisci nisi quia, omnis, hic cumque eaque inventore numquam ullam culpa ducimus nulla veritatis, aliquid facere suscipit labore officia quisquam! Suscipit voluptates eos enim neque nihil repellendus, incidunt, voluptatibus exercitationem libero magnam repellat quos quod mollitia! Numquam, reprehenderit fugiat.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus at quas iste, ipsa officiis iure tempora ratione reprehenderit, optio voluptate, voluptatum excepturi minus voluptas ut veniam magnam dolorem quasi fugit eos! Repellat autem et deserunt est amet tenetur in blanditiis! Adipisci voluptatem laborum illum beatae! Inventore aut possimus ea aspernatur.
                </p>
                <h2 class="text-center text-uppercase mt-5 encabezado">
                    <span class="text-lowercase d-block">conoce nuetsras</span> instalaciones
                </h2>
                <div class="imagenes pt-4">
                    <a href="#" data-toggle="modal" data-target="#imagen_1">
                        <img src="img/galeria_mini_01.jpg" alt="" class="img-fluid">
                    </a>
                    <a href="#" data-target="#imagen_2" data-toggle="modal">
                        <img src="img/galeria_mini_02.jpg" alt="" class="img-fluid">
                    </a>
                    <a href="#" data-target="#imagen_3" data-toggle="modal">
                        <img src="img/galeria_mini_03.jpg" alt="" class="img-fluid">
                    </a>

                    <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="img/galeria_grande_01.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="img/galeria_grande_02.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div><!--Fin modal-->

                    <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="img/galeria_grande_03.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div><!--Fin modal-->
                </div>
            </main>
            <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
                <div class="sidebar horario">
                    <h2 class="text-center text-uppercase mt-3">horarios</h2>
                    <p class="text-center lead mt-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi quaerat labore nam quos? Pariatur exercitationem iure sequi illo tempore voluptas. Quisquam animi itaque consectetur commodi sapiente rerum incidunt, totam quae.
                    </p>
                    <table class="table table-hover text-center mt-5">
                        <thead>
                            <tr>
                                <th class="text-center">Día</th>
                                <th class="text-center">De</th>
                                <th class="text-center">Hasta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lunes</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Martes</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Miércoles</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Jueves</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Viernes</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Sábado</td>
                                <td>09:00</td>
                                <td>19:00</td>
                            </tr>
                            <tr>
                                <td>Domingo</td>
                                <td>Cerrado</td>
                                <td>Cerrado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </aside>
        </div>
    </div>

<?php
  include 'templates/footer.php';
?>