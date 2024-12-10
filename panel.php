<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayluhome Tienda de Muebles</title>
    <!-- Enlace a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace al CSS Personalizado -->
    <link rel="stylesheet" href="styles.css">
    <!-- Enlace para la fuente "Great Vibes" -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <!-- Enlace para la fuente "Open Sans" -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div class="logo">
            <!-- Imagen envuelta en un enlace que redirige al index -->
            <a href="../index.php">
                <img src="../images/inicio.jpg" alt="Inicio"> <!-- Imagen pequeña a la izquierda -->
            </a>
            <div class="text-center">
                <h1><a href="#" class="sayluhome">Sayluhome</a></h1>
                <p class="tienda-muebles">Tienda de muebles</p>
            </div>
        </div>
    </header>

    <!-- Panel Principal -->
    <main class="container my-4">
        <div class="row">
            <!-- Tarjeta: Clientes -->
            <div class="col-md-4 mb-4">
                <a href="../CLIENTE/select.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="../images/cliente.png" class="card-img-top" alt="Clientes">
                        <div class="card-body text-center">
                            <h5 class="card-title">Clientes</h5>
                            <p class="card-text">Administra la información de los clientes.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Usuarios -->
            <div class="col-md-4 mb-4">
                <a href="../USUARIO/select.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="../images/usuario.jpg" class="card-img-top" alt="Usuarios">
                        <div class="card-body text-center">
                            <h5 class="card-title">Usuarios</h5>
                            <p class="card-text">Gestiona los permisos de los usuarios.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Egresos -->
            <div class="col-md-4 mb-4">
                <a href="../EGRESOS/select.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="../images/egresos.jpeg" class="card-img-top" alt="Egresos">
                        <div class="card-body text-center">
                            <h5 class="card-title">Egresos</h5>
                            <p class="card-text">Gestiona los egresos financieros.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Pedidos -->
            <div class="col-md-4 mb-4">
                <a href="../PEDIDO/select.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="../images/pedidos.jpg" class="card-img-top" alt="Pedidos">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pedidos</h5>
                            <p class="card-text">Administra los pedidos realizados.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Productos -->
            <div class="col-md-4 mb-4">
                <a href="../PRODUCTO/select.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="../images/productos.jpg" class="card-img-top" alt="Productos">
                        <div class="card-body text-center">
                            <h5 class="card-title">Productos</h5>
                            <p class="card-text">Controla el inventario de productos.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Factura -->
            <div class="col-md-4 mb-4">
                <a href="../FACTURA/factura.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="../images/factura.jpeg" class="card-img-top" alt="Facturas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Facturas</h5>
                            <p class="card-text">Gestiona las facturas de ventas.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Tipo de Producto -->
            <div class="col-md-4 mb-4">
                <a href="../Tipo_producto/select.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="../images/tipo_producto.jpg" class="card-img-top" alt="Tipo de Producto">
                        <div class="card-body text-center">
                            <h5 class="card-title">Categoria Producto</h5>
                            <p class="card-text">Clasifica los productos.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Ingresos -->
            <div class="col-md-4 mb-4">
                <a href="../INGRESOS/select.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="../images/ingresos.jpeg" class="card-img-top" alt="Ingresos">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ingresos</h5>
                            <p class="card-text">Administra los ingresos de la tienda.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Estados -->
            <div class="col-md-4 mb-4">
                <a href="../Estado_pedido/select.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="../images/estado.jpg" class="card-img-top" alt="Estados">
                        <div class="card-body text-center">
                            <h5 class="card-title">Estados</h5>
                            <p class="card-text">Gestiona el estado de los pedidos.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Proveedores -->
            <div class="col-md-4 mb-4">
                <a href="../PROVEEDOR/select.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="../images/proveedores.jpeg" class="card-img-top" alt="Proveedores">
                        <div class="card-body text-center">
                            <h5 class="card-title">Proveedores</h5>
                            <p class="card-text">Gestiona los proveedores.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Detalle de Pedido -->
            <div class="col-md-4 mb-4">
                <a href="../Detalle_pedido/select.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="detalle_pedido.png" class="card-img-top" alt="Detalle de Pedido">
                        <div class="card-body text-center">
                            <h5 class="card-title">Detalle de Pedido</h5>
                            <p class="card-text">Revisa los detalles de los pedidos.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Tarjeta: Material -->
            <div class="col-md-4 mb-4">
                <a href="../MATERIAL/select.php" class="text-decoration-none">
                    <div class="card custom-card">
                        <img src="../images/material.jpeg" class="card-img-top" alt="Material">
                        <div class="card-body text-center">
                            <h5 class="card-title">Material</h5>
                            <p class="card-text">Administra los materiales para productos.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>

    <!-- Pie de Página -->
    <footer class="bg-primary text-white text-center py-4">
        <p>SENA -(CEGAFÉ) ITEDRIS - TUNJA<br>
        TGO. EN ANÁLISIS Y DESARROLLO DE SISTEMAS DE INFORMACIÓN<br>
        ELABORADO POR: John Rativa Suárez<br>
        <a href="mailto:johnrativa922@gmail.com">Contactar</a></p>
    </footer>
</body>
</html>
