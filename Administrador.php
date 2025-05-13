<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            display: flex;
            background-color: #f0f0f0;
        }

        .sidebar {
            background-color: #333;
            color: #eee;
            padding-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 220px;
            border-right: 1px solid #555;
            overflow-y: auto; /* Para hacer el menú scrollable en pantallas pequeñas si es necesario */
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 15px;
            text-decoration: none;
            color: #eee;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .sidebar a img {
            margin-right: 15px;
            width: 40px; /* Reduje el tamaño de los iconos para pantallas más pequeñas */
            height: 40px;
            vertical-align: middle;
            filter: brightness(1.2);
        }

        .content {
            flex-grow: 1;
            margin-left: 220px;
            padding: 20px;
            background-color: #fff;
        }

        /* Media query para pantallas más pequeñas (hasta 768px de ancho) */
        @media (max-width: 768px) {
            body {
                flex-direction: column; /* Apilar el sidebar y el contenido verticalmente */
            }

            .sidebar {
                position: static; /* El sidebar fluye con el contenido */
                width: 100%;
                height: auto;
                border-right: none;
                border-bottom: 1px solid #555;
                display: flex;
                overflow-x: auto; /* Menú horizontal scrollable */
                padding-bottom: 10px;
            }

            .sidebar a {
                flex-shrink: 0; /* Evita que los elementos del menú se encojan */
                width: auto;
                padding: 10px 15px;
                text-align: center;
                flex-direction: column; /* Icono arriba, texto abajo */
            }

            .sidebar a img {
                margin-right: 0;
                margin-bottom: 5px;
                width: 30px;
                height: 30px;
            }

            .content {
                margin-left: 0;
                padding-top: 10px; /* Ajustar el padding superior para el contenido */
            }
        }

        /* Media query para pantallas aún más pequeñas (hasta 480px de ancho) */
        @media (max-width: 480px) {
            .sidebar a {
                padding: 8px 10px;
            }

            .sidebar a img {
                width: 25px;
                height: 25px;
                margin-bottom: 3px;
            }

            .content {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="sidebar">

    <a href="#" onclick="cargarContenido('vehiculos.php')">
        <img src="imagenes/FORTUNER.jpg" alt="Opción 1">
        Vehiculos
    </a>

    <a href="#" onclick="cargarContenido('clien_list.php')">
        <img src="imagenes/CLIENTE.png" alt="clientes">
        Clientes
    </a>

    <a href="#" onclick="cargarContenido('pagina2.php')">
        <img src="imagenes/Fast_car.jpeg" alt="Opción 2">
        Socios
    </a>


    <a href="#" onclick="cargarContenido('#')">
        <img src="imagenes/reservacion.jpeg" alt="Inicio">
        Reservaciones
    </a>

    </div>

    <div class="content" id="contenido-principal">
        <h1>Bienvenido al Panel Principal</h1>
        <p>Selecciona una opción del menú de la izquierda para ver su contenido aquí.</p>
    </div>

    <script>
        function cargarContenido(url) {
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('contenido-principal').innerHTML = data;
                })
                .catch(error => {
                    console.error('Error al cargar el contenido:', error);
                    document.getElementById('contenido-principal').innerHTML = '<p>Error al cargar la página.</p>';
                });
        }

        document.addEventListener('DOMContentLoaded', function() {
            cargarContenido('vehiculos.php');
        });
    </script>

</body>
</html>