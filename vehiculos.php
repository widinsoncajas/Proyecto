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
            background-color: #333; /* Fondo gris oscuro */
            color: #eee; /* Texto más claro para contraste */
            line-height: 1.6;
        }

        header {
            background-color: rgba(129, 0, 0, 0.95); /* Rojo brillante */
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
            background-color: rgba(141, 3, 3, 0.93); /* Rojo brillante */
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn:hover {
            background-color: rgba(139, 3, 3, 0.93); /* Rojo oscuro */
            transform: translateY(-2px);
        }

        .menu {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #222; /* Fondo ligeramente más oscuro para el menú */
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Sombra más pronunciada */
        }

        .menu .logo {
            font-size: 24px;
            font-weight: bold;
            color: rgba(160, 9, 9, 0.83); /* Rojo brillante */
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
            color: #ddd; /* Texto de navegación más claro */
            font-size: 16px;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
            color: #fff;
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
            background: #444; /* Fondo más oscuro para los elementos de la navbar */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .navbar li:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.5);
        }

        .navbar li a {
            text-decoration: none;
        }

        .navbar li img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
            opacity: 0.8; /* Ligeramente transparente para el contraste */
        }

        .navbar li h3 {
            padding: 10px;
            font-size: 18px;
            background: rgba(175, 3, 3, 0.91); /* Rojo brillante */
            color: white;
            margin: 0;
            border-radius: 0 0 10px 10px;
        }

        footer {
            background-color: #000; /* Negro */
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <header>
        <h1>Bienvenido Señor Administrador</h1>
    </header>

    

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

    
</footer>

</body>
</html>