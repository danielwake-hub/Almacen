<?php include('layouts/header.php'); ?>

<!-- Sidebar Start -->
<?php include('layouts/sidebar.php'); ?>
<!-- Sidebar End -->


<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <?php include('layouts/nav.php'); ?>
    <!-- Navbar End -->


    <div class="col-12">
        <button type="button" class="btn btn-primary position top-0 end-0 m-3" data-bs-toggle="modal" data-bs-target="#categoryModal">
            Abrir Modal
        </button>
    </div>


    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Lista de categorias</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Fecha de Creación</th>
                                    <th scope="col">Estatus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tecnología</td>
                                    <td>Laptop</td>
                                    <td>4</td>
                                    <td>Artículos y accesorios de tecnología</td>
                                    <td>12/08/2024</td>
                                    <td>Activo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Casa y Hogar</td>
                                    <td>Estufa</td>
                                    <td>5</td>
                                    <td>Productos para la casa y el hogar</td>
                                    <td>12/08/2024</td>
                                    <td>Activo</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ropa</td>
                                    <td>Camisa</td>
                                    <td>7</td>
                                    <td>Ropa y calzado para toda la familia.</td>
                                    <td>12/08/2024</td>
                                    <td>Desactivado</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Tecnología</td>
                                    <td>Laptop</td>
                                    <td>4</td>
                                    <td>Artículos y accesorios de tecnología</td>
                                    <td>12/08/2024</td>
                                    <td>Activo</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Casa y Hogar</td>
                                    <td>Estufa</td>
                                    <td>5</td>
                                    <td>Productos para la casa y el hogar</td>
                                    <td>12/08/2024</td>
                                    <td>Activo</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Ropa</td>
                                    <td>Camisa</td>
                                    <td>7</td>
                                    <td>Ropa y calzado para toda la familia.</td>
                                    <td>12/08/2024</td>
                                    <td>Desactivado</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Tecnología</td>
                                    <td>Laptop</td>
                                    <td>4</td>
                                    <td>Artículos y accesorios de tecnología</td>
                                    <td>12/08/2024</td>
                                    <td>Activo</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Casa y Hogar</td>
                                    <td>Estufa</td>
                                    <td>5</td>
                                    <td>Productos para la casa y el hogar</td>
                                    <td>12/08/2024</td>
                                    <td>Activo</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Ropa</td>
                                    <td>Camisa</td>
                                    <td>7</td>
                                    <td>Ropa y calzado para toda la familia.</td>
                                    <td>12/08/2024</td>
                                    <td>Desactivado</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->

    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalLabel">Agregar Categoría</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="categoryForm">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Nombre de la Categoría:</label>
                            <input type="text" class="form-control" id="categoryName" name="categoryName" required>
                        </div>
                        <div class="mb-3">
                            <label for="categoryDescription" class="form-label">Descripción de la Categoría:</label>
                            <textarea class="form-control" id="categoryDescription" name="categoryDescription" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="categoryStatus" class="form-label">Estado:</label>
                            <select class="form-select" id="categoryStatus" name="categoryStatus" required>
                                <option value="activo">Activo</option>
                                <option value="desactivo">Desactivo</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <?php include('layouts/footer.php'); ?>
    <!-- Footer End -->
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/chart/chart.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/waypoints/waypoints.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/lib/tempusdominus/js/moment.min.js"></script>
<script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="assets/js/main.js"></script>
</body>

</html>