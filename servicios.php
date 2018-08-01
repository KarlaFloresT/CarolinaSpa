<?php
    $titulo = 'Servicios';
    include 'templates/header.php';
    include 'templates/navegacion.php';
?>

	<div class="container pt-4">
		<div class="row no-gutters">
			<div class="col-12 hero">
				<img src="img/servicios.jpg" alt="" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block py-3 px-5">servicios</h2>
			</div>
		</div>
	</div>
    <div class="container pt-4">
        <div class="row">
            <main class="col-lg-8 contenido-principal">
                <h2 class="d-block d-md-none text-uppercase text-center">servicios</h2>

                <div id="servicios">
                    <div class="card">
                        <div class="card-header" id="servicio1">
                            <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="descripcion1">
                                Servicio 1
                            </button>
                            </h5>
                        </div>
                    
                        <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas quam, doloremque earum nulla reiciendis quaerat voluptatum perferendis ad culpa id, modi sapiente eos delectus officia veniam eius magnam eum a maiores atque laudantium vel nam? Aperiam dolor nisi reprehenderit enim explicabo architecto rerum ipsam provident pariatur. Odio laudantium dolor aliquam molestias vero quis sapiente maiores suscipit quam minima doloribus laboriosam necessitatibus quisquam quaerat id, libero ullam quia dolorum eum molestiae quae explicabo! Alias quasi voluptate vitae dignissimos incidunt optio, itaque cumque? Pariatur laboriosam doloremque sunt cum omnis officia voluptas error rerum dignissimos sed culpa veniam iure quas, harum necessitatibus alias.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Servicio 2
                            </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#servicios">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo nostrum velit ipsum impedit eveniet unde numquam perferendis similique sint, rem nam dicta optio voluptates deserunt ut tenetur nemo! Enim porro et ut dolorum. Perferendis quidem cumque fuga quibusdam facilis atque alias reprehenderit incidunt ea, magnam expedita mollitia recusandae sunt ut assumenda repudiandae quia doloribus doloremque, aspernatur tempore. Fuga, consequatur. Deserunt quia itaque corrupti voluptatibus harum, iure nemo quibusdam sequi laudantium voluptatem consequuntur, velit minus sint, sed consectetur dolores iusto. Quaerat nihil hic eligendi omnis qui a assumenda tenetur rem dolorem porro incidunt maxime, aliquam temporibus, sit doloribus at ipsum nam!
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Servicio 3
                            </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#servicios">
                            <div class="card-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo nostrum velit ipsum impedit eveniet unde numquam perferendis similique sint, rem nam dicta optio voluptates deserunt ut tenetur nemo! Enim porro et ut dolorum. Perferendis quidem cumque fuga quibusdam facilis atque alias reprehenderit incidunt ea, magnam expedita mollitia recusandae sunt ut assumenda repudiandae quia doloribus doloremque, aspernatur tempore. Fuga, consequatur. Deserunt quia itaque corrupti voluptatibus harum, iure nemo quibusdam sequi laudantium voluptatem consequuntur, velit minus sint, sed consectetur dolores iusto. Quaerat nihil hic eligendi omnis qui a assumenda tenetur rem dolorem porro incidunt maxime, aliquam temporibus, sit doloribus at ipsum nam!
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <aside class="col-lg-4 pt-4 pt-lg-0">
                <div class="sidebar p-3">
                    <h2 class="text-center text-uppercase mt-4">Nuevos clientes</h2>
                    <p class="lead text-center mt-4">
                        Recibe 20% de descuento con este cupón
                    </p>

                    <div class="cupon p-1 mt-5">
                        <p class="text-uppercase text-center px-1 py-5 mb-0">
                            <span class="display-4">20% Descuento</span> <br> en todos los servicios
                        </p>
                    </div>
                </div>
            </aside>
        </div>
    </div>

<?php
    include 'templates/citas.php';
    include 'templates/footer.php';
?>