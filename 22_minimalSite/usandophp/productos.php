<?php include('header.php'); ?>

<main>
    <div class="container">
        <h1>Bienvenido a la Página Productos</h1>
        <p>Contenido de la página productos</p>

        <div class="container mt-5 mb-5">
        <h2>Tabla de Productos</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>iPhone 13</td>
                    <td>Smartphone de alta gama</td>
                    <td>$999</td>
                    <td>10 unidades</td>
                    <td><button class="btn btn-sm btn-primary">Comprar</button></td>
                </tr>
                <tr>
                    <td>MacBook Air</td>
                    <td>Portátil ligero y potente</td>
                    <td>$1,299</td>
                    <td>5 unidades</td>
                    <td><button class="btn btn-sm btn-primary">Comprar</button></td>
                </tr>
                <tr>
                    <td>Canon EOS</td>
                    <td>Cámara réflex digital</td>
                    <td>$899</td>
                    <td>8 unidades</td>
                    <td><button class="btn btn-sm btn-primary">Comprar</button></td>
                </tr>
                <tr>
                    <td>PS5</td>
                    <td>Consola de juegos</td>
                    <td>$499</td>
                    <td>12 unidades</td>
                    <td><button class="btn btn-sm btn-primary">Comprar</button></td>
                </tr>
                <tr>
                    <td>Xbox Series X</td>
                    <td>Consola de juegos</td>
                    <td>$599</td>
                    <td>9 unidades</td>
                    <td><button class="btn btn-sm btn-primary">Comprar</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    </div>
</main>

<?php include('footer.php'); ?>


