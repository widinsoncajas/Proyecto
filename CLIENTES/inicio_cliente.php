<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Alquiler de Vehículos</title>
    <style>
        /* Estilos globales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8; /* Un gris muy claro para el fondo */
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #000; /* Negro para el encabezado */
            color: white;
            padding: 15px 20px;
            text-align: center;
        }

        header h1 {
            font-size: 24px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 20px 0;
        }

        .btn {
            text-decoration: none;
            color: white;
            background-color: #cc0000; /* Rojo para los botones */
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn:hover {
            background-color: #aa0000; /* Rojo más oscuro al pasar el ratón */
            transform: translateY(-2px);
        }

        .menu {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white; /* Blanco para el menú */
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .menu .logo {
            font-size: 24px;
            font-weight: bold;
            color: #cc0000; /* Rojo para el logo */
            text-decoration: none;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        nav a {
            text-decoration: none;
            color: #000; /* Negro para los enlaces de navegación */
            font-size: 16px;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
            color: #cc0000; /* Rojo al pasar el ratón */
        }

        .navbar {
            display: flex;
            overflow-x: auto; /* Habilita el scroll horizontal en caso de necesitarlo */
            gap: 20px;
            list-style: none;
            padding: 20px 0;
        }

        .navbar li {
            display: inline-block;
            text-align: center;
            min-width: 200px;
            max-width: 300px;
            background: white; /* Blanco para los elementos de la navbar */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .navbar li:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .navbar li img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .navbar li h3 {
            padding: 10px;
            font-size: 18px;
            background: #cc0000; /* Rojo para el fondo del título de la navbar */
            color: white;
            margin: 0;
            border-radius: 0 0 10px 10px;
        }

        footer {
            background-color: #000; /* Negro para el pie de página */
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <header>
        <h1>Bienvenido al Mejor Sitio de Alquiler de Vehículos</h1>
    </header>

    <div class="btn-container">

        <a href="reg_clientes.php" class="btn">Registrarse como Cliente</a>
        <a href="xxx.php" class="btn">Ver registros de mis reservas</a>


    </div>

    <div class="menu container">
        <nav>
            <a href="index.html" class="logo">Fast Car Quevedo</a>
            <div>
                <a href="#">Usuario</a>
                <img src="imagenes/usuario.png" style="height: 20px; border-radius: 50%;">

                <a href="/acceso.php">Cerrar sesión</a>
                <img src="imagenes/cerrae.jpeg" style="height: 20px; border-radius: 50%;">
            </div>
        </nav>

       <ul class="navbar">
            <li>
                <a href="Kia_blanco.php">
                    <img src="imagenes/descarga (1).jpeg" alt="Gama Alta">
                    <h3>GAMA ALTA</h3>
                </a>
            </li>
            <li>
                <a href="GAMA_MEDIA/GAMA_MEDIAA.php">
                    <img src="imagenes/CAPTIVA.jpeg" alt="Gama Media">
                    <h3>GAMA MEDIA</h3>
                </a>
            </li>
            <li>
                <a href="Kia_blanco.php">
                    <img src="imagenes/FORTUNER.jpg" alt="Gama Baja">
                    <h3>GAMA TODO TERRENO</h3>
                </a>
            </li>
            <li>
                <a href="GAMA_FAMILIAR/GAMA_FAMI.php">
                    <img src="imagenes/gama familiar.jpeg" alt="Gama Familiar">
                    <h3>GAMA FAMILIAR</h3>
                </a>
            </li>


        </ul>
    </div>

    <footer style="background-color: #000; color: #fff; padding: 20px; text-align: center;">
        <p>© 2025 Alquiler de Vehículos - Todos los derechos reservados.</p>
        <p><strong>Dirección:</strong> Av. Quito y Calle Bolívar, Quevedo, Ecuador</p>
        <p><strong>Correo:</strong> <a href="mailto:info@fastcarquevedo.com" style="color: #fff;">info@fastcarquevedo.com</a></p>
        <p><strong>WhatsApp:</strong> <a href="https://wa.me/593979720925" style="color: #fff;" target="_blank">+593979720925</a></p>
        <p>
            <a href="https://www.facebook.com/fastcarquevedo" target="_blank" style="color: #fff; margin: 0 10px;">Facebook</a> |
            <a href="https://www.instagram.com/fastcarquevedo" target="_blank" style="color: #fff; margin: 0 10px;">Instagram</a>
        </p>
</footer>

</body>
</html>